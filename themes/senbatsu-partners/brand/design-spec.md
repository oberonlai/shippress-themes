# Senbatsu Partners: design spec (stage 1, binding for implementation)

Slug `senbatsu-partners`. Retained executive search firm, **landing theme** (`type: landing`): home is one long conversion page with an anchor menu and one repeated CTA ("Open a search"). Archetype single-column-longform, hero diagonal-split, nav top-bar, real documentary photography, font direction **sans**.
Reference (only one): **bizreach.jp** (https://www.bizreach.jp/), measured at 1440×900 in `reference-tokens.md`; screenshots in `brand/ref/`. Borrow structure, technique, proportions, motion timing and colour relationships. Never copy its photos, copy, logos, employer logos or icons. Every number below that comes from the reference is tagged `tok(a)`…`tok(g)` (sections of `reference-tokens.md`).

---

## 0. Fixed brand facts (every page, all five languages, identical numbers)

- **Senbatsu Partners**, retained executive search. Founded **2012**. One office: **Oostelijke Handelskade 1210, 1019 BL Amsterdam** (fictional address; local address formats per language in brand.md, the street line is never translated).
- Email **search@senbatsu-partners.example** · phone **+31 20 555 0142** (fictional) · Hours **Mon–Fri 08:30–18:00 CET**; brief sessions are held **Tuesdays and Thursdays**.
- Audience: boards, founders and chief executives who need to fill **one senior seat**.
- Policy numbers (state as house rules, never as results): **one partner** leads each search start to finish; a partner runs **at most 6 searches at a time**; the shortlist is **3 people**; shortlist presented by **week 6**; brief to signed offer usually **12–16 weeks**; long list of **about 60** names reviewed; follow-up calls at **3, 6 and 12 months** after the start date.
- Currency **EUR** in every language, fees excl. VAT. No converted amounts.

### People (7; named the same everywhere; only Helena has a photo, the rest are a text list, never a portrait grid)
| # | Name | Role | Seats |
|---|---|---|---|
| 1 | **Helena Marsh** | Founding partner | CFO, board and non-executive seats |
| 2 | **Tomás Ferreira** | Partner | COO, plant and supply-chain leadership |
| 3 | **Amara Okonkwo** | Partner | General counsel, compliance |
| 4 | **Mei-Lin Huang** | Partner | CTO, product and data leadership |
| 5 | **Jonas Weber** | Research lead | Market maps and long lists |
| 6 | **Priya Raman** | Associate | Referencing and assessment |
| 7 | **Claire Duval** | Client office manager | Scheduling, contracts, invoices |

### Process (one flow, same wording on Home, Process, Fees, Contact and all languages)
1. **Brief session** (week 0, half day, two partners, at the client) → written role brief incl. the "line we will not cross".
2. **Market map** (weeks 1–4): about 60 names reviewed, nobody approached before the brief is signed off.
3. **Shortlist of 3** (by week 6): each met in person, referenced twice, still interested.
4. **Interviews and references** (weeks 7–11).
5. **Offer and start** (weeks 12–16), partner present at the offer conversation.
6. **Follow-up** calls at 3, 6 and 12 months.

### Fees (7 rows; the same rows and amounts on Home #fees, Fees page and all languages)
| # | Item | What it covers | Fee |
|---|---|---|---|
| 1 | Brief session | half day, two partners, written role brief; credited against the search fee if a search opens | **€4,800** |
| 2 | Retained search | full process to signed offer, paid in three equal instalments (signing, shortlist, start) | **30% of first-year base + target bonus** |
| 3 | Minimum search fee | applies when 30% would be lower | **€48,000** |
| 4 | Board / non-executive seat | fixed fee, same process | **€36,000** |
| 5 | Market map only | weeks 1–4 as a report, no approaches | **€18,000** |
| 6 | Internal candidate assessment | one structured assessment + two references | **€6,500 per person** |
| 7 | Expenses | travel and assessment tools at cost | **capped at 8% of fee** |
Term (prose, not a row): if the person we placed leaves within 12 months, we run the search again for expenses only.

### Case letters (blog posts, 4; 3 anonymised case stories + 1 note)
| # | Title (en) | Category | Tags | Facts | Image |
|---|---|---|---|---|---|
| 1 | "A finance chief for a family-owned logistics group" | Case letters | cfo, shortlist | CFO, 13 weeks, shortlist of 3, candidate was not looking | 15 |
| 2 | "General counsel for a listed medical-device maker" | Case letters | general-counsel, references | GC, 11 weeks, line held: no candidates from current clients | 14 |
| 3 | "A plant director who was not looking" | Case letters | operations, brief | Head of plant operations, 16 weeks, relocation within the region | 13 |
| 4 | "How we write a role brief" (oldest date) | Notes | brief | the half-day session and the one-page brief | 10 |
Home shows the newest three (posts 1–3). Clients are never named.

---

## 1. Signature techniques (three, all borrowed from bizreach.jp, all obvious at a glance)

### T1. Grey-framed next-step holder (primary over secondary) — the single repeated CTA
- Source: bizreach.jp first screen, `ref/biz-first.png`, `tok(d)`: a pale `#F0F0F0` box, 16 px padding, holding a **380×56 red primary button** above a **380×38 white secondary button**, 10 px apart; radius 3 px; the box sits directly on the saturated hero field under the headline. Further down the page the same primary button reappears alone, centred (`ref/scroll-biz-900.png`, `-2700`, `-3600`).
- Ours: holder `#F0F0F0`, padding 16 px, width 412 px (380 + 2×16). Primary: `#B4412F` fill, white Instrument Sans 600 1rem, 380×56, radius 3 px, label **"Open a search"** → `/contact/`. Secondary: `#FFFFFF` fill, `#111111` text, Instrument Sans 400 0.875rem, 380×38, radius 3 px, label **"See how a search runs"** → `#shortlist` on home, `/process/` on inner pages. Hover: primary `#9E3828` / secondary `#F7F7F7`, `transition: background-color .2s ease-in-out` (`tok(g)`).
- Placement on home: hero (on navy), #fees (on `#F3F3F3`, so the holder gets a 1 px `#DDDDDD` border to stay visible), #open close (centred). The **bare primary button** (380×56 centred, no holder) closes #brief, #mandates and #letters, exactly like the reference's repeated button. Every CTA on the site has the same label "Open a search".
- Must not be diluted: holder must be a visible grey frame (not white-on-white, not transparent), primary stays 56 px high and full holder width, secondary sits **under** the primary (never side by side on desktop), radius stays 3 px (not pill).
- Mobile: holder full width minus 2×20 px gutter, buttons 100% width, heights unchanged.

### T2. Eyebrow between two hairlines + heading + 80×2 accent rule (section opener)
- Source: bizreach.jp intro band `ref/scroll-biz-900.png` and section heads `ref/scroll-biz-1800.png` / `-2700.png`, `tok(b)(d)(f)`: a one-line eyebrow in the main colour, framed by a dark 1 px hairline above and below, **514 px wide, centred**; then a large two-line heading; elsewhere, a left-aligned 40 px heading with an **80×2 red rule** 24 px below it.
- Ours, two forms (both used, never mixed in one head):
  - **Centred form** (#brief, #open, inner page intros, newsletter, thanks): eyebrow block 514 px wide (100% on mobile), border-top and border-bottom 1 px `#111111`, padding 16 px 0, text Manrope 600 1.125rem `#3E4C62`, centred. 32 px below: H2 Manrope 600 2.5rem/1.3 `#111111`, centred, max 2 lines (forced `<br>` in en). 32 px below: lead paragraph centred, max-width 720 px.
  - **Left form** (#mandates, #shortlist, #fees, #partner, #letters, #faq): H2 Manrope 600 2.5rem/1.25 left at the 992 container edge; 24 px below a 80×2 px `#B4412F` rule (a `core/separator` with class `sb-rule`, width 80 px, height 2 px; never full width); 48 px below: content.
- Must not be diluted: both hairlines visible and dark (not grey `#DDD`), eyebrow in navy (not black), the rule is accent brick, exactly 80×2, and appears on every left-form heading.

### T3. Label-above-thumbnail tiles: 4×2 gapped grid at 2.4:1
- Source: bizreach.jp "popular categories", `ref/scroll-biz-1800.png`, `tok(e)`: 8 tiles in a 4×2 grid inside the 992 px column, each image **240×101 (2.4:1)**, the category label **above** the image in 13 px, tiles **8 px apart**, radius 0, mixed documentary/stock photos.
- Ours: home #mandates. 8 tiles = the 8 seats we accept. Grid 4 columns, `column-gap: 8px; row-gap: 24px`, inside 992 px → tile width 242 px, image `aspect-ratio: 2.4/1; object-fit: cover`, radius 0. Label: Instrument Sans 500 0.8125rem/1.4, letter-spacing .04em, `#111111`, 8 px left padding, 8 px above the image. Each tile links to `/mandates/#<seat>`; hover image `opacity: .85` 0.2 s ease-in-out.
- Labels: Chief Financial Officer · Chief Operating Officer · General Counsel · Chief Technology Officer · Chief People Officer · Managing Director, Europe · Board Chair and non-executive · Head of Plant Operations (images 02–09 in that order).
- Must not be diluted: label above the image (never overlaid on it), 2.4:1 crops (no squares, no 16:9), 8 px column gap (not 24/32), 4 columns at ≥ 1100 px. 2 columns at 600–1099, 2 columns at 390 (tile ≈ 171 px wide, label still above).

### Supporting details from the reference (decoration, `tok(f)`)
- Content cards: 1 px `#DDDDDD` border, radius 0, no shadow, thumbnail 1.6:1, small **outlined tag** (1 px `#666666`, 0.75rem, padding 2px 8px) bottom-left and a **"> Read the letter"** text link bottom-right.
- Three centred columns with thin line icons (inline SVG, 56 px, stroke 1.5 px `#3E4C62`, drawn by us: folded sheet, three stacked cards, two overlapping circles), heading in navy, 2–3 lines of text.
- FAQ: 24 px circle badges "Q" (navy fill, white) and "A" (`#111111` fill, white), question in navy 1.125rem 700.
- Proof strip under the hero: 6×2 grid of **role names as text** (no logos, no brands) with a footnote.

### Continuation to inner pages (each signature on ≥ 4 inner pages)
All inner pages open with the **seam head** (the KV's diagonal split in miniature, see §3): navy gradient band 320 px desktop / auto mobile, H1 left, photo right 42% with the same diagonal edge.
| Page | Seam head photo | T1 holder | T2 opener | T3 tiles |
|---|---|---|---|---|
| The firm (`/about/`) | 17 | close | centred form on intro + left form on sections | 4-up row 06–09 "Where we work" |
| Mandates (`/mandates/`) | 11 | close | left form | **full 4×2 grid** (02–09) with a 3-line description and outlined tag under each image |
| How a search runs (`/process/`) | 10 | after stage 3 + close | left form per stage | 4-up row of 2.4:1 tiles: 13, 14, 15, 16 labelled "Brief / Map / Shortlist / Offer" |
| Fees and terms (`/fees/`) | 15 | under the table (bordered) | left form | — |
| Partners (`/partners/`) | 12 | close | centred form intro | 2.4:1 tiles of the 4 partners' seat areas: 02, 03, 04, 05 labelled with partner name above |
| Open a search (`/contact/`) | 16 | the form sits in a `#F0F0F0` holder frame (T1 variant) | centred form | — |
| Search notes (`/newsletter/`) | 18 | email + submit inside the `#F0F0F0` holder (T1 variant) | centred form | — |
| Letters (index, archive, single) | no photo: the seam is filled `#F0F0F0` | single: bare primary at the end | left form on index; single uses the category as eyebrow (centred form) | — (cards per supporting details) |
| Privacy / Terms / Thanks / 404 / Search | no photo (seam filled `#F0F0F0`) | Thanks: holder | centred form | — |
Also on **The firm**: a 4-up row of 2.4:1 label-above tiles "Where we work" (images 06, 07, 08, 09 labelled People, Europe, Boards, Industry). Totals: T1 on 7 inner pages, T2 on all, T3 on 4 (The firm, Mandates, Process, Partners).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
bizreach.jp opens on a **deep red gradient field** (`#900000→#700000`, `tok(a)`) taking the full 616 px hero. At the right ~42% of the width a studio-lit **photograph of one professional woman in a navy suit, cut at the shoulders by the bottom edge, smiling at the visitor and raising one finger** — "you, this one". At the left, a **large white mincho headline (~64 px, soft shadow)** in three lines, the third being the brand name. Under it, the **grey-framed CTA holder** with a red "register" button over a white "for employers" button. Header on the red: small tagline above a tracked caps wordmark, two dark chip buttons at the right. Below the hero, a **white proof strip** of 12 employer logos in a 6×2 grid with a footnote. Story: *you are selected; one step and the right offer comes to you* — invitation, selectivity, a single next step. Signature motion: the hero content **fades in once on load, 0.6 s ease-in-out, no delay** (`tok(g)`); no scroll effects.

### (2) Our translation (same composition, same motion idea, same image type: one documentary photograph of one person at the right, bottom-bleed)
A retained search starts at the brief. Same build: a **dusk-navy gradient field** instead of red; at the right a **documentary photograph of one partner, cropped at the chest by the bottom edge, holding the printed role brief up and pointing with one finger at a single line on it while looking at the visitor** — the reference's raised finger becomes the finger on "the line we will not cross"; the client's hand with a pen enters at the bottom edge, marking that line. The field and photo meet on **one diagonal seam** (the design-plan hero `diagonal-split`). At the left the large white headline, under it the **same grey-framed holder** ("Open a search" over "See how a search runs"). On the seam, a small white **role-brief card** repeats the marked line as type, with the 2 px brick underline (the 80×2 rule colour). Below the hero, a **white proof strip** with the seats we fill as words, 6×2, plus footnote. Story: *one seat, one search, one partner — and one step to start it.* Motion: the hero copy settles once on load (0.6 s ease-in-out), nothing else moves on the first screen.

### (3) KV checklist (all on the home first screen, visible at 1440×900 with `?sp-static`)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | One person photographed at the right, bottom-bleed, pointing a finger at the visitor | Partner (woman, 50s, grey suit) holds the role brief up and points at one line, eyes to camera; client's hand with pen at the bottom edge marking the line; shoulders/brief cropped by the hero bottom | photo panel x 640→1440, y 0→640, left edge diagonal from (800, 0) to (640, 640); subject's face around x 1020–1160, y 150–300 | none (static) | **01** |
| 2 | Deep red gradient field with a large white serif headline + soft shadow | Navy gradient `#46546B → #3E4C62 → #36435A` (top-left to bottom-right) full width behind header and copy; kicker line + H1 "One seat. / One search." Manrope 600 4.5rem white, `text-shadow: 0 2px 12px rgba(0,0,0,.25)` | copy column x 216→736; kicker y 112, H1 y 140–300 | copy block: once on load, `sb-settle` 0.6 s ease-in-out, delay 0 (see §7) | — |
| 3 | Grey-framed CTA holder: red primary over white secondary | T1 holder: "Open a search" `#B4412F` 380×56 over "See how a search runs" white 380×38 in `#F0F0F0` 412 px box | x 216→628, y 340→476 | same settle as #2; buttons hover 0.2 s | — |
| 4 | Header on the field: small tagline above a tracked caps wordmark, two dark chip buttons right | Tagline "Retained executive search · Amsterdam" 0.6875rem white 80% above "SENBATSU PARTNERS" Manrope 700 1.375rem, letter-spacing .14em; anchor links white 0.875rem; the last two menu items are dark chips `#2E394B` radius 3 px: "Open a search", "Search notes" | header y 0→72, container 1008 px (x 216→1224) | none | — |
| 5 | (our row signature on the hero) — the reference's finger "selects" one thing | Role-brief card straddling the seam: white, 1 px `#DDDDDD`, radius 0, 320×104, padding 14 px 16 px; lines (0.8125rem/1.5, `#111`): "ROLE BRIEF · Chief Financial Officer" (600, letter-spacing .06em) / "Reports to the CEO and the audit committee" / "Start within six months" / "Line we hold: no candidates from your own clients" with a 2 px `#B4412F` underline under the last line | x 520→840 (140 px on navy, 180 px over the photo), y 512→616 | none | — (type) |
| 6 | White proof strip of 12 employer logos in 6×2 + footnote | White strip: title "Seats we have filled since 2012" Manrope 700 1.25rem `#111` centred; 6×2 grid of seat names in Manrope 600 1rem `#3E4C62` (Chief Financial Officer, Chief Operating Officer, General Counsel, Chief Technology Officer, Chief People Officer, Managing Director, Head of Plant Operations, Board Chair, Non-executive Director, Chief Commercial Officer, Head of Supply Chain, Chief Data Officer); footnote 0.75rem `#666` "Selected seats. Client names are never published." | y 640→900, grid 992 px centred, columns 6, row gap 28 px | none | — |
Every row above must be visible in the 1440×900 first screen; at 390 px the same items stack (see §6), the brief card in flow.

---

## 3. Home page

### First-screen composition (1440×900)
- y 0–640: **hero** (alignfull Group `sb-hero`, height 640 px, `overflow: clip`, navy gradient background). Header sits inside it (transparent).
- Diagonal seam: the photo `figure.sb-hero__photo` is absolutely positioned right: `left: 44.44%` (640 px), `right: 0`, `top: 0`, `bottom: 0`, `clip-path: polygon(160px 0, 100% 0, 100% 100%, 0 100%)` (at other widths: `polygon(20% 0, 100% 0, 100% 100%, 0 100%)` of the figure width). Image `object-fit: cover; object-position: 62% 30%`. The clip-path is on the figure (not on an observed element; the hero has no sp-reveal). The photo is not a cut-out (0 cut-outs in the theme).
- Copy column 520 px, starts at x 216 (header container edge, `tok(c)`): kicker Instrument Sans 500 1.25rem white 85% "Retained executive search for boards and founders"; H1 4.5rem/1.1 two lines; T1 holder 40 px below the H1.
- Brief card as in KV #5 (absolute only at ≥ 1100 px).
- y 640–900: proof strip (KV #6).
- Forbidden on the first screen: forms, tables, search box, giant centred text, any sp-reveal. Saturated share target ≤ 8%, hard limit 12% (§4).

### Anchor menu (exactly one top menu)
`Brief (#brief) · Mandates (#mandates) · Shortlist (#shortlist) · Fees (#fees) · Partner (#partner) · Letters (#letters) · FAQ (#faq)` + chips `Open a search` (/contact/) and `Search notes` (/newsletter/). On inner pages the anchors become `/#brief` etc. < 1100 px: wordmark + "Menu" button opening the standard overlay with the same items. Header not sticky. Section `id`s exactly as listed; `scroll-margin-top: 24px`.

### Block order
Container 992 px (`tok(c)`), narrow text column 720 px centred, band padding 120 px top/bottom desktop, 72 px mobile (`tok(c)` text bands ~120 px).
| # | Pattern / id | Purpose | Layout, photos | Copy (en) |
|---|---|---|---|---|
| 1 | `front-hero` `#top` | KV + proof | §2 checklist; photo **01** | ~45 words incl. proof strip |
| 2 | `front-brief` `#brief` | why retained search, the idea | band `#FAF9F8`. **T2 centred**: eyebrow "A search starts at the brief"; H2 "We fill one senior seat at a time, / and we start by writing it down."; lead 3 centred lines; then **three centred icon columns** (each 300 px, gap 48): *The brief* / *The shortlist of three* / *The offer*, heading Manrope 600 1.375rem `#3E4C62`, 2–3 lines; then **bare primary button**. No photo (mirrors the reference intro band). | 1 narrative paragraph 60 words + 3×30 words |
| 3 | `front-mandates` `#mandates` | which seats we accept | white. **T2 left** H2 "Seats we accept"; one paragraph 45 words; **T3 4×2 tiles** photos **02–09**; then H3 Manrope 600 2rem "And how we narrow them" + **4 columns of chevron lists** (each 242 px, header Manrope 600 1.125rem centred over a 1 px `#DDDDDD` baseline with a 2 px `#3E4C62` underline under the header text, items Instrument Sans 1rem/28px with a 6×10 px thin chevron `›` SVG): *Function* (Finance, Operations, Legal, Technology, People, General management) / *Sector* (Logistics, Medical devices, Industrial, Software, Food production, Family-owned groups) / *Region* (Benelux, Germany, France, Nordics, Iberia, Remote within Europe) / *We decline* (Volume hiring, Contingent fees, Roles below director, Searches without a brief, Approaching your clients, Two firms on one seat); then **bare primary button** | 80 words |
| 4 | `front-shortlist` `#shortlist` | how a shortlist is made | white. **T2 left** H2 "How a shortlist of three is made"; photo **10** full container width, 2.4:1, 1 px `#DDDDDD` border; under it the 720 px column with **six run-in paragraphs** (bold run-in = the six process stages of §0, e.g. "**Week 0 — Brief session.** …"), prose, no numbers in circles, no timeline line | 6 × 35 words = 210 words (main narrative) |
| 5 | `front-band` | quiet pause, **parallax** | full-bleed `sp-parallax`, height 520 px (360 mobile), background photo **11**; foreground (static) a white plate 480 px wide, padding 32 px, bottom-left at the 992 container edge, 48 px from the bottom: quote Manrope 600 1.75rem/1.35 `#111` "Three names on the table. Each one met, referenced and still interested." + caption 0.8125rem `#666` "Helena Marsh, founding partner" | 20 words |
| 6 | `front-fees` `#fees` | fees and terms | band `#F3F3F3`. **T2 left** H2 "Fees, in full"; fee table (§0, 7 rows, §6 table rules) full container width on a white ground with 1 px `#DDDDDD` row rules; under it one paragraph (re-search term, VAT, instalments); then **T1 holder** (with 1 px `#DDDDDD` border) left-aligned | 60 words + table |
| 7 | `front-partner` `#partner` | one partner, start to finish | white. Two columns: photo **12** 4:5 at 5/12 left (radius 0); right 7/12: **T2 left** H2 "One partner, from brief to start"; 2 paragraphs about Helena Marsh (90 words); then small H3 1.25rem "Who else works on your search" + a 2-column text list of people 2–7 (name 600 / role + seats 0.875rem `#666`), 1 px `#DDDDDD` top rule per row | 120 words |
| 8 | `front-letters` `#letters` | case letters | band `#F3F3F3` (reference contents band `tok(a)`). **T2 left** H2 "Letters from recent searches"; Query Loop 3 newest posts, 3 columns gap 32 px, cards per §1 supporting details: featured images **15, 14, 13** (posts 1–3), 1.6:1, 1 px `#DDDDDD` border, body 3 lines excerpt `#666`, outlined category tag + "> Read the letter"; then **bare primary button** | excerpts |
| 9 | `front-faq` `#faq` | objections | white. **T2 left** H2 "Questions boards ask first"; 5 Q/A pairs with Q/A badges (core/details is allowed but all open by default; or plain blocks): Why retained and not contingent? · Do you approach people at our clients? · What if the shortlist is not right? · Can our internal candidate join the shortlist? · How confidential is the search? | 5 × 40 words |
| 10 | `front-open` `#open` | close, one step | band `#FAF9F8`. **T2 centred**: eyebrow "Open a search"; H2 "Tell us about the seat. / A partner replies within two working days."; 1 short paragraph; **T1 holder** centred; small line under it: "search@senbatsu-partners.example · +31 20 555 0142 · Mon–Fri 08:30–18:00 CET" | 50 words |
| — | footer (template part) | newsletter + contact | navy `#3E4C62`, white text; left: wordmark + address + hours; right: **Search notes** subscribe (`shippress_form_slot` newsletter, §8) on the dark ground; bottom row: Privacy · Terms · © 2012–2026 Senbatsu Partners | 40 words |
English home ≥ 250 words (planned ≈ 700) with narrative paragraphs in #2, #4 (six) and #7. CJK home ≥ 500 characters.

### Home photo positions (15, none repeated): 01 · 02 03 04 05 06 07 08 09 · 10 · 11 · 12 · 15 14 13.

### Comparison with recent themes
| # | Nagisa Grill | Kamotsu Academy | Tana Furniture | Yawara Rheumatology | **Senbatsu Partners** |
|---|---|---|---|---|---|
| 1 | KV | KV | stage KV | half-half KV | **diagonal seam KV + text proof strip** |
| 2 | concept scene | since | idea | problem | **brief: hairline eyebrow + 3 icon columns** |
| 3 | day rows | routes (tall cards) | make (card pair) | method + parallax | **mandates: 4×2 label-above tiles + 4 chevron lists** |
| 4 | kitchen scene duo | admits sticky | showroom parallax | team squares | **shortlist prose (6 run-in paragraphs) under one 2.4:1 photo** |
| 5 | tables | weeks timeline | materials marquee | proof figures | **parallax band with quote plate** |
| 6 | plates band | band | ways | day | **fee table on grey band + holder** |
| 7 | journal | fees | people list | journal | **one partner photo + text list** |
| 8 | visit parallax | people | rooms strip | visit | **letters cards (outlined tag + ">")** |
| 9 | — | stories | notes rows | — | **FAQ Q/A badges** |
| 10 | — | visit | visit | — | **open-a-search close with holder** |
Why not alike: no "visit" close with map/hours, no timeline, no sticky column, no marquee, no team squares; the page is a single narrow centred column (992/720) driven by one repeated grey holder, which none of the four has. Signatures (grey CTA holder, hairline-framed eyebrow + 80×2 rule, label-above 2.4:1 tiles) do not appear in any of them; the diagonal seam hero differs from Yawara's half-half (slanted edge, field + photo, docked card) and Tana's pane stage.

---

## 4. Colour

Source: bizreach.jp `tok(a)`. Relationships kept: one dark main field on the first screen only, white page, warm off-white and grey bands, one strong red CTA, black text, red short rules. **Change of main hue (reason):** the design-plan row fixes the dusk navy `#3E4C62` and the note demands a quiet palette (saturated share ≤ 30%, check script ≤ 15%); a 53% red field reads as a job board ad, not a retained-search partnership. So red field → navy field of the **same lightness role** (dark, ~gradient of three steps). The CTA red is kept as a red but darkened toward brick for this audience. All neutrals are the reference's own values.
| Role | Ours | Reference | Use | Share of home |
|---|---|---|---|---|
| Main (field) | `#3E4C62`, gradient `#46546B → #3E4C62 → #36435A` | `#900000 / #800000 / #700000` | hero field, seam heads, footer, eyebrow text, icon strokes, proof seat names | first screen ~32%, page ~10% |
| Main dark (chips) | `#2E394B` | dark red chips on hero | header chip buttons | <1% |
| Accent (CTA) | `#B4412F` (hover `#9E3828`) | `#D7000E` | primary button, 80×2 rules, brief-card underline, links hover | ≤ 3% |
| Holder | `#F0F0F0` | `#F0F0F0` | T1 holder | ~3% |
| Page ground | `#FFFFFF` | `#FFFFFF` | ground | ~55% |
| Warm band | `#FAF9F8` | `#FAF9F8` | #brief, #open bands | ~12% |
| Grey band | `#F3F3F3` | `#F3F3F3` | #fees, #letters bands | ~15% |
| Rule / card border | `#DDDDDD` | `#DDD` | card borders, table rules | — |
| Text | `#111111` | `#111111` | headings, body | — |
| Muted text | `#666666` | ~`#666` | captions, excerpts, tags | — |
| Form error / success | `#A12A1E` / `#2E6B4F` (dark ground `#F2B8AE` / `#A9D8BF`) | — | forms only (§8) | — |
- Contrast: white on `#3E4C62` 8.6:1; white on `#B4412F` 5.6:1; `#3E4C62` on `#FAF9F8` 8.2:1.
- **First-screen saturated share**: navy has S ≈ 0.37 (not counted at the S > 0.5 threshold); counted are the CTA (380×56 ≈ 1.6%) and photo pixels. Photo 01 is graded cool-neutral (grey suit, white paper, pale wood) → target ≤ 8%, **limit 12%** for `check-first-screen.py` (row note cap 30%, common rule 15%).
- No beige, no cream-led page; navy never used as a full section background except hero, seam heads and footer.

## 5. Type (font_direction = **sans**)

Latin headings **Manrope** (600, 700), Latin body **Instrument Sans** (400, 500, 600), both sans. CJK: **Noto Sans TC** (zh-TW) and **Noto Sans JP** (ja) (gothic / hei style), subset woff2, headings only; CJK body uses the system gothic (hei) faces. No serif or mincho anywhere (the reference mincho becomes Manrope 600; weight and size kept).
- theme.json `fontFamilies` + `fontFace` (all files in `assets/fonts/`, listed in theme-meta.json `fonts[].files` with license, names in readme.txt), so editor iframe and front end load the same files; `inc/editor-lang.php` copied from `shared/inc/` and required, because style.css uses `:lang()`.
- Stacks:
  - display (en/fr/de): `"Manrope", "Instrument Sans", system-ui, sans-serif`
  - body (en/fr/de): `"Instrument Sans", system-ui, -apple-system, "Segoe UI", sans-serif`
  - `:root:lang(zh*)` display: `"Manrope", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif` (bundled Noto Sans TC subset on headings); body: `"Instrument Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (system Traditional Chinese faces only, no bundled display font, no Japanese font).
  - `:root:lang(ja)` display: `"Manrope", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`; body: `"Instrument Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
- Sizes (theme.json presets; reference values `tok(b)`):
| Preset | Size / line-height / weight | Use | Reference |
|---|---|---|---|
| small | 0.8125rem / 1.5 / 400–500 | tile labels, captions, brief card | 13 px tile label |
| base | 1rem / 1.5 (CJK 1.85) / 400 | body | 16/24 400 |
| medium | 1.25rem / 1.25 / 700 | h4 labels, proof title | h2 label 20/25 700 |
| large | 2rem / 1.25 / 600 | h3 | h3 32/40 600 |
| x-large | 2.5rem / 1.3 / 600 | section H2 | ~40 px headings |
| xx-large | **4.5rem** / 1.1 / 600 (`clamp(2.6rem, 6vw, 4.5rem)`) | hero H1 only | hero ~64 px (+12% to meet ≥ 4.25rem) |
Eyebrow 1.125rem 600 navy. Inner H1 (seam head) `clamp(2.4rem, 4.4vw, 3.25rem)`. CJK headings ×0.75 of Latin, body line-height 1.85; fr/de `hyphens: auto`. No uppercase transforms except the header wordmark (written in caps in markup).

## 6. Responsive rules (auto-gates must pass)
- **390 px first screen**: no vertical text, no absolutely positioned labels or cards over text. Order: header (56 px) → navy block (kicker, H1 2.6rem, holder 100% width) → photo 01 at 4:3 with the diagonal on its **top** edge (`clip-path: polygon(0 14%, 100% 0, 100% 100%, 0 100%)`) → brief card **in flow** (static, full width minus 40 px, margin-top 16 px, no negative margin over text) → proof strip 2 columns. Hero `height: auto` < 1100 px.
- 600–1099 px: hero two columns static (copy 55% / photo 45% with diagonal left edge), brief card in flow under the holder.
- **Fee table (home #fees and Fees page) at ≥ 782 px**: `width: 100%` of the 992 container (`alignwide` not needed, but never narrower than the container), `table-layout: auto`, columns Item 24% / What it covers auto / Fee `white-space: nowrap; text-align: right; padding-right: 16px` — the fee column is never clipped or wrapped (check at 800 and 1280). Long fee text ("30% of first-year base + target bonus") stays one line at ≥ 782 px: fee column min-width 18rem.
- **< 782 px every table stacks**: each row becomes a block (item 600 on top, description, fee right-aligned on its own line), `thead` visually hidden, 1 px rule between rows; no horizontal scroll.
- Tiles: 4 → 2 columns; chevron lists 4 → 2 → 1 columns; letters cards 3 → 1; partner block photo on top.
- No horizontal overflow at 390 and 1280 (`html, body { overflow-x: clip }`).

---

## 7. Motion

### Hero settle (reference signature motion, `tok(g)`, not a reveal)
`.sb-hero__copy` (kicker, H1, holder): `@media (prefers-reduced-motion: no-preference) { html.sp-js:not(.sp-no-motion) .sb-hero__copy { animation: sb-settle .6s ease-in-out both; } }`, keyframes `from { opacity: .35; transform: translate3d(0, 12px, 0); } to { opacity: 1; transform: none; }` (never from opacity 0, so LCP is visible; `?sp-static` and editor show the final state). No sp-reveal anywhere in block #1.

### Scroll effects (3 kinds, from stage-a candidates; sp-scroll v1 classes only)
Reference has no scroll effects; we translate its single 0.6 s ease-in-out fade to scroll entrances with the same duration and easing: set `--sp-dur: .6s; --sp-ease: cubic-bezier(.42,0,.58,1); --sp-dist: 24px` in style.css.
| Effect | Class | Where | Source / trigger / time / easing |
|---|---|---|---|
| Section heads rise | `sp-reveal sp-reveal--up` | T2 heads (eyebrow block + H2 + rule as one Group) of #brief, #mandates, #shortlist, #fees, #partner, #letters, #faq, #open; inner page section heads | bizreach hero fade 0.6 s ease-in-out → IntersectionObserver, 24 px, 0.6 s |
| Tiles and columns stagger | parent `sp-stagger`, children `sp-reveal sp-reveal--up` | T3 tiles (8) on home + Mandates; #brief three icon columns; letters cards | same timing, 0.12 s step (sp-scroll default) |
| Parallax | `sp-parallax` | home #5 `front-band` (+ The firm page wide photo 16) | see below |
Not animated: hero, proof strip, fee tables, forms, FAQ answers, legal pages, footer.

### Parallax (required)
- Block: home #5 `front-band`, a full-bleed `core/cover` with class `sp-parallax`, min-height 520 px (mobile 360 px), background image **11** (`.wp-block-cover__image-background` moves). Foreground: the white quote plate (not inside the moving layer).
- Speed: `--sp-par: 8%` desktop; `@media (max-width: 781px) { .front-band.sp-parallax { --sp-par: 5%; } }` — kept on mobile.
- Reference correspondence: bizreach's only motion is the slow, single hero settle; the band carries that calm into the long page as a slow drift (no snap, linear scroll-driven). Reduced motion / `?sp-static` / editor: no movement.
- Verified by `check-parallax.mjs` (≥ 6 px desktop and mobile, 0 under reduced motion).

---

## 8. Forms (contract v1 — `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS/editor JS → `assets/` unchanged; require from functions.php. Forms never in the home first screen, never `sp-reveal`, never inside a moving parallax layer.

### Contact = "Open a search" page (`/contact/`, `page-contact` pattern)
- Layout: seam head (photo 16) → T2 centred intro "Open a search" / "Tell us about the seat." → two columns: left 5/12 details (address, email, phone, hours, "A partner replies within two working days", "Brief sessions on Tuesdays and Thursdays", what to include: role title, reporting line, location, timing, the line you will not cross); right 7/12 a `#F0F0F0` holder frame (padding 32 px) containing the **`shippress_form_slot( kind: contact )`** block.
- Fallback (no CF7/WPForms): the original mailto button markup kept via `ob_start()` — a T1 primary button "Email the brief to the partners" → `mailto:search@senbatsu-partners.example?subject=…` (subject from `contact_subject`), plus one line of text. Never links to `/contact/` itself.
- Expected fields when a CF7/WPForms form exists (styled, not created by the theme): Name*, Company*, Work email*, Phone, Role to fill (select: CFO / COO / General counsel / CTO / People / Managing director / Board / Other), Timing (select), Message* (textarea), consent checkbox. All styles scoped to plugin classes.
- No other enquiry/booking page exists (home CTAs all go to /contact/).

### Newsletter = "Search notes" waitlist (`/newsletter/`, standalone page, not the posts list)
- Purpose: quarterly letter + early access to brief-session dates (waitlist). Layout: seam head (photo 18) → T2 centred "Search notes" / "Four letters a year, / and first word on brief-session dates." → 3 short lines what you get → `#F0F0F0` holder (T1 variant, max 560 px centred) with **`shippress_form_slot( kind: newsletter )`**: email (required, `type=email`) + submit, notice under it. Below: privacy line linking /privacy/.
- Footer (all pages incl. home, dark navy ground): heading "Search notes" + one sentence + the same newsletter slot, inline email + submit at ≥ 782 px, stacked < 782.
- Plugin order: MailPoet (explicit ID via filter) → MC4WP first form → CF7/WPForms only with an explicit dedicated newsletter ID. No plugin: native mailto POST with the entered address, visible notice; never claims subscription.

### Tokens (style.css)
| Token | Light ground | Dark ground (footer `#3E4C62`) |
|---|---|---|
| `--sp-form-accent` | `var(--wp--preset--color--accent)` `#B4412F` | same |
| `--sp-form-on-accent` | `#FFFFFF` | `#FFFFFF` |
| `--sp-form-radius` | `3px` | `3px` |
| `--sp-form-focus` | `#3E4C62` (2 px outline, offset 2 px) | `#F0F0F0` |
| `--sp-form-surface` | `#FFFFFF` (border 1 px `#DDDDDD`, hover `#666`) | `#FFFFFF` |
| `--sp-form-text` | `#111111` | `#111111` in fields; labels/notices inherit white |
| error / success | `#A12A1E` / `#2E6B4F`, 1 px border + text | `#F2B8AE` / `#A9D8BF` text |
Inputs 48 px high (submit 48 px, same font as T1 primary 1rem 600), textarea min 160 px, labels Instrument Sans 500 0.875rem above fields, checkbox/radio `accent-color: var(--sp-form-accent)`. Check light and dark, 390 px and desktop.

### Five-language strings (semantic keys in inc/i18n/en.php first; `L10N_SEMANTIC=1`)
| Key | en | zh-TW / ja / fr / de |
|---|---|---|
| `forms_email` | Work email | localised "work email address" in each language |
| `forms_subscribe` | Join Search notes | keep "Search notes" as the product name; verb localised ("join / register / receive / subscribe") |
| `forms_mail_notice` | Opens your email app. Send the request to join; you are not on the list yet. | same meaning in each language: opens the mail app, the request still has to be sent, not subscribed yet |
| `forms_mail_subject` | Search notes: please add me | "Search notes" + localised "subscription request" |
| `contact_email` | Email the brief to the partners | localised "send the role brief to the partners by email" |
| `contact_subject` | New search: role brief | localised "new search: role brief" |
| `forms_contact_note` | A partner replies within two working days. | same, number 2 unchanged |
Translations live only in inc/i18n/zh-TW.php, ja.php, fr.php, de.php and demo-content.<lang>.json (repo rule: brand/ files stay English). Locale copy is rewritten, not literal; numbers unchanged.

---

## 9. Inner pages (11 + post templates; standard pages: home, about, news, article, category, tag, newsletter, contact)
Each = seam head → T2 opener → body → close (T1 holder unless stated). No sidebar.
1. **The firm** (`/about/`, page-about): head 17 "A small firm / for one seat at a time." Founded 2012 in Amsterdam; why retained only; the 6-searches-per-partner rule; how we are paid (link Fees); T3 "Where we work" row (06, 07, 08, 09); wide photo 16 in an `sp-parallax` figure (`--sp-par: 6%`); 3 narrative sections, 350 words.
2. **Mandates** (`/mandates/`): head 11 "Seats we accept, / and the ones we decline." T3 full grid 02–09, each with anchor id, 3-line description and outlined tag (seat area partner); the four chevron lists from home #3 in full; "We decline" paragraph.
3. **How a search runs** (`/process/`): head 10. Six stages (§0) as left-form sections (H2 + rule + 2 paragraphs each); T3 row 13/14/15/16 labelled Brief / Map / Shortlist / Offer after stage 3; holder after stage 3 and at the end.
4. **Fees and terms** (`/fees/`): head 15. The 7-row table (§0, §6), instalments, minimum fee, re-search within 12 months, expenses cap, confidentiality, cancellation (instalments already paid are not refunded; brief fee credited). Bordered holder under the table.
5. **Partners** (`/partners/`): head 12 (Helena). T2 centred intro; T3 row (02–05, labelled with partner names above: Helena Marsh / Tomás Ferreira / Amara Okonkwo / Mei-Lin Huang); then the 7 people as text rows (name, role, seats, 2 sentences), 1 px rules. No portrait grid.
6. **Letters** (posts index `/letters/` = role posts, content empty; `news` screen): seam filled `#F0F0F0`; left-form H2 "Letters from recent searches"; cards 3 columns (4 posts: 15, 14, 13, 10).
7. **Single letter** (`single.html`): T2 centred with the category as eyebrow, H1 2.5rem, date; featured image 1.6:1 with 1 px border, text column 720 px; facts box (`#F0F0F0`, 3 lines: seat, weeks, shortlist) ; bare primary button at the end. **Category / tag archives** (`archive.html`, `tag.html` with "TAG" label) reuse the index layout.
8. **Open a search** (`/contact/`): §8.
9. **Search notes** (`/newsletter/`): §8 (waitlist).
10. **Privacy** (`/privacy/`), 11. **Terms** (`/terms/`): T2 centred head, legal text in 720 column, no motion.
12. **Thanks** (`/thanks/`): T2 centred "Thank you. / A partner will reply within two working days." + holder back to home.
13. 404 / search: T2 centred + bare primary button.

---

## 10. Imagery and image list

**Imagery: photo** (stage-a IMAGERY = photo; the reference hero is a photograph). Real documentary photography, high-key, natural light; 0 cut-outs.
STYLE (exact string on every prompt):
`documentary photograph, 35mm lens, high-key natural daylight from large windows, calm modern international office and industrial settings, cool neutral palette of grey, white, pale oak and muted navy, diverse adults in quiet business clothing, candid unposed moment, shallow depth of field, fine paper and fabric texture, no text, no legible writing, no logos, no brand marks, no signage, no Japanese elements`
One image at a time with `scripts/grok-image.sh`; read every file; regenerate on any letters, logos, bad hands or faces. Each ≤ 300 KB, ≤ 2000 px, webp; readme.txt line per image (AI-generated, CC0).
| # | File | Subject / composition | Ratio | Used (once per page) | Home |
|---|---|---|---|---|---|
| 01 | `kv-brief.webp` | woman partner, 50s, short grey hair, grey suit, standing at the right third, holding a printed brief (blank lines, unreadable) at chest height and pointing with her index finger at one line, looking at the camera; a second person's hand with a pen enters from the bottom edge touching the same line; pale office behind, left 40% of the frame calm wall for the seam | 16:10 | Home hero | ✓ |
| 02 | `seat-cfo.webp` | hands with a pen over printed financial tables (unreadable), calculator, oak table, window light | 2.4:1 | Home tile; Mandates; Partners | ✓ |
| 03 | `seat-coo.webp` | wide logistics warehouse seen from a mezzanine, one manager with a tablet small in frame | 2.4:1 | Home tile; Mandates; Partners | ✓ |
| 04 | `seat-gc.webp` | stack of bound contracts with a clip and a fountain pen on a meeting table | 2.4:1 | Home tile; Mandates; Partners | ✓ |
| 05 | `seat-cto.webp` | two engineers at a whiteboard of boxes and arrows (no letters), laptop open | 2.4:1 | Home tile; Mandates; Partners | ✓ |
| 06 | `seat-people.webp` | four chairs in a loose circle in a bright meeting room, two people talking | 2.4:1 | Home tile; Mandates; The firm row | ✓ |
| 07 | `seat-md.webp` | glass-roofed train station platform, morning, one person with a carry-on | 2.4:1 | Home tile; Mandates; The firm row | ✓ |
| 08 | `seat-board.webp` | long boardroom table, empty chairs, water carafes, folders | 2.4:1 | Home tile; Mandates; The firm row | ✓ |
| 09 | `seat-plant.webp` | factory floor under skylights, safety helmets on a bench, a supervisor walking | 2.4:1 | Home tile; Mandates; The firm row | ✓ |
| 10 | `shortlist.webp` | three blank candidate dossiers laid side by side on a pale oak table, a hand placing the third | 2.4:1 | Home #shortlist; Process head; post 4 | ✓ |
| 11 | `corridor.webp` | long corridor of glass-walled meeting rooms in morning light, two people walking far away | 21:9 (2000 px) | Home parallax band; Mandates head | ✓ |
| 12 | `helena.webp` | portrait of Helena Marsh (same woman as 01), seated by a window, hands folded on a notebook | 4:5 | Home #partner; Partners head | ✓ |
| 13 | `letter-interview.webp` | two chairs facing across a small round table, two coffee cups, a conversation in progress seen from the side | 1.6:1 | Home letters (post 3); Process row; Letters | ✓ |
| 14 | `letter-reference.webp` | person on a phone call standing at a window, notebook in hand | 1.6:1 | Home letters (post 2); Process row; Letters | ✓ |
| 15 | `letter-offer.webp` | a folded blank letter, envelope and pen on a desk, two hands about to shake out of focus behind | 1.6:1 | Home letters (post 1); Fees head; Process row; Letters | ✓ |
| 16 | `office.webp` | the firm's meeting room: oak table, six chairs, plants, canal light through tall windows | 16:10 | Contact head; The firm wide parallax; Process row | — |
| 17 | `partners-walk.webp` | two partners (man 40s, woman 30s) walking and talking in a bright stair hall | 16:10 | The firm head | — |
| 18 | `desk-notes.webp` | a desk with a printed quarterly letter (unreadable), envelope and a cup, morning light | 16:10 | Newsletter head | — |
18 images; home uses 15 (01–15); same-page duplicates: none (check: Process uses 10 head + 13/14/15/16 row; The firm uses 17 head + 06–09 row + 16 wide; Partners 12 head + 02–05 row; Mandates 11 head + 02–09 grid).

---

## 11. Similarity table (target 80%: colour relations, imagery, motion, decoration, layout)
| Dimension | Reference (bizreach.jp) | Senbatsu Partners | Token |
|---|---|---|---|
| Hero field | red gradient `#900000/#800000/#700000`, ~53% of first screen | navy gradient `#46546B/#3E4C62/#36435A`, ~32% (S 0.37) | a |
| CTA | `#D7000E`, white text, 380×56, r 3 px | `#B4412F`, white, 380×56, r 3 px | a, d |
| CTA holder | `#F0F0F0`, 16 px pad, 380×56 over 380×38 | identical | d |
| Grounds | `#FFFFFF`, `#FAF9F8`, `#F3F3F3` | identical | a |
| Text | `#111111`, `#666` | identical | a |
| Accent rule | 80×2 red under headings | 80×2 `#B4412F` | d, f |
| Eyebrow | 514 px, hairlines top/bottom, serif red | 514 px, 1 px `#111` hairlines, Manrope 600 navy | f |
| Body | 16/24 400 | 16/24 400 (CJK lh 1.85) | b |
| Headings | h3 32/40 600 serif; ~40 px section heads | 32/40 600 Manrope; 40 px (2.5rem) | b |
| Hero headline | ~64 px serif, white, soft shadow | 72 px Manrope 600, white, `0 2px 12px rgba(0,0,0,.25)` | b |
| Container | 992 px, header 1008 px at x 216 | 992 / 1008 at x 216 | c |
| Hero height | 616 px + proof strip to ~870 | 640 px + proof strip to 900 | c |
| Hero photo | one person right ~42%, bottom-bleed, pointing | one person right ~45–55% behind diagonal, bottom-bleed, pointing at the brief | e |
| Tiles | 4×2, 240×101 (2.4:1), label above 13 px, gap 8 | 4×2, 242×101 (2.4:1), label above 13 px, gap 8 | e |
| Cards | 320×200 1.6:1, 1 px `#DDD`, r 0, outlined tag + ">" | 309 wide 1.6:1, 1 px `#DDD`, r 0, outlined tag + "> Read the letter" | e, f |
| Icon columns | 3 centred, dark-red line icons, serif heads | 3 centred, navy line icons, Manrope heads | f |
| Proof strip | 12 logos 6×2 + footnote | 12 seat names 6×2 + footnote | f |
| FAQ | Q/A circle badges | Q/A circle badges navy/black | (shot 3600) |
| Motion | hero fade 0.6 s ease-in-out once; buttons 0.2 s | hero settle 0.6 s ease-in-out; buttons 0.2 s; scroll reveals 0.6 s ease-in-out 24 px | g |
| Scroll | none | + reveal-up, stagger, parallax 8% (required by pipeline) | g |
| Radius | 3 px buttons, 0 cards | 3 px buttons/fields, 0 cards/images | d |
Not copied: photos, Japanese copy, wordmark, employer logos, icons (redrawn), page structure beyond the borrowed blocks.

---

## 12. Home acceptance checklist
1. First screen 1440×900 shows all six KV rows: diagonal seam with photo 01 (partner pointing at the brief, client's pen at the bottom edge), navy gradient field with the 4.5rem white H1, grey holder (brick 380×56 over white 380×38), header lockup + two dark chips, brief card on the seam with the brick underline, white proof strip of 12 seat names + footnote.
2. `check-first-screen.py` saturated share ≤ 12%; no form/table/search/giant centred text on the first screen; no sp-reveal in the hero.
3. 390 px: nothing absolute over text, brief card in flow, no vertical text, no overflow.
4. T1 holder at hero, #fees, #open; bare primary at #brief, #mandates, #letters; all labelled "Open a search" → /contact/.
5. T2: hairline eyebrow (centred form) on #brief and #open; left H2 + 80×2 brick rule on #mandates, #shortlist, #fees, #partner, #letters, #faq.
6. T3: 8 tiles 4×2, 2.4:1, label above, 8 px gap, photos 02–09.
7. Block order = §3 table, anchors work from the single top menu.
8. Fee table: 7 rows exactly as §0; at 800 and 1280 full container width, fee column nowrap, right-aligned, not clipped; stacked < 782.
9. 15 home photo positions, none repeated; 18 images in the theme, same STYLE, no text/logos.
10. Motion: reveal-up on section heads, stagger on tiles/columns/cards, `sp-parallax` on #5 with photo 11 (≥ 6 px desktop and mobile in `check-parallax.mjs`), reduced motion static.
11. Fonts: Manrope + Instrument Sans (+ Noto Sans TC/JP subsets) via theme.json fontFace, identical in editor and front end; largest preset 4.5rem.
12. Footer newsletter slot works without plugins (email + submit + notice); no reveal on forms.
13. English home ≥ 250 words with ≥ 3 narrative paragraphs; numbers (2012, 3, 6, 12–16 weeks, fees) match §0.

## 13. theme-meta hints
`type: landing`; colors.tags: `slate`, `calm`, `light`, `blue`; style: `corporate`, `documentary`, `clean`, `professional`.
