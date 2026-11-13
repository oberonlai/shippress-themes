# Hojo Brokers: design spec (stage 1 spec, binding for implementation)

Row b30-5 · slug `hojo-brokers` · type **landing** (rules.landing_track: home is one long conversion page with an anchor menu and one repeated CTA) · industry: commercial insurance broker, cover-review landing page · five languages en, zh-TW, ja, fr, de · font_direction **sans** · IMAGERY **photo** · form contract **v1** (steps/form-contract-v1 exists).

Reference (only one): **https://www.ms-ins.com/business/** (Mitsui Sumitomo Insurance, corporate customers page). Screens `brand/ref/ms-biz-first.png`, `ms-biz-full.png`, `ms-first.png`, `ms-home-full.png`; measured values in `brand/reference-tokens.md` (cited below as RT(a)…RT(g)). No secondary site.

What we take: the page-head band with two skewed wedges, the photograph-first business hero with a pale-hazed side carrying the statement, the two-tab "by type / by trade" index with notched cells, the three flush stepping step columns, the yellow CTA with an arrow disc and a darker bottom edge. What we never take: their photos, copy, logo, pictogram icons, the corporate mega-nav, the page layout as a whole.

---

## 0. Fixed brand facts (identical on every page, in every language; brand.md must match)

- **Name:** Hojo Brokers. Independent commercial insurance broker for small and mid-size firms with physical premises (warehouses, workshops, distributors). Founded **2009**.
- **Location (fictional, neutral):** 3rd floor, 18 Quayside Road, Calder Bay. Phone **+00 41 2290 6604**, email **review@hojobrokers.example**.
- **Hours:** Mon–Fri **08:30–17:30**; site visits Mon–Sat by appointment (**Sat 09:00–13:00**); closed Sundays and public holidays. Claims line answered in office hours, same day.
- **One CTA wording (everywhere):** **"Ask for a cover review"** → home `#ask` (on inner pages → `/contact/`). Never a second CTA wording.
- **People (6):**
  1. **Mara Hojo**, founder and principal broker (since 2009) — property and business interruption.
  2. **Daniel Okafor**, senior broker — stock, warehousing, goods in transit.
  3. **Inès Laurent**, broker — liability and contract wording.
  4. **Priya Raman**, risk surveyor — site visits, sprinkler and storage reports.
  5. **Tomas Becker**, claims advocate — stays with the client from first call to settlement.
  6. **Sofia Varga**, client service lead — renewals, certificates, schedules.
- **Review process (3 steps, T2):**
  - **01 Visit and read** — a 90-minute walk of the yard and building with the owner, plus the current schedule and wordings.
  - **02 Map the gaps** — a written cover map within **10 working days**: what is covered, what is not, what is underinsured.
  - **03 Placement explained** — a 60-minute meeting: options from **3–5 insurers**, every exclusion read in plain words, commission disclosed. No obligation to place.
- **Fees (6 rows; fees table, same on home preview and /fees/):**
  | Item | Time | Price |
  |---|---|---|
  | First cover review, one site | visit 90 min + written map | €0 (no fee; commission disclosed if you place) |
  | Multi-site review, 2–5 sites | 2–4 weeks | €480 |
  | Contract wording read, per contract | 5 working days | €160 |
  | Risk survey report (half-day visit) | 1 visit | €320 |
  | Annual renewal review | each renewal | included |
  | Claims advocacy outside a placement | per month | €90 |
- **Cases (3, "In their case", no guaranteed outcomes, no figures promised):**
  1. **Cold-store distributor, 14 staff** — stock declared at average, not peak season value; the review moved to a seasonal stock clause.
  2. **Timber merchant, 2 yards** — business interruption indemnity period was 6 months; rebuilding the drying kiln takes about 14; indemnity period lengthened.
  3. **Contract print workshop, 9 staff** — customers' paper and plates on site were not covered as "goods in trust"; added.
- **Covers listed (T3, tab "By cover", 6):** Property and stock · Business interruption · Public and products liability · Employers' liability · Goods in transit · Cyber and data.
- **Trades listed (T3, tab "By trade", 6):** Warehousing and logistics · Food distribution and cold store · Light manufacturing · Timber and building supplies · Print and packaging workshops · Wholesale and trade counters.
- **Numbers that recur:** 2009, 6 people, 90-minute visit, 10 working days, 3–5 insurers, 60-minute meeting, €0 first review. Same in all five languages.

---

## 1. Signature techniques (three; all obvious at a glance; never "softened")

### T1. Slate wedge head + photo-first split (source: ms-ins.com/business/ page head and hero, ref/ms-biz-first.png; RT(c)(e)(f))
- **Reference:** a 112 px pale page-head band holding the page title left; two parallelogram wedges (mint→green gradient, skewed ≈35°) bleed off the right edge of the band; directly under it a full-bleed 4.2:1 documentary photo of two people at a desk, the left ≈45% faded to pale so a bold two-line green statement sits on it.
- **Ours (home first screen):** page-head band `#F4F6F8` with a 45° diagonal 1 px hatch at 4% ink (as the reference's grey hatch), height **176 px** desktop, holds the H1. Two wedges at the right: wedge A `clip-path: polygon(30% 0,100% 0,100% 100%,0 100%)` 420 × 112 at right 0, bottom 0, gradient `#E4E9EE → #8D9AA8`; wedge B 300 × 176 full band height, right 0, gradient `#8D9AA8 → #5E6C7B`, overlapping A. Both bleed off the right edge (no gap), skew angle 35° via the polygon. **Mirrored for the row's hero (photo-left-text-right):** under the band, the photo band is full bleed, photo occupies x 0 → 62%, its **right** 30% fades to `#F4F6F8` (linear-gradient overlay inside the figure, `to right, transparent 55%, #F4F6F8 92%`), text column on the right sits on the haze and on the paper beyond it.
- **Do not dilute:** wedges must be solid-coloured, at least 112 px tall and touch the right viewport edge; the photo must be full bleed (no radius, no frame), the haze must be visible; text never on top of the faces.
- **Inner pages (all 10 inner pages):** every inner page opens with the same page-head band (height 140 px, H1 3rem) and the two wedges, followed by a **photo band** 1440 × 360 (4:1) with the same right-side haze carrying a one-line statement (pages: Covers, How a review runs, Trades, Fees, Brokers, Claims, Cases, Contact). Legal pages (Privacy, Terms, Thanks) get the band and wedges without the photo.

### T2. Three flush stepping columns 01/02/03 (source: ms-ins.com/business/ "flow to enrolment" band, ref/ms-biz-full.png; RT(f))
- **Reference:** three full-height columns flush with no gaps, tones stepping, large white numerals 01/02/03 (≈52 px), white heading and short text.
- **Ours (home block 6 "How a review runs"):** full container width 1120, three columns of equal width, **0 gap**, min-height 420 px. Backgrounds stepping light → dark: `#8D9AA8`, `#5E6C7B`, `#243241`. Numeral Inter Tight 700 **5rem**/1, white, letter-spacing −0.02em, top-left with 40 px padding. Under it: H3 white 1.5rem, 60-word paragraph Public Sans 1rem/1.75 `#FFFFFF` at 0.9 opacity, then a meta line (duration) with a 1 px white rule above. The join between columns is a **right-pointing chevron notch** (CSS clip-path on columns 1 and 2: `polygon(0 0, calc(100% - 22px) 0, 100% 50%, calc(100% - 22px) 100%, 0 100%)`, next column has `margin-left:-22px` so they stay flush). Contrast checked: white on `#8D9AA8` is 3.0 → for column 1 use ink `#243241` text instead of white (contrast 6.0); columns 2 and 3 white.
- **Do not dilute:** no gaps, no cards, no shadows, numerals ≥5rem; never turned into a vertical timeline on desktop.
- **Inner pages:** "How a review runs" page uses the full band with expanded copy; Fees page repeats it compact (min-height 220, numerals 3.5rem); Contact page shows it compact above the form ("What happens after you ask"); Claims page uses a 3-step variant "Call · Document · Settle" in the same tones.

### T3. Two-tab index with notched cells (source: ms-ins.com/business/ "search by type / by industry", ref/ms-biz-full.png, ms-biz-first.png bottom; RT(d)(f))
- **Reference:** two equal tabs on a mint ground; active tab solid deep green, white bold label, small down-pointing notch under its centre; idle tab pale teal with an arrow disc; below, a panel with a 1 px green frame holding a 3-column grid of cells, each cell with a small grey triangular notch bottom-right.
- **Ours (home block 4 "Which covers a review reads"):** mist `#E4E9EE` full-bleed ground, container 1120. Two tabs 50/50, height 56 px, radius 4 px 4px 0 0, gap 10 px: active `#5E6C7B` white Inter Tight 600 1.125rem with a 14 × 8 px down-triangle in `#5E6C7B` under its centre; idle `#C9D2DB` text `#243241` with a 22 px white arrow disc right. Panel: white, 1 px `#5E6C7B` frame, padding 32, grid 3 × 2, gap 12 (RT(c)). Cell: 1 px `#D5DBE1` border, radius 4, padding 20, title Inter Tight 600 1.0625rem `#243241`, 2-line text Public Sans 0.9375rem `#4A5767`, **notch** = 14 × 14 right-triangle `#8D9AA8` in the bottom-right corner (`clip-path: polygon(100% 0,100% 100%,0 100%)` on a ::after, decorative, no text). Cells link to `/covers/#<slug>` and `/trades/#<slug>`.
- **Tab switching without JS:** two radio inputs + labels before the panels (`.hb-tabs input:checked + label`, `#hb-tab-trade:checked ~ .hb-panel--trade {display:block}`); no-JS works; in the editor both panels are visible stacked (editor CSS). Panel switch fade 0.3s ease (RT(g) tab fadeIn). Labels are real text in block markup (editable).
- **Do not dilute:** the frame, the active-tab notch and the cell notches must be visible; not converted to plain cards.
- **Inner pages:** Covers page = "By cover" panel expanded (6 cells become 6 sections, each heading prefixed by a notched cell marker); Trades page = "By trade" panel expanded; Cases page uses the notched cell for each case card; News archive cards use the notch.

### Supporting (from the reference, not counted as signatures; all required)
- **CTA button:** ochre `#D8A93E`, ink text `#243241` Inter Tight 600 1rem, radius 5 (RT(d)), padding 16 / 56 / 16 / 28, `box-shadow: inset 0 -3px 0 #A9802A` (darker bottom edge), 22 px round white disc at right 18 px with a 6 px ink chevron; hover `background:#E1B755` transition `background-color .3s ease, transform .3s ease` (RT(g)), translateY(1px).
- **Yard strip:** four flush 1:1.1 documentary photos, container 1120, gap 0, and a widely tracked line (Inter Tight 500 0.875rem, letter-spacing 0.32em, uppercase in Latin) on the white strip under their bottom edge (RT(e) portrait strip).
- **Nav band:** solid slate `#5E6C7B` 56 px band under a white utility row (RT(c) 2 tiers).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Draws:** a pale hatched title band with two green wedges cutting in from the right; below, a wide photograph of two people in dark suits at a white desk: one hand pointing at a printed report with a pie chart, the other hand holding a red pen above a tablet; the left side of the photo is washed to near-white and carries a bold two-line green statement.
- **Story:** "through insurance we back a firm's challenges" — someone sits with you and reads your risk off the paper before anything is sold.
- **Signature motion:** essentially static; the tab panel fades in (≈0.3–0.4 s), button hover .3s ease. No scroll-linked effects (RT(g)).

### (2) Our translation (same composition, same motion idea, same image type)
A mezzanine office above a warehouse: the broker (Daniel Okafor, dark jacket) sits beside the owner of a distribution firm (shirt sleeves, hi-vis vest over the chair) at a pale desk; his index finger runs along one row of a printed cover schedule, her pencil hovers over the same row, a tablet with a spreadsheet lies by the paper; behind the glass the yard: pallet racking, a forklift, soft daylight from the roller door. The photo washes to paper on its right, where the statement sits. Story: **"Read the risk before the policy."** Motion stays as quiet as the reference: a slow photo **parallax** on the hero (ours, required) and a single **hairline that draws along the schedule rule** under the statement (sp-reveal--wipe is not allowed in the hero → implemented as a CSS keyframe on load, 0.9 s cubic-bezier(.65,0,.35,1), reduced-motion: drawn).

### (3) KV checklist (all implemented on the home first screen at 1440 × 900 and visible)
| # | Reference element | Our version | Position | Motion | Photo used |
|---|---|---|---|---|---|
| 1 | Two skewed green wedges bleeding off the right of the hatched title band | Two slate wedges (A 420 × 112 mist→`#8D9AA8`, B 300 × 176 `#8D9AA8`→`#5E6C7B`), hatch at 4% | page-head band y 92–268, right edge x 1020–1440 | none (static) | — (CSS) |
| 2 | Two people over a printed report, one pointing | Broker pointing along a cover schedule row, warehouse owner with pencil over the same row | photo band y 268–788, x 0–893 (62%), full bleed left | `sp-parallax` `--sp-par: 8%` on the figure img | **H1** `hero-mezzanine-desk` |
| 3 | Pale haze on the photo's side carrying a bold two-line green statement | Haze on the photo's **right** 30% into paper; statement "We read the yard, the stock and the small print before we place a single policy." Inter Tight 600 1.5rem/1.4 `#5E6C7B` | text column x 860–1320, y 360–520 (over haze and paper, never over faces) | none | H1 (haze is a gradient overlay) |
| 4 | Pen and tablet details in hand | Pencil tracing the row, tablet with a schedule spreadsheet, printed pages | inside H1, lower centre | none | H1 |
| 5 | Office background | Warehouse yard beyond the glass: racking, forklift, roller door daylight | H1 background, top two-thirds | moves with the parallax layer | H1 |
| 6 | Yellow CTA with round arrow disc, darker bottom edge | Ochre "Ask for a cover review" with white arrow disc, inset 3 px `#A9802A` | text column under statement, y ≈ 600–656 | hover .3s ease; plus the schedule hairline (2 px `#5E6C7B`, 0 → 240 px, 0.9 s on load) above the statement | — |

H1 is in the image list (§6) and marked **home**. The H1 (headline) itself sits in the page-head band: "Read the risk before the policy." (see §3).

---

## 3. Home page

### First screen composition (1440 × 900)
- **Header (y 0–92):** utility row 36 px white (left: wordmark "Hojo Brokers" Inter Tight 700 1.25rem `#243241` + small "Commercial insurance brokers since 2009"; right: phone, hours, language switcher) + **nav band 56 px `#5E6C7B`**: anchor menu (Covers · How a review runs · Fees · Brokers · Questions) in white Public Sans 500 0.9375rem, 1 px `#7A8796` dividers between items (RT nav), and the ochre CTA compact (height 40) at the right end. Exactly one menu. Sticky: nav band only.
- **Page-head band (y 92–268):** paper `#F4F6F8` + hatch; H1 **"Read the risk before the policy."** Inter Tight 700 **4.5rem**/1.05, letter-spacing −0.02em, `#243241`, x 160, single line at 1440 (wraps to 2 below 1280); small label above it "COMMERCIAL COVER REVIEW" Public Sans 600 0.75rem 0.16em `#5E6C7B`. Wedges T1 right.
- **Photo band (y 268–788, height 520):** H1 photo x 0–62% with right haze; right column (x 860–1320, max-width 30rem — the "narrow column" of the row's first_screen): hairline, statement (KV #3), lead 30 words Public Sans 1.0625rem/1.75 `#243241` ("A first review costs nothing: we walk your site for 90 minutes, then show you in writing what your current cover does and does not pay for."), CTA, then a text line "Mon–Fri 08:30–17:30 · +00 41 2290 6604" 0.875rem `#4A5767`.
- **Below (y 788–900):** the top of block 3 on white: label + first line of the H2 visible (so the page reads as continuing).
- Saturated share: slate band 1440 × 56 + wedges ≈ 8% + CTA ≈ 0.6% → **≈ 9% (cap 12%, never >15%)**; photo graded desaturated grey-navy.
- **Forbidden in the first screen:** table, form, search box, giant centred text, reveal animation, vertical text, absolutely positioned labels over the photo.
- **Mobile 390:** header 64 (wordmark + menu button; nav band collapses into a slate drawer), page-head band 120 px with H1 **2.75rem**/1.08 left, wedges scaled to 40% (B 120 × 120, A 160 × 64) staying behind/right of the text with `z-index` below text and never overlapping the H1 glyphs (H1 max-width 75%); then photo H1 full width 4:3, haze switched to a **bottom** fade (to paper), then statement / lead / full-width CTA in normal flow. No absolute labels, no vertical text.

### Block order (landing long-form, single column flow)
| # | Pattern | Anchor | Purpose | Layout and photos | Copy |
|---|---|---|---|---|---|
| 1 | header | — | menu + CTA | see above | — |
| 2 | `hb-hero` | `#top` | KV (T1) | first screen above. **H1** | H1 + statement + 30-word lead |
| 3 | `hb-reads` | `#reads` | narrative: what a review reads | White, padding 96 / 96. Container 1120, 5/7 split: left 5/12 label "WHAT A REVIEW READS", H2 "Most firms are insured. Fewer know for what." Inter Tight 700 2.5rem; right 7/12 **two narrative paragraphs** (≈70 + 60 words: stock declared at average, indemnity periods, goods in trust). Under, full width: **R1** (Priya measuring rack clearance with a laser meter) 16:9 left 7/12 + **R2** (hands on a policy wording with a pencil, marked clause) 4:5 right 5/12 offset down 64 px. | 130 words |
| 4 | `hb-index` | `#covers` | T3 two-tab index | §1 T3. No photos inside cells (as reference). Under the panel, right aligned text link "All covers explained →". | 12 cells × 15 words |
| 5 | `hb-visit` | — | narrative photo row: the yard visit | Full-bleed `sp-parallax` band (`--sp-par: 10%`) 1440 × 560 with **V1** (broker and owner walking the yard between racking, clipboard) as background, left 40% dark haze `rgba(36,50,65,.72)` → transparent; white text block x 160, max 30rem: H2 "Ninety minutes on your floor." 2.5rem, one paragraph 60 words (what we look at: sprinklers, stacking heights, the trucks that are not yours). | 70 words |
| 6 | `hb-steps` | `#review` | T2 how a review runs | White, padding 96. H2 left aligned "How a review runs" 2.5rem + 1-line intro; then T2 band. Under it a row of two photos 1:1 at 260 px: **S1** (cover map printed on an A3 sheet with coloured markers), **S2** (meeting room, broker explaining three insurer quotes laid side by side) right aligned under columns 2–3. | 3 × 60 + 20 words |
| 7 | `hb-wording` | — | how a placement is explained (narrative) | Mist `#E4E9EE` band, padding 96. Left 6/12 **W1** (Inès reading a wording aloud to a client across a table, pages tabbed) 4:5, full height of the copy; right 6/12: label "PLACEMENT, IN PLAIN WORDS", H2 "Every exclusion read aloud before you sign." 2.25rem, **three paragraphs** (≈50 words each: options from 3–5 insurers; exclusions read; commission disclosed, no obligation). | 160 words |
| 8 | `hb-yard` | `#brokers` | people (yard strip) | White. H2 "Six people. Most of them have stood in a yard like yours." 2.25rem left. **Yard strip**: four flush 1:1.1 photos **Y1** Mara Hojo at a desk with a site plan, **Y2** Daniel Okafor at a loading dock, **Y3** Priya Raman under a sprinkler head with a torch, **Y4** Tomas Becker on a phone call taking notes; tracked caption line under them "HOJO · OKAFOR · RAMAN · BECKER". Then a 2-column text list of all **6 people** (name Inter Tight 600 + focus Public Sans 0.9375rem). | 6 lines + 20 words |
| 9 | `hb-case` | — | proof: in their case | White, padding 0/96. Left 7/12 **C1** (timber yard, owner and broker beside a stacked lumber bay) 3:2; right 5/12: label "IN THEIR CASE", H3 case 2 (timber merchant) 2 paragraphs; under, two notched cells (T3 cell style) for cases 1 and 3, linking to /cases/. | 110 words |
| 10 | `hb-fees` | `#fees` | fees preview | White, container 1120. H2 "What it costs" + one line. **Fee table full width** (6 rows from §0; columns item / time / price; price `white-space:nowrap; text-align:right`). Small note "No fee for the first review. When you place cover through us, our commission is shown on every quote." No reveal. | 6 rows + 30 words |
| 11 | `hb-ask` | `#ask` | the single CTA band + newsletter slot | Slate `#5E6C7B` band with wedges A/B mirrored at the left edge (T1 echo), padding 96. Left 7/12 white: H2 "Ask for a cover review." 3rem, 40 words (what to send: current schedule, address of each site), CTA (ochre) + phone + email. Right 5/12: **Q1** photo (owner's hand passing a folder of schedules across a desk) 4:5. Below a 1 px `rgba(255,255,255,.3)` rule: compact newsletter row "Renewal notes, four times a year" + `shippress_form_slot` kind newsletter (dark-ground variant). | 60 words |
| 12 | `hb-questions` | `#questions` | FAQ (5 questions, `details`) | White, container 860, `details/summary` rows, 1 px `#D5DBE1` rules, + / − disc in slate; slideDown-like height transition .3s ease (RT(g) accordion). | 5 × 40 words |
| 13 | footer | — | access | Deep ink `#243241`, padding 72/32: wordmark, address, hours, phone, email; links (Covers, Trades, Fees, Brokers, Claims, Cases, News, Newsletter, Contact, Privacy, Terms); © line. |  |

Home photo positions: **H1, R1, R2, V1, S1, S2, W1, Y1, Y2, Y3, Y4, C1, Q1 = 13** (≥ 8), none twice.
English home ≥ 300 words; narrative paragraphs in #3 (2), #5 (1), #7 (3), #9 (2) → ≥ 3 paragraphs ≥ 20 words. CJK home ≥ 550 characters.

### Comparison with the most recent themes (home block order must not match)
| Theme | Home block order | Hojo differs because |
|---|---|---|
| Kaimon Fishmongers | hanging stage photos → dock band → ruled landing rows → cut steps + portrait → day strip → kitchens → price board → journal → letter → footer photo | no hanging/stage hero; our hero is a wedge band + split photo; steps are flush coloured columns, not cut steps with a portrait |
| Kohaku Brasserie | three-moment cross-fade hero → night band → ellipse statement → pinned letterbox rows → afternoon 2-col → price ledger → notes ledger → book band | no cross-fade, no pinned rows, no ellipse; a tabbed index is our second block of substance |
| Akiha College | split framed window → rail + case wall → sticky portrait steps → rail figures → curtain slit → employers → fees → journal → apply band | no framed window or rails; no sticky steps; case appears once as a photo + notched cells |
| Kaze Clinic | full-bleed hero + info bar → lead flip → 3-col symptoms → method rows → mist card → fees → hours → 3 journal → letter | our 3-column grid lives inside a framed tab panel; no info bar, no journal on home, FAQ instead |
Order of ours: wedge head + split photo → reads (2 paragraphs + offset photo pair) → **tab index** → parallax visit band → **flush step band** → wording (mist, 3 paragraphs) → yard strip → case → fees → slate ask band with newsletter → FAQ. None of the four uses a tab index, wedge head, or flush stepping columns.

---

## 4. Inner pages (13 pages; T1 head + photo band on all content pages, T2 / T3 where noted)

| Page | Slug | Content | Signatures | Photos (band / inline) |
|---|---|---|---|---|
| Covers | /covers/ | 6 covers, each: what it pays for, what it usually leaves out, one question we ask on the visit; anchor id per cover | T1, T3 (tab index at top, notched cell as each section marker) | band **R1** |
| Trades | /trades/ | 6 trades, each: typical gaps, which covers matter most, a 2-line example | T1, T3 ("By trade" panel expanded) | band **C2** |
| How a review runs | /review/ | full T2 band with expanded copy; what to send; what the cover map looks like; timings | T1, T2 full | band **S1** |
| Fees | /fees/ | full fee table (§0), commission disclosure, what is included, compact T2 | T1, T2 compact | band **S2** |
| Brokers (about) | /about/ | history since 2009; 6 people: two rows of two wide portraits (photo 5/12 + text 7/12) for Mara, Daniel, Priya, Tomas, then Inès and Sofia as text; office | T1, yard strip | band **A1**; inline **Y1–Y4** |
| Claims | /claims/ | what happens when something goes wrong, Tomas's role, hours, T2 variant "Call · Document · Settle" | T1, T2 variant | band **CL1** |
| Cases | /cases/ | the 3 cases from §0, each a notched cell with photo 3:2 + 2 paragraphs | T1, T3 cells | band **V1**; inline **C2** (case 1), **C1** (case 2), **C3** (case 3) |
| Contact | /contact/ | address, hours, phone, email, text directions, compact T2 "What happens after you ask", contact form slot (§8) | T1, T2 compact | band **Q1** |
| Newsletter | /newsletter/ | "Renewal notes" early-access list (4 letters a year), newsletter form slot (§8) | T1 band (no photo) | — |
| News (posts index) | /news/ | role `posts`, empty content; archive cards with notched corner | T3 cell style | featured images |
| Privacy | /privacy/ | legal text | T1 band only | — |
| Terms | /terms/ | terms of business, complaints, commission disclosure | T1 band only | — |
| Thanks | /thanks/ | after-ask: what happens in the next 2 working days | T1 band only | — |

Posts (≥1, ideally 3): "Average clauses: why a declared stock value matters", "Indemnity periods and the kiln that takes 14 months", "Goods in trust: other people's things on your floor"; category **Notes**, tags *stock*, *business interruption*, *wording*. Featured images: **R2**, **W1**, **CL1** (never the same image twice on one rendered page).

Signatures continue on ≥4 inner pages: T1 on all; T2 on Review, Fees, Claims, Contact; T3 on Covers, Trades, Cases, News.

---

## 5. Colour, type

### Colour (reference RT(a) relationships, hue remapped to slate; reason: the row fixes palette blue-grey `#5E6C7B`, and green belongs to the insurer's brand — we keep its proportions, tone steps and the yellow-CTA relationship)
| Token | Hex | Role | Share | Source |
|---|---|---|---|---|
| primary | `#5E6C7B` | nav band, wedge B end, active tab, step 2, ask band | ≈10% | RT(a) deep green `#00665A` role |
| primary-light | `#8D9AA8` | wedge gradients, step 1, cell notch | ≈2% | RT(a) bright green `#14B87E` role |
| ink | `#243241` | text, step 3, footer | text + 6% | RT(a) ink `#222` (deepened to slate) |
| mist | `#E4E9EE` | section grounds (index, wording) | ≈15% | RT(a) mint `#DFF7F4` |
| paper | `#F4F6F8` | page-head band, haze | ≈8% | RT(a) page grey `#F4F4F4` (±2% lightness, cool) |
| base | `#FFFFFF` | page | ≈47% | RT(a) white |
| idle-tab | `#C9D2DB` | idle tab | <1% | RT(f) pale teal tab |
| rule | `#D5DBE1` | borders | — | RT(a) `#DADADA` |
| muted | `#4A5767` | secondary text | — | — |
| accent | `#D8A93E` | the one CTA only; edge `#A9802A`, hover `#E1B755` | ≤3% | RT(a) yellow `#FFCC33` (muted to stay under the saturation cap) |
First-screen saturated share ≤ **12%** (target ≈ 9%), absolute cap 15% (scripts/check-first-screen.py), note cap 30%.

### Type (font_direction **sans**)
- Display: **Inter Tight** (400, 500, 600, 700) — headings, numerals, nav CTA. Body: **Public Sans** (400, 500, 600). Both OFL, loaded via **theme.json `fontFamilies` + `fontFace`** (woff2 in assets/fonts, listed in theme-meta.json `fonts[].files` with licenseFile, named in readme.txt) so the editor iframe and front end match.
- Stacks:
  - heading `"Inter Tight", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`
  - body `"Public Sans", system-ui, -apple-system, "Segoe UI", sans-serif`
  - `:root:lang(zh-TW)` heading `"Inter Tight", "Noto Sans TC", sans-serif` (theme-bundled zh-TW subset of Noto Sans TC 500/700); body `"Public Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh family, no JP family in body).
  - `:root:lang(ja)` heading `"Inter Tight", "Noto Sans JP", sans-serif` (bundled ja subset 500/700); body `"Public Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
  - No serif / anywhere. Copy shared/inc/editor-lang.php → inc/editor-lang.php and require it (style.css has `:lang(` rules). Subsets made with the Hokuto/Hada substitute method.
- Scale (theme.json fontSizes): xs 0.75rem · s 0.875rem · base 1rem (body 1rem/1.75; RT 14px/1.7 enlarged for reading) · m 1.0625rem (lead) · l 1.5rem (statement, H3) · xl 2.25rem · xxl 2.5rem (H2) · hero **4.5rem** (H1, ≥ 4.25rem; clamp(2.75rem, 5.2vw, 4.5rem)) · step numerals 5rem.
- Weights: H1/H2 700, H3/statement 600, nav 500, body 400. Letter-spacing: H1 −0.02em, labels +0.16em uppercase (Latin only; CJK labels 0.08em, no uppercase).
- CJK: sizes ×0.75 for H1/H2 (H1 zh/ja 3.375rem), body line-height 1.85; fr/de `hyphens:auto` on body and H2/H3.

---

## 6. Photos (17, Grok, one at a time; read every one; none with text or logos)

**STYLE (one string for every image):**
`Documentary photograph, real commercial workplace, natural daylight, high-key but desaturated grey-navy grade, cool neutral whites, shallow depth of field (35mm f/2), candid working moment, people in work clothes, hands and paper documents in frame, diverse adults of varied ethnicity and age, modern international setting with no Japanese elements, no text, no readable writing, no logos, no brand names, no signage, calm and precise, photographed for a business services website.`

| # | File | Subject / composition | Ratio | Used on (page → block) | Home |
|---|---|---|---|---|---|
| H1 | hero-mezzanine-desk.webp | broker (dark jacket) and warehouse owner (shirt sleeves) at a pale desk by a glass wall, his finger along one row of a printed schedule, her pencil over it, tablet beside; racking and a forklift in the yard beyond; people in the left 60%, **right 35% plain pale glass/wall for the haze** | 16:9, 2000 × 1125 | home #2 hero | ✔ |
| R1 | reads-rack-measure.webp | risk surveyor measuring clearance between racking top and a sprinkler line with a laser meter, seen from below | 16:9 | home #3; /covers/ band | ✔ |
| R2 | reads-wording-pencil.webp | close: hands on a printed wording, pencil bracket beside a clause, tabbed pages (no readable text) | 4:5 | home #3; post 1 featured | ✔ |
| V1 | visit-yard-walk.webp | broker and owner walking a tall racking aisle, clipboard, hi-vis vests, roller-door light at the end; subjects right of centre, **left 40% dark aisle** for text | 21:9, 2000 × 860 | home #5 (parallax); /cases/ band | ✔ |
| S1 | steps-cover-map.webp | overhead: A3 printed sheet with highlighter blocks on a desk, two hands | 1:1 | home #6; /review/ band | ✔ |
| S2 | steps-three-quotes.webp | meeting room, three printed quotes side by side, broker explaining to two clients | 1:1 | home #6; /fees/ band | ✔ |
| W1 | wording-read-aloud.webp | broker (woman) reading a wording aloud to a client across a table, pages tabbed | 4:5 | home #7; post 2 featured | ✔ |
| Y1 | yard-mara.webp | founder at a desk with a site plan, waist up | 1:1.1 | home #8; /about/ | ✔ |
| Y2 | yard-daniel.webp | senior broker at a loading-dock edge, waist up | 1:1.1 | home #8; /about/ | ✔ |
| Y3 | yard-priya.webp | surveyor under a sprinkler head with a torch, waist up | 1:1.1 | home #8; /about/ | ✔ |
| Y4 | yard-tomas.webp | claims advocate on a phone call taking notes, waist up | 1:1.1 | home #8; /about/ | ✔ |
| C1 | case-timber-yard.webp | timber merchant and broker beside stacked lumber bays, kiln building behind | 3:2 | home #9; /cases/ case 2 | ✔ |
| Q1 | ask-folder-pass.webp | close: one hand passes a folder of schedules across a desk to another | 4:5 | home #11; /contact/ band | ✔ |
| CL1 | claims-pallets.webp | adjuster photographing water-damaged pallets with a phone, owner beside | 5:2, 2000 × 800 | /claims/ band; post 3 featured | |
| C2 | case-cold-store.webp | cold-store loading bay, insulated doors, two people with a clipboard | 3:2 | /trades/ band; /cases/ case 1 | |
| C3 | case-print-workshop.webp | print workshop, owner and broker between stacks of customers' paper and plates | 3:2 | /cases/ case 3 | |
| A1 | about-mezzanine-office.webp | the broker's mezzanine office, empty, morning light, desks, plan chest, glass to the yard | 5:2, 2000 × 800 | /about/ band | |

**17 unique images**; home uses **13**; no page shows the same image twice (bands crop to 4:1 via object-fit). webp, ≤300 KB, ≤2000 px, 0 cut-outs. Generate one at a time with `IMAGE_STYLE="<STYLE>" scripts/grok-image.sh out.webp "<subject>"`; Read each; regenerate on text, logos, broken faces/hands or style drift.

---

## 7. Motion and scroll effects (sp-scroll, unchanged class names)
Reference has no scroll-linked effects (RT(g)); its motion vocabulary is short fades (tab fadeIn 0.3–0.4 s, swing/ease), `.3s ease` hovers and accordions. Ours keeps that restraint:
| Effect | sp class | Where | Trigger / time / easing | Source |
|---|---|---|---|---|
| Parallax (required) | `sp-parallax` | (a) **home hero photo band** (`hb-hero` figure, layer = figure>img **H1**), `--sp-par: 8%` desktop, 5% mobile; foreground statement/CTA not in the moving layer. (b) **home #5 `hb-visit`** Cover with background **V1**, `--sp-par: 10%` desktop, 6% mobile. Inner page photo bands (T1): `sp-parallax` `--sp-par: 6%` (mobile 4%). | CSS scroll-driven `view()`, IO+translate3d fallback; linear | ours; reference counterpart = the static hero photo plus fade (we add depth only) |
| Step columns rise in sequence | `sp-stagger` on the T2 row + `sp-reveal sp-reveal--up` on each column (`--sp-dist: 24px; --sp-dur: .6s`), stagger 0.12 s | home #6, /review/, /fees/ | IntersectionObserver once, 0.6 s cubic-bezier(.22,.61,.36,1) | reference tab fadeIn 0.3–0.4 s, lengthened |
| Rule wipe | `sp-reveal sp-reveal--wipe` on the H2 + label groups of #3, #7, #9 (not on the hero) | home #3, #7, #9; inner page section heads | IO, 0.9 s cubic-bezier(.65,0,.35,1) | reference wedge edge / our schedule hairline |
Not animated: hero (no reveal), tab panel (CSS fade .3s ease only), fee table, FAQ, forms, legal text, footer. `.sp-reveal` count ≤ 60% of home blocks (here 6 elements in 4 blocks). prefers-reduced-motion, `?sp-static`, no-JS and editor → final state. Translate ≤ 24 px. Check with `check-parallax.mjs` (desktop + mobile, ≥6 px parallax delta, 0 under reduced motion).

---

## 8. Forms (form contract v1)
- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/shippress-forms.php`, CSS + editor JS → `assets/` unchanged; require from functions.php. Dynamic `shippress/form` block via `shippress_form_slot` only; no import-time plugin detection, no fake form, no mail backend.
- **Contact page `/contact/`** (pattern `hb-contact`): right 6/12 column under "Ask for a cover review", after the compact T2 band: `shippress_form_slot(['kind'=>'contact','fallback'=>$fallback])` where `$fallback` = `ob_start()` around the existing literal mailto button (`wp-element-button hb-cta`, `href="mailto:review@hojobrokers.example?subject=…"`, label `_t('contact_email')`). With CF7/WPForms: fields name, company, email, phone, sites (number of sites), message, consent checkbox; submit "Ask for a cover review". Without: mailto button stays (never a link to /contact/).
- No separate booking page; the home `#ask` band uses the CTA → /contact/ (no contact form on home).
- **Newsletter `/newsletter/`** (standalone page, early-access "Renewal notes"): H1 band (T1), 3 short paragraphs (what, how often: 4 a year, unsubscribe any time), then `shippress_form_slot(['kind'=>'newsletter','email'=>'review@hojobrokers.example','label'=>_t('forms_email'),'submit'=>_t('forms_subscribe'),'notice'=>_t('forms_mail_notice'),'subject'=>_t('forms_mail_subject')])`. Also in **home #11** (slate ground, dark variant) and the **footer** (ink ground, dark variant). Plugin order: MailPoet → MC4WP → explicit CF7/WPForms newsletter form id; never borrow the contact form. No plugin → required email input + submit, native mailto POST with the visible notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- **Tokens:** light ground — `--sp-form-surface:#FFFFFF; --sp-form-text:#243241; --sp-form-border:#D5DBE1; --sp-form-accent:#D8A93E; --sp-form-on-accent:#243241; --sp-form-focus:#5E6C7B; --sp-form-radius:4px`. Dark ground (`.hb-ask`, footer): `--sp-form-surface:rgba(255,255,255,.08); --sp-form-text:#FFFFFF; --sp-form-border:rgba(255,255,255,.45); --sp-form-focus:#FFFFFF`; accent unchanged. Focus: 2 px outline `--sp-form-focus` offset 2 px. Error: text + border `#B3452F` (light) / `#F3B3A6` (dark) with an icon-free message line; success: `#2F6B4F` / `#BFE3CF`. Labels above inputs, Public Sans 600 0.875rem; inputs 48 px high.
- **i18n:** semantic keys in inc/i18n/en.php first (`forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, `contact_email`, plus contact field labels), extract with `L10N_SEMANTIC=1`, all five languages written (not left English), including dynamic block attributes.
- Forms: never in the first screen, never `sp-reveal`. Gates: `form-runtime-check.php` in five languages and `repo-gates.sh forms` must pass.

---

## 9. Responsive rules (hard)
- 390 px: no horizontal overflow; first screen per §3 mobile (no vertical text, no absolute labels overlapping text, wedges behind and to the right of the H1 only); T3 tabs stay side by side (labels 0.9375rem, 2 lines allowed), panel grid 1 column; T2 columns stack vertically (chevron notch rotates to point down: `polygon(0 0,100% 0,100% calc(100% - 18px),50% 100%,0 calc(100% - 18px))`), numerals 3.5rem; yard strip 2 × 2; offset photo pair stacks without offset.
- Tables (fees and any other): at ≥782 px full container width (1120), price column `white-space:nowrap; text-align:right; min-width: 9rem`, never clipped at 800 or 1280; at <782 px each row becomes a stacked card (item bold, then time and price on one line, price right), no horizontal scrolling table.
- Tablet 782–1023: hero photo 56% / text 44%, H1 3.5rem; T3 grid 2 columns.
- Run `auto-gates.mjs … 1 1` on home after every layout change.

---

## 10. Similarity to the reference (target 80%)
| Dimension | Reference value (token) | Hojo value |
|---|---|---|
| Colour relationship | deep green `#00665A` nav band ≈6% + wedge; mint `#DFF7F4` grounds 15%; white 55%; yellow `#FFCC33` CTA 3% (RT(a)) | slate `#5E6C7B` nav band + wedges; mist `#E4E9EE` 15%; white/paper 55%; ochre `#D8A93E` CTA ≤3% |
| First-screen saturation | ≈ 9–10% (RT(a)) | ≈ 9%, cap 12% |
| Header | utility row + 56 px nav band (RT(c)) | 36 px utility row + 56 px slate band |
| Page head | 112 px hatched band, 2 skewed wedges ≈35° off the right (RT(c)(f)) | 176 px (home) / 140 px (inner) hatched band, 2 wedges 35°, right bleed |
| Hero photo | full-bleed documentary, 4.2:1, side faded to pale, statement on the haze (RT(e)) | full-bleed documentary, 2.77:1 at 1440 (520 high, for the H1 room), right side haze, statement on it |
| Body type | 14 px / 1.7, sans (RT(b)) | Public Sans 16 px / 1.75 |
| Headings | page title 32 px bold; h2 24 px bold (RT(b)) | H1 4.5rem 700 (larger: quality gate ≥4.25rem); H2 2.5rem 700; card titles 1.0625rem 600 slate-ink |
| Container / spacing | 1100–1120 px; section 64–72 px; grid gap 12, card padding 20 (RT(c)) | 1120 px; section 96 px (72 at <782); grid gap 12, cell padding 20 |
| Radius / borders | 4 px, chips 2 px, buttons 5 px; 1 px `#DADADA`; 1 px green panel frame (RT(d)) | 4 px; buttons 5 px; 1 px `#D5DBE1`; 1 px slate panel frame |
| Button | yellow, 3 px darker bottom edge, 22 px white arrow disc (RT(d)) | ochre, inset 3 px `#A9802A`, 22 px white disc |
| Tabs | 2 tabs, active solid + down-notch, idle pale with disc (RT(f)) | identical structure, slate / `#C9D2DB` |
| Cell notch | small grey triangle bottom-right (RT(d)) | 14 px `#8D9AA8` triangle bottom-right |
| Step band | 3 flush columns dark→light, 52 px white numerals (RT(f)) | 3 flush columns light→dark, 80 px numerals, chevron joins |
| Portrait strip | 4 flush 1:1.1 photos, wide-tracked line on white foot (RT(e)) | 4 flush 1:1.1 photos, 0.32em tracked caption |
| Motion | fadeIn 0.3–0.4 s, hover .3s ease, no scroll effects (RT(g)) | tab fade .3s ease, hover .3s ease; plus parallax 8–10%, stagger rise .6 s, wipe .9 s (pipeline-required) |
| Imagery | desaturated documentary, people in suits, hands + documents (RT(e)) | same grade and framing, people in work clothes, warehouse settings |

---

## 11. Home acceptance checklist
- [ ] First screen 1440 × 900: hatched head band with H1 4.5rem, two slate wedges bleeding right, H1 photo full bleed left with visible right haze, statement + CTA on haze; all six KV rows visible.
- [ ] 390 px first screen: no vertical text, no overlapping labels, wedges not over H1 glyphs, CTA full width.
- [ ] Saturation ≤12% (check-first-screen.py); exactly one menu (anchor menu); one CTA wording repeated (header, hero, #11).
- [ ] T3 tab index works without JS (radio), both panels editable in the editor, frame + notches visible.
- [ ] T2 flush 3-column band, numerals 5rem, no gaps, chevron joins; stacks on mobile.
- [ ] Parallax on hero and #5 passes check-parallax (desktop + mobile ≥6 px, 0 reduced-motion); hero has no `.sp-reveal`.
- [ ] 13 home images, none repeated; 17 images total, none twice on one page; no text/logos in photos.
- [ ] English ≥250 words (target 300+), ≥3 narrative paragraphs ≥20 words; facts match §0 (6 people, €0 / €480 / €160 / €320 / included / €90, hours, 90 min, 10 working days, 3–5 insurers).
- [ ] Fee table full width at 800 and 1280, price nowrap right; stacked cards at 390.
- [ ] Newsletter slot in #11 and footer renders email + submit + notice without plugins; not revealed; not in first screen.
- [ ] Fonts identical in editor and front end (Inter Tight / Public Sans; Noto Sans TC/JP headings in zh/ja); auto-gates home pass.
