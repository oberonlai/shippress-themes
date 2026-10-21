# Yui Credit Union: design spec (stage B, binding for implementation)

Slug `yui-credit-union`, member-owned credit union, type business (no plugins needed). References: Echizen Shinkin recruit (header bar + pill system only) and Showa Sekkei (rules, labels, pickup row, quiet palette). See `reference.md`. Borrow structure, technique and colour relationships only; no copy, photos or logos.

Fixed brand facts (every page, every language, home and inner pages identical): **Yui Credit Union**, founded **1961** by mill and market workers in the fictional riverside city of **Lindenport**. Not-for-profit cooperative, **18,420 members**, **3 branches**, **7 volunteer directors**. All rates are **sample rates for demonstration**; never claim a real deposit insurer, regulator approval, awards, media or real people.

---

## 1. Signature techniques (three, obvious at a glance)

### T1. Floating white rounded header bar with pill links (Echizen Shinkin recruit, https://www.shinkin.co.jp/echishin/recruit/)
- Reference: a white bar with ~8 px corners floats 36 px in from the left/right viewport edges and ~15 px from the top, over the coloured field; logo left, plain text links, then two outlined pills and one solid pill CTA on the far right.
- Yui: header is `position:absolute` over the hero photo on the front page (sticky on scroll is optional, keep the same shape). Desktop 1440: left/right inset **36 px**, top **18 px**, height **76 px**, `border-radius: 8px`, background `#FFFFFF`, shadow `0 2px 18px rgba(34,34,34,.08)`. Inside padding 0 28 px. Left: wordmark "Yui Credit Union" Merriweather 400 1.25rem + a small pine roundel (16 px circle, 2 px pine ring). Centre-right text links (Public Sans 0.9rem 500): Savings, Loans, Rates, About. Then two **outlined pills** (1 px `#222222`, radius 999 px, height 38 px, padding 0 18 px): "Branches", "Calculator"; then one **solid pine pill** "Join online" (`#5E7350`, white text, 600).
- Mobile (<782 px): same bar inset 12 px, radius 8 px, wordmark + solid pill + hamburger; overlay menu full-screen on ground colour.
- Must not be diluted: the bar must visibly float (ground or photo showing on both sides and above it), corners 8 px, exactly one solid pill, the other two outlined. No full-width flat header.
- The pill system is reused for all buttons site-wide: primary = solid pine pill, secondary = outlined ink pill. No square buttons.

### T2. Ruled ledger head: full-width hairline + English capital label + italic serif accent word (Showa Sekkei https://www.showa-sekkei.co.jp/ section heads + rules; Echizen italic "Information" word)
- Reference (Showa): every section starts with a 1 px rule across the content width and a small spaced English label ("Pick Up", "Projects", "Service"); wide margins above. Echizen pairs a big label with a small italic serif word.
- Yui: every home section after the hero opens with: 1 px rule `#CFC9C4` across the 1240 px content width; directly under it (16 px) a row with **left 3/12**: label in Public Sans 600 0.75rem uppercase, letter-spacing 0.2em, ink, preceded by a two-digit ledger index in pine ("01 RATES"); **right 9/12**: heading Merriweather 300, `clamp(2.4rem, 4vw, 3.25rem)`, line-height 1.18, ending with **one italic accent word in pine** (Merriweather 300 italic), e.g. "Rates that stay *plain*." Section top padding 120 px desktop / 72 px mobile.
- Must not be diluted: the rule must be visible (not #EEE), the label must sit in its own left column (not stacked above the heading), and every section must carry exactly one pine italic word. Never centre a heading.

### T3. Uniform pickup row (Showa "Pick Up")
- Reference: a row of photos with one identical aspect ratio and identical gutters, a short caption block under each photo separated by a thin rule, no cards, no shadows.
- Yui: home section 5 "What members use": **4 photos, 3:2, radius 4 px, gutter 24 px**, under each: 1 px rule, then product name Merriweather 400 1.25rem, one-line sample rate in pine Public Sans 600 ("from 5.49% APR, sample"), two-line description, text link "Auto loans →". No background panel; sits directly on ground.
- Must not be diluted: all four photos the same ratio and size, captions below (never overlaid on photos), rule between photo and caption.

### Support (not counted): top-bottom halves first screen + dashed hairline fact line (Showa loader dashed line + 3-digit counter) used once in the hero bottom half: a dashed 1 px rule with "1961 · 18,420 members · 3 branches" in tabular figures.

### Continuation to inner pages (stage 2, required)
| Page | T1 header | T2 ruled ledger head | T3 pickup row |
|---|---|---|---|
| Savings & Accounts | yes | page head + every section (01 SHARE SAVINGS…) | 4 accounts: share savings, money market, certificates, youth savers (S11, P4, P13, P14) |
| Loans (auto, home, personal) | yes | yes, one ruled section per loan type | 3-across row of loan types at top (P5, P6, P7) |
| Rates | yes | yes; tables sit under the ruled head, white panel, pine 2 px left border on the highlighted row | — |
| Loan & Savings Calculator | yes | yes | — (full calculator: loan + savings tabs, pure front-end) |
| Membership & Join Online | yes | yes | 3 photos for the 3 join steps (P9, P15, P16) |
| Member Stories | yes | yes | all 4 stories as a pickup row of 4 (P8, P12, P17, P18) then long text |
| About / Our Board | yes | yes; board as ruled list rows (name, role, member since), no portrait grid | — |
| Branches & Hours | yes | yes | row of 2: P11 (Riverside Main) + P18 (lobby), same ratio 3:2, captions = branch name + hours |
| Journal / Contact | yes | yes | Journal index: posts in 3:2 pickup row style |

---

## 2. Home block list (order is binding)

| # | Block | Layout | Photo | Copy |
|---|---|---|---|---|
| 1 | Hero, top/bottom halves | Top half: inset photo 1368×520 (36 px side margins, 18 px from top, radius 8 px), the T1 bar floats over its top edge. Bottom half on ground: left 7/12 heading Merriweather 300 **4.25rem** (preset xx-large) left-aligned, two lines: "Banking owned by / the people who use it." (italic pine on "use"). Right 5/12: 2-sentence intro + solid pill "Become a member" + outlined pill "See sample rates". Under both: dashed fact line. | **P1** branch counter, member and teller | ~45 words |
| 2 | 01 OWNERSHIP statement | T2 head; then left 6/12 three short paragraphs (history 1961, one member one vote, surplus returned as better rates); right 5/12 (offset 1) photo 4:5 radius 4 px | **P2** members at annual meeting raising hands | ~120 words |
| 3 | 02 RATES snapshot | T2 head; white panel full content width, 6 rows (Share savings, 12-month certificate, 24-month certificate, New auto, 30-year fixed mortgage, Personal loan), columns: product / term / sample rate (Merriweather 1.75rem tabular) / link; 1 px rules between rows; foot note "Sample rates for demonstration, as of 1 October 2026" + outlined pill "All rates". No photo. | — | ~40 words |
| 4 | 03 CALCULATOR | T2 head; left 5/12 photo 3:4; right 7/12 ruled white panel: amount slider ($24,000), term chips (36/48/60/72 mo), product select (auto 5.49% default), result "about **$458** a month" Merriweather 3rem, small print; solid pill "Open full calculator". Static markup must already show the default result if JS is off. | **P3** couple at kitchen table with laptop | ~35 words |
| 5 | 04 SERVICES pickup row (T3) | 4 equal 3:2 photos + captions | **P4** savings (parent and child at counter), **P5** auto (member receiving car key in a lot), **P6** home (new owners at front door with keys), **P7** personal loan (small shop owner beside new oven) | 4 × ~30 words |
| 6 | 05 MEMBER STORIES | Asymmetric: left 7/12 one feature story, photo 3:2 radius 4 px then 70-word story and name line; right 4/12 two text-only quotes separated by 1 px rules, each with name + product + member since | **P8** Okoye family on porch | ~160 words |
| 7 | 06 JOIN ONLINE | Left 6/12: 3 steps as ruled horizontal rows (big pine numeral 2.5rem Merriweather, step title, one line) not cards; eligibility line and fee line; solid pill "Start your application". Right 5/12 photo 4:5 | **P9** hands holding phone over café table, blank screen | ~90 words |
| 8 | 07 GOVERNANCE | Full-width photo 21:9 inside content width, radius 4 px; under it two columns: left text on volunteer board and March annual meeting, right the 7 directors as a single ruled list (name — role), no portraits | **P10** community event: members at folding tables in a hall | ~90 words |
| 9 | 08 BRANCHES & HOURS | Left 4/12 photo 4:5; right 8/12 three columns divided by vertical 1 px rules: branch name, address, hours, phone | **P11** branch exterior, glass front, morning | ~70 words |
| 10 | 09 JOURNAL | 3 text rows (date / category / title / arrow), 1 px rules, no images | — | 3 titles |
| 11 | Close | On white panel inset 36 px, radius 8 px: left heading 3rem "Ten minutes to join. *Decades* to belong." right $5 fee + $25 minimum line, solid + outlined pill | — | ~30 words |
| — | Footer | ground, 4 columns: wordmark + one-line mission, Accounts, Help, Branches hours; legal line "Sample rates and figures are for demonstration only." | — | |

Home photo slots: P1–P11 = **11** (≥8). Each used once.

### Comparison with recent themes
| Pos | Yui | Hone Orthopedics | Taiyo Solar Works | Hada Dermatology |
|---|---|---|---|---|
| 1 | top/bottom halves, inset photo + floating bar | 3 tall portrait strip + ribbon | 50/50 split + inset portrait | inset hero + thin Latin line + arcs |
| 2 | ownership statement + 4:5 photo | clinic statement | roofwork statement + fact line | doctor letter + portrait |
| 3 | rates snapshot table (white ruled panel) | radio finder panel | featured case + circles | numbered index panel |
| 4 | calculator panel + photo | three notch cards | numeral cards band | three alternating chapter bands |
| 5 | 4-up uniform pickup row | specialists directory | ruled list + sticky photo | doctors rows |
| 6 | feature story + 2 quotes | visit flow + hours dots | graphite band + 4 steps | standard band + thin line |
| 7 | join online 3 ruled steps + phone photo | fees card + photo | crew ruled list | fees list + photo |
| 8 | governance wide photo + director list | stories | news rows | journal 3 col |
| 9 | branches 3 ruled columns | journal notch cards | mirrored split close | visit close with arch |
| 10–11 | journal text rows; inset white close panel | visit close | — | — |
Why different: the first screen is the only vertical top/bottom split (others are strips, left/right split, L-band); a functional rates table and calculator come right after the statement (none of the three has a calculator or data table on home); the uniform pickup row replaces cards/bands; no sticky photo, no numbered index panel, no notch cards, no dark band, no arch, no mirrored close. Versus Kasumi Mortgage: no full-bleed dark hero, no side-by-side rate cards; the implementer must place Kasumi's full-desktop.png beside ours on the contact sheet and change the order if any 3 consecutive blocks match.

First screen: no giant centred text, no table/form/search (the calculator starts below the fold at ≥ 1000 px). Saturated area target ≤ 8% (photo + pine pill only), hard cap 15%.

---

## 3. Inner pages (stage 2)
1. **Home** (above).
2. **Savings & Accounts**: T2 head, T3 row of 4 accounts, sample rate table excerpt (savings rows only), how dividends work, youth accounts, online banking paragraph (phone photo P15).
3. **Loans**: auto, home, personal as three ruled sections each with photo, sample rate, typical term, what you need; one decision-time line (1 business day).
4. **Rates**: all 10 sample rates in two tables (Savings & certificates / Loans), "as of 1 October 2026", sample-rate disclaimer, link to calculator. Tables allowed here.
5. **Loan & Savings Calculator**: full pure-front-end tool, two tabs (Loan payment / Savings growth), defaults: $24,000, 60 mo, 5.49% → $458/mo; savings $200/mo for 24 mo at 3.70% APY. Static fallback shows the default numbers.
6. **Membership & Join Online**: eligibility (live, work, worship or study in Lindenport County, or family of a member), $5 one-time fee + $25 share savings minimum, 3 steps, ID checklist, 2-business-day approval; T3 row of 3 step photos.
7. **Member Stories**: 4 stories, pickup row + long text each.
8. **About / Our Board**: history from 1961, one member one vote, annual meeting each March, 7 directors as ruled rows (name, role, member since), supervisory committee line. No portrait grid.
9. **Branches & Hours**: 3 branches, hours table, holiday note, ATM line.
10. **Journal**: index + single (money tips, member news, annual meeting).
11. **Contact**: phone, email, mailing address, three branch lines, contact form via plain content (no plugin required).

---

## 4. Colour (from Showa Sekkei relationships; accent per plan pine)
| Role | Hex | Source | Use | Share |
|---|---|---|---|---|
| Ground | `#F2F0EF` | Showa page ground | page ground | ~60% |
| Panel | `#FFFFFF` | Echizen header bar white | T1 bar, rates/calculator panels, close panel | ~18% |
| Ink | `#222222` | Showa text ink | text, outlined pills, numerals | ~12% |
| Rule | `#CFC9C4` | Showa hairlines (ink at ~20% on ground) | all 1 px rules, dashed fact line | ~1% |
| Main / accent | `#5E7350` pine | design-plan b7-2 (in place of Showa plum, same small-area role) | solid pill, italic accent word, ledger index, sample-rate figures in T3, step numerals | ≤ 5% |
| Pine tint | `#E3E8DD` | pine at ~15% on white | highlighted rate row, calculator slider track fill | ≤ 2% |
| Highlight | `#94486A` plum | Showa logo plum | only the 2 px active-nav underline and focus ring | < 1% |
No section has a pine or dark background. First screen saturated area ≤ 8% (cap 15%).

## 5. Type
- Headings: Merriweather (OFL) 300 / 400, italic 300 for the accent word. Body/labels: Public Sans (OFL) 400/500/600. Both self-hosted woff2, Latin subset.
- Scale (theme.json): small 0.875rem, medium 1.0625rem (body, line-height 1.75), large 1.5rem, x-large 2.25rem, xx-large `clamp(2.4rem, 4vw, 3.25rem)` (section heads), huge **4.25rem** (hero, `clamp(2.75rem, 5.2vw, 4.25rem)`). Rate figures Merriweather 1.75rem tabular-nums; calculator result 3rem.
- Labels: Public Sans 600 0.75rem uppercase 0.2em.

## 6. Photos (STYLE string identical for every image)
STYLE: `documentary photograph, bright natural daylight, modern international neighbourhood credit union, clean light stone and white interiors with muted pine-green details, diverse real people, candid, soft shadows, 35mm lens, shallow depth of field, calm and warm, no text, no logos, no signage, no readable screens, no close-up of banknotes`

| ID | Subject | Framing | Used on | Stage 1 |
|---|---|---|---|---|
| P1 | member and teller talking across a light wood branch counter, morning light | wide 16:7, people right third | Home hero | ✔ |
| P2 | members in a community hall raising hands to vote, seen from the side | 4:5 | Home ownership; About head | ✔ |
| P3 | couple at kitchen table reviewing a laptop (screen not visible) | 3:4 | Home calculator; Calculator page head | ✔ |
| P4 | parent and child at a branch counter opening a savings account | 3:2 | Home services; Savings | ✔ |
| P5 | member receiving a car key outdoors beside a parked car (no badges) | 3:2 | Home services; Loans auto | ✔ |
| P6 | new homeowners at a front door holding a key | 3:2 | Home services; Loans home | ✔ |
| P7 | small bakery owner beside a new oven | 3:2 | Home services; Loans personal | ✔ |
| P8 | family of four on the porch of a modest house | 3:2 | Home story; Member Stories | ✔ |
| P9 | hands holding a phone over a café table, screen blank/blurred | 4:5 | Home join; Membership | ✔ |
| P10 | members at folding tables at a community event in a hall | 21:9 | Home governance; About | ✔ |
| P11 | branch exterior, glass front, trees, morning, no sign text | 4:5 | Home branches; Branches | ✔ |
| P12 | older man with bicycle outside a cottage (savings story) | 3:2 | Member Stories | |
| P13 | young woman at a branch desk with a member advisor | 3:2 | Savings (certificates) | |
| P14 | teen with first debit card at a counter (card face hidden) | 3:2 | Savings (youth) | |
| P15 | member signing on a tablet with an advisor | 3:2 | Membership step 2; Savings online | |
| P16 | advisor handing a welcome folder across a desk | 3:2 | Membership step 3 | |
| P17 | food-truck owner leaning on the counter of her truck | 3:2 | Member Stories | |
| P18 | branch lobby interior with seating and plants, empty | 16:9 | Contact; Branches | |
Each page uses each photo at most once. ≤300 KB, ≤2000 px.

## 7. Fixed numbers (sitewide, all sample)
**Sample rates (as of 1 October 2026, for demonstration only):** Share savings 0.75% APY · Money market 2.10% APY · 6-month certificate 3.40% APY · 12-month certificate 3.90% APY · 24-month certificate 3.70% APY · New auto loan from 5.49% APR (up to 72 mo) · Used auto loan from 5.99% APR · 30-year fixed mortgage from 6.25% APR · 15-year fixed mortgage from 5.60% APR · Personal loan from 8.90% APR (12–60 mo). Home shows the 6 marked in §2 #3.
**Membership:** $5 one-time membership fee; $25 minimum in share savings (your ownership share); application online in about 10 minutes; approval within **2 business days**; loan decisions within **1 business day**.
**Calculator default:** $24,000, 60 months, 5.49% APR → about $458 a month.
**Branches:** Riverside Main, 120 Mill Street, Lindenport — Mon–Fri 9:00–17:00, Thu until 19:00, Sat 9:00–13:00 · Market Street, 48 Market Street — Mon–Fri 9:00–17:00 · Northgate, 7 Orchard Road — Mon–Fri 9:30–17:30, Sat 9:00–12:00. Phone (555) 014-1961.
**Members & founding:** 18,420 members; founded 1961; 7 volunteer directors elected each March.
**Directors:** Helen Marsh (chair), Samuel Adeyemi (vice chair), Lucia Ferreira (treasurer), Daniel Kim (secretary), Grace Whitfield, Rafael Ortiz, Mei Tanaka-Brooks (directors).
**Member stories:** Okoye family, first home with a 30-year fixed mortgage, members since 2014 (feature) · Ana Ruiz, bakery owner, personal loan for a second oven, member since 2019 · Tomás Lee, used car for a night-shift commute, member since 2021 · Walter Brenner, retired machinist, certificates for his granddaughter's tuition, member since 1978.
No real deposit insurer, regulator, award or brand is named anywhere.

## 8. Home acceptance checklist (self-review)
1. Header is a white 8 px-radius bar floating 36 px inside the viewport over the hero photo; two outlined pills + exactly one solid pine pill.
2. Hero is top photo / bottom text; heading left-aligned at 4.25rem on 1440, two lines; no table/form/search above the fold; saturated area ≤ 15% (target ≤ 8%).
3. Every section after the hero has a visible 1 px rule, a left-column "0n LABEL", and one pine italic word in the heading.
4. Services row: 4 photos identical 3:2 size, captions under a rule, no cards/shadows.
5. Rates (6 rows) and calculator default ($458) match §7 exactly and say "sample".
6. Calculator panel works without JS (static default) and with JS.
7. 11 photo slots, no repeats, no text/logos/warped hands in any photo, no cut-outs.
8. ≥250 English words, ≥3 narrative paragraphs; numbers match §7.
9. No pine/dark section backgrounds, no centred headings, no four-person team grid, no timeline, no side bar.
10. Contact-sheet compare with Hone, Taiyo, Hada, Kasumi Mortgage: no 3 consecutive matching block types.
11. Mobile 390: bar inset 12 px, pickup row stacks 1-col (2-col at 600–900), calculator usable.
