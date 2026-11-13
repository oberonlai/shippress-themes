# Shoko Archives — design spec (stage 1)

Row b30-6 · landing · commercial records management (collection-request landing page) · font_direction **sans** · IMAGERY **photo**.
Reference: https://www.dnp.co.jp/ (corporate top) + its service detail pages https://www.dnp.co.jp/biz/products/detail/20172430_4986.html, https://www.dnp.co.jp/biz/products/detail/20173701_4986.html. Secondary: none.
All numbers below come from `brand/reference-tokens.md` (token ids: a=colour, b=type, c=spacing, d=corners, e=imagery, f=decoration, g=motion). Similarity target 80%: palette relationship, photo presentation, motion, decoration, layout. Photos, copy and logo are our own; nothing of DNP's artwork, text or logo is reused.

---

## 1. Signature techniques (3, all from dnp.co.jp)

### S1 — Outline-boxed headline strips (from the top-page hero, `ref/scroll-top-0.png`)
- Reference: H1 and two sub-lines each sit in their own white box hugging the text, flush-left at x 120 over the full-bleed hero; H1 box 3px ink outline, sub-line boxes 1px; boxes differ in length (f, d).
- Ours, home hero: H1 "Your paper, in a numbered aisle." in a white box, `border:3px solid #3F4232`, padding `.18em .4em`, font 4.25rem/1.15 700 Schibsted Grotesk, colour #3F4232. Under it, gap 10px, two sub-line boxes (1px #3F4232 border, padding 6px 14px, 1.25rem/1.5 500): "Collected from your office, boxed and barcoded." and "Back on your desk the next working day." Left edge = container left (x 120 at 1440). Vertically centred in the window. Radius 0. No shadow.
- Do not weaken: white opaque fill (not translucent), 3px vs 1px weight contrast, three boxes of different lengths, flush-left stack, sitting on the photograph.
- Inner pages (≥4): every inner page hero (Collections, Indexing & Retrieval, Prices, Facility, People, Book a Collection, Newsletter) uses the same boxed H1 (3.25rem desktop) + one 1px sub-line box, on a 360px high-key photo band (pages without a photo use the #ECEDE6 band).

### S2 — Ruled heading + striped ■ list + icon rows (from service pages, `ref/scroll-arch-0.png`, `-900.png`)
- Reference: H2 20px/700 with 1px full-width brand rule under it; rows alternating #F2F3F5 / white, 54px tall, 10px square bullet; then rows with a 140px line spot-icon left, bold title, text (b, f).
- Ours: H2 2rem/1.3 700 #3F4232, `padding-bottom:14px; border-bottom:1px solid #6A6A52`, margin-bottom 32px. Striped list rows: min-height 54px, padding 14px 24px, odd rows #F2F2EE, even #FFFFFF, bullet = 10px square #3F4232 (inline SVG / `::before` with empty content), 16px gap, text 1rem/1.7. Icon rows: 112px square line icon (1.5px stroke #3F4232, our own SVG: box, barcode, trolley, shelf, key, desk), title 1.25rem 700, text 1rem, row separators 1px #D9DAD2.
- Home: §3.2 "What a collection covers" (striped list) and §3.5 "Bring it back on request" (icon rows); also §3.7 Cases rows.
- Inner pages: Collections (striped list of accepted materials), Indexing & Retrieval (icon rows), Prices (ruled H2 + striped price rows), Facility (striped list of conditions), People (striped list of roles), Terms/Privacy (ruled H2 only).

### S3 — Flush top-left tab on photo cards (from top-page pick-up cards, `ref/scroll-top-900.png`)
- Reference: 3-up 16:9 photos 380×215, square corners, pale tinted tab 47–200 × 36px fused to the photo's top-left corner, blue 14px text; caption below with a trailing small chevron (e, f).
- Ours: 3-up cards, column gap 30px, image 16:9, radius 0. Tab: `position:absolute; top:0; left:0; height:36px; padding:0 14px; background:#ECEDE6; color:#3F4232; font:600 .875rem/36px Instrument Sans`, width = content (47–200px). Tab text is block markup (editable). Caption: 1.125rem 700 #2B2B26, then 1rem text, then a 7px chevron (CSS border, no text) after a "Read" link. Hover: image opacity .8, .3s ease (g).
- Home: §3.3 "How a box is indexed" (tabs "Collect", "Index", "Shelve"). Inner pages: Journal archive cards, Indexing & Retrieval (3 cards), Facility (3 cards), Cases page (3 cards). On mobile the tab stays a horizontal block at the photo top-left (never vertical, never overlapping text).

Supporting element (not a signature): docked white panel over a full-bleed band (`ref/scroll-top-1800.png`, panel 975px wide, inset 160px, overlapping the photo bottom by 130px) — used once on the home parallax band (§3.4).

---

## 2. Key visual concept

**(1) Reference first screen.** DNP's top page: a two-tier header (logo + utility links + vermilion enquiry button, second nav row), then a 540px full-bleed looping hand-drawn window — a lab-coat worker at a microscope and other careful hands-on scenes; the headline "make tomorrow's normal" sits at left in three white outlined boxes; a 40px pause square at the window's bottom-right; three centred bold disclosure links below the window. Story: a large, trusted firm doing precise careful handwork for society. Signature motion: the window loops through scenes (≈6s each), pausable; everything else only fades on hover.

**(2) Our translation (records management, same composition, same motion idea, photographs).** A high-key photographic window under a split header. Scene 1 (the story): at a loading dock in morning light, a driver holds a trolley stacked with plain archive boxes while an office manager checks box barcodes on a clipboard. The window cross-fades through three photographs — dock (collect) → numbered aisle (store) → desk with a returned box (bring back) — the same "careful hands at work" loop, told as one box's journey. Outline-boxed headline at left, pause square bottom-right, brick "Book a collection" button top-right, and the centred link row becomes a quiet info bar. The window's bottom edge is cut on a shallow diagonal (row hero `diagonal-split`): `clip-path: polygon(0 0,100% 0,100% 100%,0 calc(100% - 48px))` on the image layer only (not on observed elements).

**(3) KV checklist** (all visible in the first screen at 1440×900 and 390×844)

| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | 540px full-bleed looping window under header | High-key photo window, diagonal bottom edge (48px drop left) | full width under header, 600px desktop / 480px mobile | 3-scene cross-fade, 6s per scene, 1.2s linear opacity; static scene 1 under reduced motion / `?sp-static` | 01 dock, 02 aisle, 03 desk |
| 2 | Outlined headline boxes | H1 in 3px box + two 1px sub-line boxes | left, container edge, vertically centred | none (hero has no reveal) | over 01–03 |
| 3 | Pause square | 40×40 #3F4232 square, white pause glyph (SVG), toggles to play; `aria-label` translated | window bottom-right, 24px inset (x 1360, y ≈600 at 1440) | stops cross-fade | — |
| 4 | Vermilion enquiry button top-right | brick #C4411C "Book a collection" button, square, 40px high | header right | hover opacity .3s | — |
| 5 | Two-tier header | split nav: logo centred, anchor links left (Covers · Indexing · Retrieval) and right (Prices · People · Cases) + CTA; utility row above (hours, phone, language) 32px | header | none | — |
| 6 | Centred disclosure links under window | info bar, #ECEDE6, 72px: "Aisle 1–14 · Unit 7" / "Mon–Fri 07:30–18:00" / "Next pickup round: Tuesday" — three centred bold links separated by 1px rules | directly under window | hover colour .2s | — |

The cross-fade is theme CSS (keyframes on stacked images, 18s cycle), not an sp-* class; the pause button is a tiny theme script (toggles `animation-play-state`), no scroll listener.

---

## 3. Home (landing longform, one anchor menu, one repeated CTA "Book a collection" → /book-a-collection/)

| # | Anchor | Block | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 3.0 | — | Split header (2 rows) | see KV #5 | — | nav labels |
| 3.1 | #top | Hero window + info bar | KV §2 | 01, 02, 03 | H1 + 2 sub-lines |
| 3.2 | #covers | What a collection covers | 7/12 left: ruled H2 + intro paragraph (60 words) + striped ■ list (6 rows: invoices & ledgers, HR files, contracts, project drawings, legal holds, closed-year boxes); 5/12 right: photo 04, 4:5, top aligned with the H2 | 04 | 60 + 6 rows |
| 3.3 | #indexing | How a box is indexed | ruled H2 full width + 40-word lead; 3-up S3 tab cards: Collect / Index / Shelve | 05, 06, 07 | 3 × 35 words |
| 3.4 | — | Aisle band (parallax) + docked panel | full-bleed photo 08, 560px, `sp-parallax`; white panel 975px wide (68% of 1440), inset 160px left, overlapping photo bottom by 130px; panel: 3 statement lines 1.75rem/1.6 700 (#2B2B26) + 3 figures with `sp-count` ("14 aisles", "38,000 boxes", "1 working day") + text link | 08 | narrative paragraph 70 words |
| 3.5 | #retrieval | Bring it back on request | left 5/12 photo 09 (3:4); right 7/12 ruled H2 + 4 S2 icon rows (Request by box number · Scan on demand · Next-day return · Secure destruction) | 09 | narrative 50 words + 4 × 25 |
| 3.6 | #prices | Prices | ruled H2 + full-width price table (6 rows, striped, see §8); note line under it | — | — |
| 3.7 | #people | Who handles your boxes | photo 10 full-container width 21:9 above; under it 2-column striped list of the 6 named people (name 700 + role) | 10 | 40-word intro |
| 3.8 | #cases | Three collections | ruled H2 + 3 S3 tab cards (tabs: "Law office", "Clinic", "Architects") | 11, 12, 13 | 3 × 40 words |
| 3.9 | #book | Book a collection | #3F4232 band, white type; H2 3rem, 2-line text, brick button + phone + hours (no form) | — | 30 words |
| 3.10 | — | Footer with "Hall Two waitlist" subscribe strip | #ECEDE6 strip: short text + newsletter `shippress_form_slot` (email + submit), then footer columns | — | — |

Home photo slots: 01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12, 13 = **13** (≥8). Home ≥250 English words; narrative paragraphs in 3.2, 3.4, 3.5 (each ≥20 words).

### Order vs recent themes

| Theme | Home order | Shoko difference |
|---|---|---|
| Kohaku Brasserie | cross-fade hero / night band / ellipse / pinned letterbox / uses / price ledger / notes / book | our cross-fade sits under outlined boxes with a pause square and info bar; no pinned/letterbox; ruled striped lists and tab cards |
| Kaimon Fishmongers | hanging photos / dock / index rows / … / letter | no hanging photos; dock appears only as hero scene; index rows replaced by ■ striped list |
| Akiha College | split question hero / case wall / step-through / sticky rail / curtain / rows / fees / journal / apply | no split hero, no sticky rail, no case wall |
| Kaze Clinic | washed hero + info bar / lead flip / 3 photo list / method / … | our info bar is a centred link row under an outlined-box window; next section is a ruled ■ list + photo, not a lead flip |

---

## 4. Inner pages (≥8; theme-meta pages: home, about, news, article, category, tag, newsletter, contact)

| Page | Slug | Content | Signature carried |
|---|---|---|---|
| Collections | /collections/ | what we take, what we don't, box sizes, pickup rounds (Tue/Thu) | S1 hero (img 14), S2 striped list |
| Indexing & Retrieval | /indexing/ | barcode label, aisle–bay–shelf address, request by box number, scan on demand, next-day return | S1, S2 icon rows, S3 cards (05/06/07 not reused: uses 15 + text cards) |
| Prices | /prices/ | full price table (§8), what's included, invoicing monthly | S1 (band #ECEDE6), S2 ruled table |
| Our Facility (about) | /facility/ | history since 2004, Unit 7, 14 aisles, climate & fire, access control | S1 (img 16), S2 striped conditions, S3 cards |
| People | /people/ | 6 named people with role and one-line duty | S1, S2 striped list |
| Book a Collection (contact) | /book-a-collection/ | hours, address, pickup rounds, contact form slot + mailto fallback | S1, S2 ruled H2 |
| Hall Two Waitlist (newsletter) | /newsletter/ | early access to the second hall (opens spring), email signup slot | S1, S2 |
| Journal (posts) | /journal/ | post list as S3 tab cards (tab = category) | S3 |
| Article | single | ruled H2s inside content | S2 |
| Privacy, Terms, Thanks | /privacy/ /terms/ /thanks/ | legal text, ruled H2 only, no reveal | S2 rule |

Demo post: "How long should a business keep its invoices?" (category Guides, tags retention, invoices), featured image **17** post-invoices.webp.

---

## 5. Colour (from reference relationship, tokens a)

| Role | Ours | Reference | Share |
|---|---|---|---|
| Ground | #FFFFFF | #FFFFFF | 55% |
| Pale band / tabs / info bar | #ECEDE6 | #EEF0F4 / #E9EFFA | 20% |
| Stripe row | #F2F2EE | #F2F3F5 | in lists |
| Ink-moss (headings, 3px outlines, pause square, CTA band) | #3F4232 | #1432AA | 6% |
| Brand moss (rules, icons accents, links hover) | #6A6A52 (plan hex) | — | 4% |
| Body text | #2B2B26 | #333333 | text |
| Accent brick (only "Book a collection") | #C4411C | #E13000 | ≤2% |
| Lines | #D9DAD2 | #8C8C8C inputs | — |

Hue changed from blue to moss by the row's palette (a grey-green moss family); lightness relationship kept (deep ink on white, pale band). First-screen saturated share ≤8% target, hard cap 15% (check-first-screen.py); photos high-key, low saturation.

## 6. Type (sans; tokens b)

- Latin headings: **Schibsted Grotesk** 700/600; body/UI: **Instrument Sans** 400/500/600. Both via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, licences listed), identical in editor and front end.
- Stacks: heading `"Schibsted Grotesk", "Noto Sans TC", "Noto Sans JP", system-ui, sans-serif`; body `"Instrument Sans", system-ui, sans-serif`. `:root:lang(zh*)` heading stack starts with Noto Sans TC (bundled subset); body uses system CJK sans (no bundled zh/ja in body stack per check-themes). `:lang(ja)` heading Noto Sans JP. Copy shared/inc/editor-lang.php to inc/ and require it. No serif anywhere.
- Sizes: hero H1 **4.25rem** (68px) / lh 1.15 / 700 (ref 52px boxed headline scaled up to meet gate); inner H1 3.25rem; H2 home 2rem/1.3 (ref top H2 32px/1.3); panel statements 1.75rem/1.6 (ref H3 28px/lh 50); H3 1.25rem; body 1rem/2.0 (ref 16px/lh 32px); nav 0.875rem (ref 14px); tabs/buttons 0.875rem 600. No uppercase, letter-spacing 0 (ref). CJK: sizes ×0.75 for display, body lh 1.85; de/fr `hyphens:auto`.
- Mobile: hero H1 clamp(2.5rem, 9vw, 4.25rem).

## 7. Layout tokens (c, d, f)

- Container 1200px (content x 120–1320 at 1440); inner pages 850px main column (no sidebar).
- Section padding 104px top/bottom desktop (ref 90–120), 64px mobile; card gap 30px.
- Radius 0 on everything, buttons included; no shadows. Buttons 40px high, padding 0 20px.
- Page-top button: 40×40 #3F4232 square fixed bottom-right (f), white chevron SVG.
- Breadcrumb band on inner pages: #ECEDE6, 42px.

## 8. Fixed facts (whole site, five languages)

- Location: Unit 7, Harlow Mead Trading Estate, Lindenport (fictional). Founded 2004.
- Hours: Mon–Fri 07:30–18:00; Sat 08:00–12:00 (retrievals only); closed Sun. Pickup rounds Tuesday and Thursday.
- Facility: 14 aisles, capacity 38,000 standard boxes; standard retrieval: next working day; urgent: same day if requested before 11:00.
- Prices (EUR, excl. VAT) — 6 rows:
  1. Collection visit (up to 40 boxes) — €45 per visit
  2. Standard archive box with barcode — €3.50 each
  3. Storage — €0.42 per box per month
  4. Retrieval, next working day — €6 per box
  5. Urgent same-day retrieval — €18 per box
  6. Secure destruction with certificate — €2.20 per box
- People (6): Mara Okonkwo (founder, operations), Tomas Lindqvist (driver, collection rounds), Priya Raman (office manager, client accounts), Jonah Whitfield (indexing lead), Elena Sousa (aisle supervisor), Kenji Abara (scanning desk).
- Cases (3): a 6-partner law office (220 boxes, closed matters); a family clinic (90 boxes, retention schedule); an architects' studio (140 boxes of drawings, scan on demand).
- Process: Book → Collect (Tue/Thu) → Index (barcode, aisle–bay–shelf) → Shelve → Request by box number → Return next working day.
- Contact email: hello@shoko-archives.example; phone +00 20 7000 1404.

## 9. Responsive

- 390px first screen: header collapses to logo + menu button + brick CTA (icon-free label); hero 480px; boxes stack, H1 box max-width 100%, sub-lines wrap inside their boxes; pause square stays bottom-right; info bar becomes 3 stacked rows. **No vertical text, no absolutely positioned labels over text.** Tabs on cards are in normal flow-safe corner positions and never overlap captions.
- Price table: at ≥782px full container width (1200px), 2 columns, price column `white-space:nowrap; text-align:right; width:1%`, never clipped. Below 782px every table becomes stacked rows (label line + price line right-aligned).
- No horizontal overflow at 390 / 1280.

## 10. Images (16 total, one STYLE)

STYLE: `High-key documentary photograph, bright soft daylight, white and pale grey surfaces, muted moss and warm grey tones, natural colour, shallow depth of field, 35mm lens, eye-level, calm working atmosphere, contemporary international light-industrial setting, diverse adults, plain unbranded cardboard archive boxes, no text, no logos, no readable labels, no Japanese elements`

| # | File | Subject / composition | Used on | Home |
|---|---|---|---|---|
| 01 | hero-dock.webp | driver with a trolley of archive boxes at a bright loading dock, office manager checking barcodes on a clipboard, wide 16:9, figures right-of-centre (left third clear for the headline boxes) | Home hero scene 1 | ✓ |
| 02 | hero-aisle.webp | long numbered steel-shelf aisle with boxes, person walking away, 16:9, left third quiet | Home hero scene 2 | ✓ |
| 03 | hero-desk.webp | returned archive box opened on an office desk, hands lifting a folder, 16:9, left third quiet | Home hero scene 3 | ✓ |
| 04 | covers-files.webp | shelf of lever-arch files and ledgers being packed into a box, 4:5 | Home 3.2 | ✓ |
| 05 | card-collect.webp | trolley rolling boxes out of an office lift, 16:9 | Home 3.3 | ✓ |
| 06 | card-index.webp | hand scanning a barcode label on a box, 16:9 | Home 3.3 | ✓ |
| 07 | card-shelve.webp | box placed on a high shelf from a step ladder, 16:9 | Home 3.3 | ✓ |
| 08 | band-aisles.webp | wide overhead view of 14 bright aisles, 21:9, 2000px | Home 3.4 parallax | ✓ |
| 09 | retrieval-request.webp | staff member pulling one box from a shelf, 3:4 | Home 3.5 | ✓ |
| 10 | people-team.webp | small diverse team at the dock with a van, relaxed, 21:9 | Home 3.7 | ✓ |
| 11 | case-law.webp | closed-matter files in boxes in a law office corridor, 16:9 | Home 3.8 | ✓ |
| 12 | case-clinic.webp | clinic back office, records being boxed, 16:9 | Home 3.8 | ✓ |
| 13 | case-architects.webp | rolled drawings and plan chest beside boxes, 16:9 | Home 3.8 | ✓ |
| 14 | page-collections.webp | boxes taped and stacked by an office door, 21:9 | Collections hero | |
| 15 | page-scan.webp | scanning desk with a document under an overhead scanner, 16:9 | Indexing hero | |
| 16 | page-facility.webp | exterior of a clean light-industrial unit with a roller door, 21:9 | Facility hero | |
| 17 | post-invoices.webp | stack of invoices next to an archive box lid, 16:9 | Journal post | |

17 images (12–18). No cut-outs. ≤300 KB, ≤2000px. People / Prices / Book / Newsletter heroes use #ECEDE6 band (no repeat of home images on the same page; inner pages may reuse 09/10 once: People uses 10, Book uses 05).

## 11. Scroll effects (sp-scroll; reference has none measured — chosen to match its quiet hover-fade character)

| Effect | Where | Source / trigger / time / easing |
|---|---|---|
| `sp-reveal sp-reveal--up` + parent `sp-stagger` | 3.2 striped list rows, 3.3 and 3.8 card rows, 3.5 icon rows, inner-page lists | our choice derived from dnp hover fades (.3s ease, g); IntersectionObserver entry, 24px (`--sp-dist:24px`), .6s `cubic-bezier(.22,.61,.36,1)`, 0.12s steps |
| `sp-count` | 3.4 panel figures 14 / 38,000 / 1 | 1.2s easeOutCubic on entry |
| `sp-parallax` | 3.4 aisle band | see §12 |

Hero: no reveal. Forms, price table, legal text: no reveal.

## 12. Parallax (required)

- Block: home 3.4 aisle band — outer Group `sp-parallax` (full-bleed, 560px, `overflow:clip`), background `figure>img` = **08 band-aisles.webp**; foreground = docked white panel (sibling outside the moving layer, overlapping the bottom by 130px).
- `--sp-par: 10%` desktop, `6%` at ≤781px (kept on mobile).
- Reference counterpart: DNP's full-bleed building photograph with docked panel (`ref/scroll-top-1800.png`) is static; the parallax gives that band the slow depth that DNP's looping hero window provides. Reduced motion / `?sp-static` / editor: static.

## 13. Forms (form contract v1)

- Copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, CSS/JS → `assets/` unchanged; require in functions.php.
- **Book a Collection page** (/book-a-collection/): below the ruled H2 "Send a booking request", `shippress_form_slot( kind => contact )` with buffered fallback = the brick mailto button "Email us to book" (`mailto:hello@shoko-archives.example?subject=…`), translated. CF7/WPForms rendered when present. Fields expected in a CF7 form: name, company, email, phone, box count (select: 1–40 / 41–120 / 120+), preferred round (Tue/Thu), message, consent checkbox.
- **Newsletter page** (/newsletter/, "Hall Two waitlist"): standalone page; `shippress_form_slot( kind => newsletter, email => hello@shoko-archives.example, label => forms_email, submit => forms_subscribe, notice => forms_mail_notice, subject => forms_mail_subject )`. MailPoet (explicit ID) → MC4WP → opt-in CF7/WPForms ID. No plugin: required email input + submit, native mailto POST, notice "Opens your email app. Send the request to join the waitlist; you are not on the list yet."
- **Home/footer subscribe strip** (3.10): same newsletter slot. Never in the first screen.
- Tokens: `--sp-form-accent:#3F4232`, `--sp-form-on-accent:#FFFFFF`, `--sp-form-radius:0`, `--sp-form-focus:#C4411C` (2px outline, 2px offset), `--sp-form-surface:#FFFFFF`, `--sp-form-text:#2B2B26`; borders 1px #8C8C8C (ref inputs, d); inputs 44px high. Error text #A3361A + 1px left rule; success #3F4232 on #ECEDE6. On the dark #3F4232 band: surface #FFFFFF, text #2B2B26, accent #ECEDE6 / on-accent #3F4232, focus #FFFFFF.
- i18n semantic keys in inc/i18n/en.php then all five languages (en, zh-TW, ja, fr, de): `forms_email`, `forms_subscribe`, `forms_mail_notice`, `forms_mail_subject`, plus contact fallback label, subject, notice; `L10N_SEMANTIC=1` at extraction. No reveal on any form.

## 14. Home acceptance checklist

- [ ] Header two rows, split anchor nav, one menu only, brick CTA top-right.
- [ ] Hero window: 3 photos cross-fade 6s, diagonal bottom edge, pause square works, static under reduced motion / `?sp-static`.
- [ ] H1 in 3px box + two 1px sub-line boxes, flush left, H1 = 4.25rem.
- [ ] Info bar with three centred links directly under the window.
- [ ] Striped ■ list with ruled H2 (3.2), icon rows (3.5), tab cards ×2 rows (3.3, 3.8).
- [ ] Parallax band 08 moves ≥6px (check-parallax.mjs), docked panel overlaps 130px, counts run.
- [ ] Price table full width at 800/1280, prices nowrap right; stacked at 390.
- [ ] ≥8 images (13 planned), none repeated on the page; ≥250 English words, ≥3 narrative paragraphs.
- [ ] First-screen saturated share ≤15% (target ≤8%).
- [ ] 390px: no vertical text, no overlapping labels, no horizontal scroll.
- [ ] Footer newsletter slot renders email + submit without plugins.
- [ ] Figures/prices identical to §8 on every page and language.

## 15. Similarity table (target 80%)

| Dimension | Reference (token) | Shoko |
|---|---|---|
| Ground / band / ink / CTA | #FFF 55% / #EEF0F4 20% / #1432AA 6% / #E13000 1.5% (a) | #FFF 55% / #ECEDE6 20% / #3F4232 6% / #C4411C ≤2% |
| First-screen saturation | 1.7% (a) | ≤8% |
| Type | sans only, body 16/32, H2 32/41.6, H3 28/50, nav 14 (b) | sans only, 16/32, 32/41.6, 28/44.8, 14 |
| Hero headline | ~52px 700 in 3px box + 1px sub-boxes (b, f) | 68px 700 in 3px box + 1px sub-boxes |
| Container | 1200px, x 120 (c) | 1200px, x 120 |
| Section padding | 90–120px (c) | 104px |
| Radius / shadow | 0 / none (d) | 0 / none |
| Hero window | 540px full bleed loop + pause 40px (e, f) | 600px full bleed photo loop + pause 40px |
| Cards | 380×215 16:9, tab 36px pale, gap 30 (e, f) | 16:9, tab 36px #ECEDE6, gap 30 |
| Docked panel | 975px, inset 160, overlap 130 (e) | 975px, inset 160, overlap 130 |
| Lists | ruled H2 1px, rows 54px striped, 10px ■ (f) | same values |
| Page-top | 40px ink square (f) | 40px #3F4232 square |
| Motion | loop ≈6s, hover .2–.3s, no scroll reveal (g) | loop 6s, hover .2–.3s, + reveal-up / count / parallax (our addition) |
