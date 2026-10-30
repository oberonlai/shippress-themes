# Asaoka Screening: design spec (stage 1, binding for implementation)

Row b20-1 · corporate health screening centre · type `business` · archetype split-screen · hero text-left-photo-right · first screen top-bottom-halves · nav top-bar · page structure narrative-problem-method-proof · font_direction **sans** · IMAGERY **photo**.
Reference: https://nishichita-aichi.or.jp/ (S5-Style, medical welfare association). Screens: brand/ref/nc-first.png, brand/ref/nc-full.png. Tokens: brand/reference-tokens.md (every number below cites a token section a–g).
Similarity target ≈ 80 % in colour relationship, photo treatment, motion, decoration and layout rhythm. Photos, copy, logo are ours. The reference's tall-photo row that bleeds off both edges is **not** used (collides with ito-hr-partners / kensa-laboratory), and neither is its floating header slab (yui-credit-union). We use a plain top bar.

---

## 1. Signature techniques (three, obvious at a glance)

### T1. Mist wave foot + tab-notched notice card (ref: hero wave + 重要なお知らせ card)
- **Reference:** under the photo row a pale-mint SVG wave rises ≈160 px from the bottom (f). A white card r24 (d), ≈ 70 % container width, straddles the wave; a white tab (r16 top corners only) sits on its top-left edge holding a coral "!" icon + label in coral; inside one row: green date, filled green chip, text, 34 px squircle arrow button at the far right.
- **Ours, home hero bottom half:** wave fill `#EAF0EE`, height 150 px desktop / 72 px mobile, curve rising from left (low) to right (high) like the ref. Card `#FFFFFF`, width 78 % of 1220 container (≈ 950 px), r24, shadow `0 0 32px rgba(63,90,86,.10)` (d, green-tinted glow → teal tint). Card top edge sits 40 % above the wave crest so it visibly straddles it. Tab: 236×44 px, white, r16 16 0 0, overlapping the card top by 0 (it is the card's own raised tab, like the ref); content = 18 px coral `#E9795C` round "!" icon + "Next open dates for company groups" 0.875rem/600 in coral. Row: date `Tue 18 Nov` teal 600 · chip `6 places left` (bg `#5E7D78`, white, 0.75rem, pill, 4/14 px padding) · text "Morning group slot, 7:30–11:30, up to 12 staff" · 34 px squircle (r 33 %) arrow button bg `#EAF0EE`, arrow `#5E7D78`.
- **Not to be diluted:** the coral tab must be a real raised tab on the card's top-left (not a floating badge), the wave must be a visible curve (not a straight band), coral appears only here and on the header CTA.

### T2. Scoop-corner photo tiles with centred label (ref: five facility cards)
- **Reference:** 5-up, each ≈ 22 % of container, photo 1.08:1 r26 (e); bottom-right corner cut by a white quarter-circle scoop (≈ 52 px) holding a 28 px filled round arrow; centred green label below 1.1rem.
- **Ours, home §3 "What the morning covers":** five tiles, gap 24 px (c), photo `aspect-ratio:1.08/1; border-radius:26px; object-fit:cover`. Scoop: pseudo-element 56×56 white with `border-top-left-radius:56px` at bottom-right, with a 30 px round button bg `#5E7D78` + white arrow (on hover → `#3F5A56`, .3s ease, arrow nudges 3 px). Label centred under tile, Figtree 1.125rem/600 `#3F5A56`, plus one 0.875rem line of muted `#5E6B69` text ("about 15 min"). Tablet 3+2, mobile 2 columns (the 5th spans, centred at 50 % width); never a horizontal scroller.
- **Not to be diluted:** the scoop must be a true cut (white matches the section ground) with the round arrow sitting in it; radius 26 stays.

### T3. Square-dot Latin label + big title left, ruled dated rows right (ref: "■ News 新着情報" block)
- **Reference:** mint band; left column (≈ 22 %) 8 px green square + "News" 0.875rem, title 2.1rem below, "一覧を見る" link with a small filled square arrow; right column rows separated by 1 px hairline `#D8E0D8` (d): green date + filled chip on line 1, text on line 2, 34 px white squircle arrow button at right.
- **Ours, home §4 "How findings are explained" and §6 "Open dates":** grid 3/12 + 9/12, gap 64 px. Label: 8×8 `#5E7D78` square + Latin label ("Results", "Booking") Figtree 0.875rem/600 letter-spacing .04em `#5E7D78`. Title Figtree 2.25rem/600 `#2F3B39`. Rows: padding 26 px 0, hairline `1px solid #D3DEDB`; line 1 = step/date in teal 600 0.875rem + chip; line 2 = 1rem body; arrow button 34 px squircle white with `#5E7D78` arrow (on mist band) or `#EAF0EE` (on white).
- **Not to be diluted:** the square dot, the left/right split and the hairlines; rows are not cards.

### Continuation to inner pages (T1–T3, ≥ 4 pages each where listed)
| Page | T1 | T2 | T3 |
|---|---|---|---|
| The Morning (checks) | page-head wave foot + notice card "What to bring" | 5 scoop tiles (one per check, larger 3-up) | ■ Timing rows: 7:30 arrival … 11:30 leave |
| Packages & Prices | wave foot + card "Group minimum 5 staff" | 4 scoop tiles for packages | ■ Prices ruled table (see responsive) |
| Results & Follow-up | wave foot + card "Booklets posted within 10 working days" | — | ■ Results 4 ruled steps |
| For Companies (booking) | wave foot + card "Next open dates" (same as home) | — | ■ Booking 4 steps + ■ Dates rows |
| Our Team | wave foot | — | ■ Team rows (7 people) |
| Company Stories | wave foot | 3 scoop tiles leading to each story | ■ Story rows (company, size, date) |
| News | wave foot | — | ■ News rows (full list) |
| Access & Hours | wave foot + card "Closed Sun & public holidays" | — | ■ Hours ruled rows |
Every inner page head = mist `#EAF0EE` band 300 px desktop with ■ label + H1 left, wave at the foot, white content below. This is the shared T1 continuation.

---

## Key visual concept

**(1) Reference first screen.** On a near-empty white field, a row of tall rounded photographs of everyday life: a young family walking hand-in-hand along a green path, a smiling older man walking briskly in daylight, the hospital building against blue sky. Below, a pale-mint wave rises and a white notice card sits on it. Story: *health is part of ordinary daily life; the organisation is quietly there, close to people's routines.* Signature motion: photos drift/enter staggered with a soft fade-up (.8 s, `cubic-bezier(.165,.84,.44,1)`), the slider drifts slowly; blocks fade up on scroll (AOS).

**(2) Our translation (same scene type, same motion idea, same image type = real high-key daylight photos).** *A company medical is an ordinary calm morning, not an ordeal.* Top half: text left, and on the right two rounded tall photos side by side (inside the container, not bleeding off): the large one is the row's signature scene — a physician and a client reading a printed results booklet at a pale wood table in bright daylight; the narrower one continues the reference's "people walking outdoors" — two colleagues walking along a tree-lined path towards a low clinic building in the morning. Bottom half: the mist wave and the notice card with the next open company date (the reference's notice card = our booking news). Motion: photos enter staggered on load (CSS keyframe, not scroll reveal), the large photo has slow parallax (the reference's drift, made scroll-driven).

**(3) KV checklist** (all visible in the 1440×900 first screen; images listed in §8)
| # | 参考站元素 | 我們的對應 | 位置 | 動態 | 用哪張圖 |
|---|---|---|---|---|---|
| 1 | Tall rounded photo of everyday people (family / senior walking) | Large rounded photo (0.85:1, r30): physician + client reading a printed results booklet at a pale wood table | right half of top half, x 640–1060, y 150–640 | `sp-parallax` `--sp-par:8%` + load fade-up 24 px .8 s | P01 hero-booklet |
| 2 | Second rounded photo cropped narrow beside the first (neighbour sliver) | Narrow rounded photo (0.42:1, r30): two colleagues walking on a tree-lined path to the clinic | right of #1, x 1084–1220, top offset +56 px | load fade-up, delay .12 s | P02 morning-walk |
| 3 | Near-empty white field, calm gap | Left text column: ■ "Company health checks" label, H1 (4.5rem), 2-line lead, coral pill "Reserve a date" + text link "See what the morning covers" | left half of top half | none (hero, no reveal) | — |
| 4 | Pale-mint wave rising under photos | `#EAF0EE` SVG wave 150 px, low-left → high-right | bottom of first screen, full width | static | — |
| 5 | White notice card with coral tab chip on its top-left | "Next open dates for company groups" card straddling the wave: tab, date, chip, text, squircle arrow | bottom centre, 78 % container, top at y≈ 700 | static on load (in first screen → no reveal) | — |
| 6 | Header: logo left, nav, coral pill CTA | Plain white top bar 88 px: wordmark left, 6 links, coral pill "Reserve a date" | top | none | — |

---

## 2. Colour (source: tokens a; reference relation green-main / mint-band / coral-accent kept, hue shifted to the row's 錆青磁 slate-teal because the row fixes `#5E7D78`; ref green #198754 is also too close to recent green themes)
| Role | Hex | Ref counterpart | Share (first screen) |
|---|---|---|---|
| Base | `#FFFFFF` | #FFFFFF | ≈ 62 % |
| Mist band / wave | `#EAF0EE` | #F0F8F2 | ≈ 20 % |
| Main slate-teal (labels, chips, buttons, scoop arrows) | `#5E7D78` | #198754 | ≈ 4 % |
| Deep teal (hover, footer band, tile labels) | `#3F5A56` | #1E5A28 | ≈ 1 % |
| Tint (chip-light, arrow bg) | `#D6E3DF` | #D2F6DB | ≈ 1 % |
| Ink text | `#2F3B39` | #383E39 | text |
| Muted text | `#5E6B69` | #606060 | text |
| Hairline | `#D3DEDB` | #D8E0D8 | — |
| Accent coral (header CTA + T1 tab only) | `#E9795C` | #FF7654 | < 1 % |
Photos ≈ 12 %. **First-screen saturated share ≤ 15 %** (target ≈ 8 %; check-first-screen.py). Footer: `#3F5A56` band, white text. No cream / beige anywhere. Closing CTA pill gradient `linear-gradient(90deg,#5E7D78,#7FA39C)` (ref long gradient pill, f).

## 3. Type (font_direction sans; tokens b)
- Latin headings: **Figtree** 500/600. Latin body: **Source Sans 3** 400/600.
- Stacks: heading `"Figtree","Noto Sans TC","Noto Sans JP",system-ui,sans-serif`; body `"Source Sans 3","Noto Sans TC","Noto Sans JP",system-ui,sans-serif`. `:lang(zh-TW)` puts Noto Sans TC first, `:lang(ja)` Noto Sans JP first (黑體; no Mincho anywhere).
- All via theme.json `fontFamilies` + `fontFace` (woff2 in assets/fonts, incl. zh-TW / ja subsets); editor = front end; copy shared/inc/editor-lang.php → inc/editor-lang.php, require in functions.php.
- Scale (theme.json): xs .8125rem · sm .875rem · base 1.0625rem (lh 1.8, ref b) · md 1.25rem · lg 1.75rem · xl 2.25rem (section titles, ref 1.6–2.4) · xxl 3rem · display **clamp(2.6rem, 5vw, 4.5rem)** (H1; max 4.5rem ≥ 4.25). Weights 400/600 only (ref regular/medium). Headings lh 1.3, letter-spacing −.01em. CJK ≈ 0.75× display size, body lh 1.85; de/fr `hyphens:auto`.

## 4. Spacing, radius, motion tokens
- Container 1220 px (c), wide 1280; section padding 112 px desktop / 72 px mobile (c 90–120); card gap 24 px.
- Radius: pill 999 px (buttons, chips), photos 30 px, tiles 26 px, cards 24 px, arrow squircle 33 % (d).
- Shadow: `0 0 32px rgba(63,90,86,.10)` cards only.
- Motion: `--sp-dur:.8s`, easing `cubic-bezier(.165,.84,.44,1)` (g), `--sp-dist:24px`; hover .3s ease.

## 5. Home page

### First screen (1440×900, top-bottom halves)
- 0–88: top bar (white, hairline below), wordmark "Asaoka Screening" Figtree 1.375rem/600 `#3F5A56` with an 8 px teal square before it; links Figtree .9375rem `#2F3B39`: The Morning · Packages · Results · For Companies · Team · Access; coral pill CTA 44 px tall.
- Top half 88–660: grid 6/12 text + 6/12 photos. Text vertically centred: ■ label "Company health checks · since 2009" → H1 "A calm morning of health checks for your whole team" (display, `#2F3B39`, max 13ch/line ≈ 3 lines) → lead 1.125rem, 2 lines → coral pill + teal text link. Photos per KV #1/#2.
- Bottom half 660–900: wave + T1 card (card fully visible by y 860).
- Mobile 390: bar 64 px with burger; H1 2.6rem; photo P01 full width 0.95:1 r24 below text, P02 hidden on <600 px; wave 72 px; card full width minus 20 px, tab shrinks to label only. No vertical text, no absolute labels over text.

### Block order
| # | Block | Purpose | Layout & photos | Copy | Motion |
|---|---|---|---|---|---|
| 1 | Hero | KV | above (P01, P02) | H1 + 2-line lead | parallax P01 |
| 2 | Mission line + Problem | why small firms put medicals off | centred two-line statement 1.5rem (ref mission line) → below grid 5/12 photo P03 (r30, 4:5) + 7/12 three short paragraphs with ■ labels "Time", "Paperwork", "Follow-up" | ≈ 140 words | `sp-reveal--up` on statement and text |
| 3 | The morning (T2) | method: five checks | ■ "The Morning" + title centred, 5 scoop tiles P04–P08 | label + 1 line each | `sp-stagger` + tiles `sp-reveal--up` |
| 4 | How findings are explained (T3) | method, part 2 | white ground; left ■ Results + title + link; right 4 ruled rows (Same-day summary · Printed booklet within 10 working days · 20-minute explanation with a physician · Referral letter when needed) | ≈ 90 words | rows `sp-reveal--up` |
| 5 | Proof band (parallax) | proof, mood | full-bleed P09 band 560 px, `sp-parallax --sp-par:10%`; foreground white card (left, 420 px, r24, static) with 3 numbers: 2009 founded · 140 companies a year · 10 working days to booklet (`sp-count`) | ≈ 40 words | parallax + count |
| 6 | Company stories | proof | two white panels side by side (ref twin panels) r24, each: P10 / P11 photo top 16:9 r20, company, staff count, 2-sentence quote, squircle arrow | ≈ 80 words | `sp-reveal--up` |
| 7 | Packages | prices summary | mist band; ■ Packages + title left, right ruled price list (4 packages, price right nowrap) | 1 line each | none (price table) |
| 8 | Open dates (T3 + T1 echo) | reservation | white; left ■ Booking + title, right 4 dated rows with "places left" chip | dates | rows `sp-reveal--up` |
| 9 | Close | CTA | centred line + long gradient pill (ref) → below, small address/hours line; P12 small round photo (r30, 1:1, 240 px) left of text | ≈ 30 words | `sp-reveal--up` |
Home photo positions: P01–P12 = **12** (≥ 8). Home ≥ 250 English words (target ≈ 420), ≥ 3 narrative paragraphs (block 2).

### Comparison with recent homes (must not resemble)
| Theme | Their order | Asaoka |
|---|---|---|
| Minori Seminars | inset photo stage + notch card → strip → diagonal band cards | split text/photos + wave + tab card → statement/problem → scoop tiles → ruled rows → parallax band → twin panels → price list → dated rows → gradient pill |
| Kouhi Service | wide banner → tiles → curved band card → sticky media → calendar tabs | no banner, no sticky media, no tabs; dates are ruled rows |
| Shirushi Customs | dark pinned stage → desk → masonry → dossier strip → blurred inset | all light, no pinned stage, no masonry |
| Kensa Laboratory | peeking slide strip → 4×2 tiles → ruled rows → parallax band → steel panels | no peeking/sliding strip (photos sit inside container); 5 scoop tiles not 4×2; T3 rows have a left label column + chips; parallax band carries a static number card |
Reason it differs: first screen is top-bottom halves with a wave + tabbed card (none of the four), tiles have the scooped arrow corner, palette is slate-teal + coral on white/mist.

## 6. Inner pages (≥ 8; all with the mist page head + wave)
1. **The Morning** — five checks in detail (what, how long, preparation: fasting from 21:00, bring last year's booklet); timing rows 7:30–11:30; photos P04–P08 reused at larger size is NOT allowed on the same page twice; use P13 (reception desk) + the five tiles.
2. **Packages & Prices** — 4 packages + 2 add-ons (§7) in the full-width ruled price table; group rules; what is included.
3. **Results & Follow-up** — the four explanation steps, sample booklet description, privacy (company receives only fit-for-work summary), referral letters; photo P14 (booklet close-up).
4. **For Companies** — 4-step booking process, roster template, invoicing, open dates rows; photo P11.
5. **Our Team** — P15 as the wide head photo; 7 people as a T3 ruled list (■ Team label left; rows: name · role chip · 1-line bio · squircle arrow). No portrait grid, no 4-person grid. (The T2 row in the continuation table for Team is replaced by this; T2 still reaches 4 pages: Morning, Packages, Stories, home.)
6. **Company Stories** — 3 stories, each with photo (P10, P11, P16) and 3 paragraphs.
7. **Access & Hours** — address, hours rows, transit, parking; photo P02 (walk) large.
8. **FAQ** — 8 Q&A, ruled rows (T3).
9. **News** — 5 posts as T3 rows.
10. **Contact / Reserve** — form (not in first screen of home), hours, phone.

## 7. Fixed facts (identical on home, inner pages and all five languages)
- Founded **2009** by Dr Hana Asaoka. Address: **Asaoka Screening, 14 Linden Row, Harbour District** (fictional, no country). Phone +00 0 1234 5678 (placeholder pattern).
- Hours: checks **Mon–Sat 7:30–11:30**; result explanations **Mon–Fri 14:00–17:00**; closed Sun & public holidays.
- Groups: **5–40 staff** per morning; reserve **at least 3 weeks** ahead; booklet **within 10 working days**; explanation **20 minutes** per person; **140 companies** a year.
- Prices (per person, EUR, VAT incl.): Essential check **€145** · Standard employee medical **€210** · Extended (adds abdominal ultrasound) **€320** · Over-40 comprehensive **€410** · Add-on eye pressure **€25** · Add-on hearing test **€20** (6 items).
- Five checks: Body measurements & vision · Blood & urine · Chest X-ray · ECG · Physician consultation.
- People (7): Dr Hana Asaoka (founder, internal medicine) · Dr Tomás Riedel (radiology) · Dr Amara Okafor (cardiology, ECG) · Lena Marsh (head nurse) · Mei Chen (results nurse) · Kai Lindqvist (laboratory) · Priya Nair (company liaison).
- Stories (3): Fernhill Design Studio (12 staff) · Corran Bakery Wholesale (28 staff) · Oduya & Pell Accountants (8 staff).
- Booking process (4): Request a date → Confirm roster → Screening morning → Results & explanation.
No guaranteed outcomes, awards, real media or brands.

## 8. Images (16, Grok, one at a time, read each; ≤ 300 KB, ≤ 2000 px, no text/logos, diverse, neutral modern setting, no Japanese elements)
**STYLE:** `real candid daylight photograph, high-key, bright soft morning light, airy white and pale sage interiors, pale natural wood, soft green foliage, natural true colours, gentle shallow depth of field, calm documentary feel, modern international clinic setting, diverse adults, no text, no logos, no signage`
| ID | Subject / composition | Where | Home |
|---|---|---|---|
| P01 | Physician (white coat) and client side by side reading a printed results booklet at a pale wood table, window light, portrait 0.85:1 | Home hero KV #1 | ✔ |
| P02 | Two colleagues walking along a tree-lined path towards a low white clinic building, morning, seen from behind-side, tall portrait | Home hero KV #2; Access head | ✔ |
| P03 | Small office team at desks glancing at a wall calendar, bright open office | Home §2 | ✔ |
| P04 | Nurse measuring a client's height/eye chart area, vision test, bright room | Home tile 1; Morning | ✔ |
| P05 | Nurse preparing a blood draw, gloved hands, calm client's arm, close-mid | Home tile 2; Morning | ✔ |
| P06 | Chest X-ray room, radiographer positioning a client, pale tones | Home tile 3; Morning | ✔ |
| P07 | ECG with electrodes, client lying relaxed, nurse checking monitor (screen unreadable) | Home tile 4; Morning | ✔ |
| P08 | Physician listening with stethoscope in a consultation room, plant, wood | Home tile 5; Morning | ✔ |
| P09 | Wide exterior: low modern clinic with trees and a quiet path, morning sky, 21:9 | Home parallax band | ✔ |
| P10 | Design-studio staff chatting in a light studio after the check, coffee cups | Home story panel 1; Stories | ✔ |
| P11 | Bakery wholesale staff in aprons in a bright packing room, relaxed | Home story panel 2; For Companies | ✔ |
| P12 | Receptionist smiling at a front desk with a pale wood counter, close crop 1:1 | Home close | ✔ |
| P13 | Waiting area with pale chairs, plants, two people reading, wide | Morning head; Packages head | |
| P14 | Close-up of hands turning pages of a printed results booklet with charts (no readable text) | Results page | |
| P15 | Clinic team of five standing informally in a bright corridor | Team page | |
| P16 | Small accounting office, two people reviewing a folder by a window | Stories (3rd) | |
Same photo never twice on one page.

## 9. Scroll effects (from stage-a candidates; sp-scroll unchanged)
| Effect | sp-* | Where | Source & timing |
|---|---|---|---|
| Block fade-up | `sp-reveal sp-reveal--up` | §2 statement/text, §4 & §8 rows, §6 panels, §9 close, inner page sections | nishichita AOS fade-up on enter, .8 s, cubic-bezier(.165,.84,.44,1), 24 px |
| Staggered tiles | `sp-stagger` parent + tiles `sp-reveal--up` | §3 five scoop tiles (and inner T2 tiles) | nishichita AOS per-item delay ≈ .1 s (sp-stagger .12 s) |
| Parallax (drift) | `sp-parallax` | hero P01 (`--sp-par:8%`) and §5 band P09 (`--sp-par:10%`) | nishichita slick photo drift, continuous linear → scroll-driven |
| Count | `sp-count` | §5 three numbers | supporting |
Hero: no reveal (load fade-up is a CSS keyframe gated by `html.sp-js:not(.sp-no-motion)` and reduced-motion). Price table and forms: no effects.

**Parallax (required):** §5 Proof band — outer Group/Cover `sp-parallax` full-bleed 560 px (mobile 380 px), background P09, foreground = the static white number card (not inside the moving layer), `--sp-par:10%` desktop / 6 % mobile (kept on mobile). Hero P01 also `sp-parallax --sp-par:8%` (figure>img, figure overflow clip r30). Reference counterpart: the hero photo row's slow drift. Verify with check-parallax.mjs (≥ 6 px, 0 under reduced-motion).

## 10. Responsive rules
- 390 px first screen: no vertical text, no absolutely positioned labels overlapping text; T1 tab is in flow on mobile.
- Price table ≥ 782 px: full container width, two columns (item | price), price column `white-space:nowrap; text-align:right`, never clipped (check at 800 and 1280).
- Every table (prices, hours) stacks on < 600 px (item above price). No horizontal overflow at 390/1280.

## 11. Similarity table
| Dimension | Reference | Asaoka |
|---|---|---|
| Base / band / accent | white 70 % · mint #F0F8F2 15 % · coral <3 % | white 62 % · mist #EAF0EE 20 % · coral <1 % |
| Main colour | green #198754 | slate-teal #5E7D78 (row hex) |
| Text | #383E39 lh 1.8 | #2F3B39 lh 1.8 |
| Titles | 1.6–2.4rem regular/medium | 2.25rem 600 |
| Radius | pill / photo 28–32 / card 24 / squircle 33 % | pill / 30 / 24 / 33 % |
| Photo tile | 1.08:1 r26 scoop + 28 px arrow | 1.08:1 r26 scoop + 30 px arrow |
| Hero photos | tall 0.85:1 r30 | 0.85:1 r30 + 0.42:1 |
| Wave | ≈160 px | 150 px |
| Notice card | white r24, tab top-left, coral label | same |
| News block | ■ label + title left, hairline rows right | same (Results, Booking) |
| Section padding / container | 90–120 / 1220 | 112 / 1220 |
| Motion | .8 s cubic-bezier(.165,.84,.44,1), 20–30 px | same, 24 px |
| Shadow | 0 0 25–40 px green glow | 0 0 32 px teal glow |
| CTA | long gradient pill + arrow disc | same in teal |

## 12. Home acceptance checklist
- [ ] First screen = top-bottom halves: text left / two rounded photos right; wave + coral-tab card at bottom; all 6 KV items visible at 1440×900.
- [ ] Saturated share ≤ 15 %; coral only on header CTA + T1 tab.
- [ ] T1, T2 (5 scoop tiles), T3 (two ruled-row blocks) unmistakable; T1–T3 continue on ≥ 4 inner pages.
- [ ] 12 photo positions on home, none repeated on the page; all high-key, no text/logos.
- [ ] Figtree / Source Sans 3 + Noto Sans TC/JP via theme.json fontFace; display max 4.5rem.
- [ ] Parallax on hero and §5 band passes check-parallax.mjs; reveals pass; reduced-motion static.
- [ ] Price list full width ≥ 782 px, price nowrap right; tables stack on mobile; no overflow at 390.
- [ ] ≥ 250 English words, ≥ 3 paragraphs; facts match §7.
- [ ] Plain top bar only, one menu; no sidebar, no edge-bleeding photo row, no floating header slab.
