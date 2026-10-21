# Hone Orthopedics: design spec (stage B, binding for implementation)

Slug `hone-orthopedics`, orthopedic and sports-injury clinic, type health, no WooCommerce. Stage 1 = front page only (en). Reference: Izumi Gastro & Surgery Clinic, https://www.izumiiin.com/ (S5-Style #10000). See `reference.md` for the measurements (`brand/ref/izumi-first.png`, `izumi-full.png`). Borrow structure, technique and colour relationships only. No copy, photos or logos.

Fixed brand facts (every page, every language, home and inner pages identical):
- **Hone Orthopedics**, founded **2011**, **2180 Main Street, Vancouver, BC** (Mount Pleasant). Phone (604) 555-0142, hello@hone-ortho.example.
- **5 orthopedic surgeons, 1 sports medicine physician, 2 physiotherapists = 8 clinicians.**
- Hours: **Mon–Fri 7:30–19:00, Sat 8:00–13:00, Sun and statutory holidays closed.**
- Currency **CAD ($)**, the same figures in every language.

---

## 1. Signature techniques (three, all obvious at a glance)

### T1. Rounded tall-portrait strip with bleeding outer photos (Izumi first screen)
- Reference (izumiiin.com, first screen): under a slim header, a row of tall photos with ~24 px corners. Photo 1 bleeds off the left viewport edge, the centre portrait (~420×690) sits whole, a text column stands beside it, and photo 3 bleeds off the right edge. ~110 px gap above the strip, photos sit on a near-white ground.
- Hone (first screen, 1440×900): header 96 px. Strip starts at y=112, height 680 px (ends ~792, leaving ground below for the ribbon). Four columns left to right:
  1. **P1** knee assessment, width 360 px, starts at x = −40 (bleeds left), radius `0 24px 24px 0` visible corners only on the right.
  2. **P2** surgeon portrait, x≈352, 420×680, radius 24 px, whole.
  3. Text column, x≈800, width 380 px (content described in 3).
  4. **P3** physio with runner, starts at x≈1220, width 300 px, bleeds off the right edge, radius `24px 0 0 24px`.
  Gap between photos 32 px. Photos `object-fit: cover`.
- Mobile (<782 px): P2 full width minus 24 px (4:5), P1 and P3 become two 56%-wide slivers in a horizontal row under it, the left one bleeding left, the right one bleeding right; text column comes first above P2.
- Must not be diluted: outer photos must actually bleed past the viewport edge (not stop at the content width), the radius stays 24 px (not 8, not 0), the photos stay tall (P2 ratio ≤ 0.65 width/height), and there are at least three photos in the strip.

### T2. Thick rounded ribbon stroke over a pale disc and a dark arc (Izumi first-screen bottom right)
- Reference: a ~50 px sky-blue stroke with round caps sweeps from the lower right up across the edge of photo 3, over a large pale disc and a dark green arc band clipped by the viewport.
- Hone: one inline SVG (`hone-ribbon.svg`, decorative, `aria-hidden`), absolutely positioned bottom-right of the hero: a pale disc `#E8EEF2` (diameter ~560 px, centre at x=1420, y=860, clipped), a dark arc band `#3E5566` (stroke 44 px, quarter-circle, radius 300, clipped by the right/bottom viewport edge), and on top the ribbon `#8DB3CC` stroke **48 px**, `stroke-linecap: round`, a J-shaped path from (1110, 700) curving down and up to (1400, 500) so it crosses the lower-left corner of P3. It must sit above P3 (z-index) and overlap the photo by at least 60 px.
- Reprises on home: (a) section 6 "This week" band, a shorter ribbon (32 px stroke) curling out of the top-left corner of the white hours card; (b) the closing section 10, the full disc + dark arc + ribbon again at bottom-right behind the clinic photo.
- Must not be diluted: stroke ≥ 44 px on the hero (≥ 32 px on reprises), round caps, it must cross a photo edge (not float on empty ground), the dark arc must be the dark primary (not a pale tint). Ribbon colour stays the soft steel blue, never a saturated blue.

### T3. Tall rounded photo cards with a notched arrow tab (Izumi "Medical care" cards)
- Reference (izumiiin.com, medical-care section): three tall photo cards with rounded corners; the bottom-right corner of each image is cut out as a square notch in the ground colour holding a small arrow, title and short text under the image.
- Hone: home section 4 "Three ways in" (three cards) and the joint cards in section 3. Image 3:4, radius 24 px. Notch = an 76×76 px square in the section ground colour at the bottom-right, its own top-left corner rounded 20 px (inverse-corner look: add two 20 px pseudo-element "fillets" so the image corner wraps around the notch). Inside the notch a 52 px circle `#3E5566` with a white → arrow; hover = circle `#2E3A44` and the arrow moves 4 px right. Title Source Serif 4 1.6rem under the image, 2–3 lines body, whole card is one link.
- Must not be diluted: the notch must be visible as a cut-out (ground colour, not a white sticker), sit exactly in the bottom-right corner, and the cards stay portrait (3:4).

### Supporting device (not counted): big light label + small caption + orange dot (Izumi "News" / "Medical Care")
Every home section head: a small 8 px dot `#E08A3C` at top-left, then the English label in Source Serif 4 300, `clamp(2.8rem, 5.2vw, 4.5rem)`, colour `#3E5566`, then the small caption (Source Sans 3 0.875rem, letter-spacing .08em, `#6C7A89`) under it, then the real H2 in 1.75rem ink. Example: "Specialists" / caption "Surgeons, sports physician, physiotherapists" / H2 "Find the person who treats your joint". Left-aligned, never centred.

### Continuation to inner pages (stage 2, required)
| Page | T1 strip | T2 ribbon | T3 notch cards | Label device |
|---|---|---|---|---|
| Our Specialists (directory) | page head: three tall rounded photos (stage-2 photos; P2/P9 may be reused here since it is another page), title column between | ribbon at the bottom-right of the head, crossing the right photo | every clinician card = 3:4 portrait placeholder (rounded initial tile, no 8 photos needed) with the notch arrow → single page; filter chips by joint (CSS radio `:has()`) | yes |
| Single clinician | portrait whole + text column (two-element strip, left photo bleeding) | ribbon reprise beside "Clinic days" card | "Related conditions" 2–3 notch cards | yes |
| Conditions & Treatments | strip head with knee / shoulder / spine photos | ribbon at the hours/booking aside | five joint notch cards (knee, shoulder, hip, spine, hand-foot-ankle), each with anchor sections below | yes |
| Sports Injury | strip head (runner, assessment, return-to-play) | ribbon crossing the return-to-sport photo | three notch cards: acute injury, overuse, return-to-play testing | yes |
| Physiotherapy & Rehabilitation | strip head (gym, band exercise, balance work) | ribbon on the pack-price card | notch cards for programmes | yes |
| Your First Visit | two-photo strip (reception bleeding left, consult whole) | ribbon out of the hours dot-grid card (same as home section 6) | — | yes |
| Fees & Insurance | — (single rounded photo) | ribbon over the fee card corner | — | yes; fee figures identical to section 5 below |
| Patient Stories | strip of three story photos | ribbon at page foot | stories as notch cards → single story | yes |
| Journal (index/single) | — | ribbon in the footer band only | posts as notch cards (3:4 featured image) | yes |
| Book an Appointment / Contact | two-photo strip | full disc + arc + ribbon (same as home close) | — | yes; request form allowed here (not a first screen of the home) |

---

## 2. Colour (from Izumi relationships, shifted to the blue-grey family of the plan #6C7A89)

| Role | Hex | Source on izumiiin.com | Use | Share |
|---|---|---|---|---|
| Ground | `#F7F9FA` | page ground `#FEFFF5` (cream shifted to cool off-white) | page ground | ~55% |
| Pale panel | `#E8EEF2` | pale panels `#E7F3EE` / `#F5F9E8` | hero disc, section 3 and 6 bands, footer | ~18% of a page |
| Primary (dark) | `#3E5566` | green `#1E8C63` (buttons, dark arc, hours header) | dark arc, buttons, hours-grid header row, notch circles, label text | ≤ 5%; one dark band only (section 8 is NOT dark; only the close card) |
| Ribbon / secondary | `#8DB3CC` | sky blue `#3FA7D1` (ribbon, Web reserve button), desaturated | T2 ribbon, chip selected border, header "Request" button ground (ink text) | ~5% |
| Ink | `#2E3A44` | olive text `#6F744E` | headings, body | ~8% |
| Muted | `#6C7A89` | (plan main) | captions, meta, hairlines at 40% | — |
| Accent dot | `#E08A3C` | orange dot `#F29100` | dots only (label dots, hours "open" dots) | < 0.5% |

- Not cream, not sage/teal, not Kagi indigo, not Hatsumei navy: ground is a cool grey-white, primary is a slate blue-grey.
- Contrast: white on `#3E5566` 7.6:1; ink on `#8DB3CC` ≥ 6:1 (never white text on the ribbon colour).
- First-screen saturated area (s>0.35, v>0.3): Izumi 10.6%. Gate **≤ 12%**, target 6–10%. The ribbon colour has s≈0.31 so it does not count; the dark arc has v≈0.40, s≈0.39 and is clipped small. Grade photos bright high-key with blue/grey scrubs and white walls.

Typography: Source Serif 4 (display 300/600) + Source Sans 3 (body 400/600). Presets: small 0.8125rem, medium 1.0625rem (body), large 1.375rem, x-large 1.75rem, xx-large 2.75rem, **huge 4.5rem** (max, ≥ 4.25rem; used by the label device). Body line-height 1.75. One top menu only.

Header (Izumi): white-to-ground transparent bar, 96 px. Wordmark "Hone" Source Serif 4 600 1.5rem + "Orthopedics & Sports Injury" 0.75rem muted under it, left. Nav (Source Sans 3 0.9rem 600, each item preceded by a small 14×8 px pill dot in `#3E5566`/`#8DB3CC` like Izumi's toggle dots): Specialists, Conditions, Sports Injury, Physio & Rehab, First Visit, Fees, Journal. Right: two pill buttons (Izumi LINE/Web pair): "Call (604) 555-0142" `#3E5566` white text, and "Request a visit" `#8DB3CC` ink text, 44 px tall, radius 22 px. Mobile: overlay menu.

---

## 3. Home page

### First screen (T1 + T2), 1440×900
Strip as in T1. Text column (x≈800, w 380, vertically centred on the strip):
- Rotated vertical label running up the left edge of the column (writing-mode vertical-rl + `rotate(180deg)`, Latin, 0.75rem, letter-spacing .2em, muted): "VANCOUVER · SINCE 2011". This is the English stand-in for Izumi's vertical copy (no CJK).
- Dot + small caption "Orthopedics & sports injury clinic".
- H1 Source Serif 4 300, **3.25rem** (not giant, left-aligned, 4 lines max): "Back to the things / you move for."
- Paragraph 1.0625rem, 3 lines: "Surgeons and physiotherapists in one building on Main Street. Knee, shoulder, hip, spine, hand and foot — assessed by the person who specialises in that joint."
- Line "New patients seen this week · reply within one business day" (0.875rem, dot `#E08A3C`).
- Text link "Find a specialist by joint →" (ink, underline). No button in the hero body, no form, table or search.

### Block order (desktop)
| # | Block | Purpose | Layout | Photos | Copy |
|---|---|---|---|---|---|
| 1 | Hero portrait strip | first screen | T1 + T2 | P1, P2, P3 | H1 + 40 words |
| 2 | "Clinic" statement | who we are | label device left 4/12 (with a small rounded P4 rehab-floor photo 4:3 under it), right 7/12 three paragraphs (≈150 words) on ground | P4 | 3 paragraphs |
| 3 | "By joint" finder | the industry core: find care by body area | pale panel `#E8EEF2` full width. Label device top. Row of five pill tabs (Knee · Shoulder · Hip · Spine · Hand, foot & ankle), CSS radio `:has()`; Knee default. Panel: left a tall rounded photo for the joint (P5 shoulder used for all as fallback is NOT allowed: one photo P5 (knee-brace check) stays fixed for all tabs; only the text panel switches) 5/12; right 6/12: common conditions list (5 items), "Who you'll see" with 2 clinician mini-rows (name, role, days), link "All knee specialists →" | P5 | 60 words per joint |
| 4 | "Three ways in" | pathways | T3: three notch cards in a row on ground: Sports injury (P6), Surgery & recovery (P7), Physiotherapy & rehab (P8) | P6, P7, P8 | 30 words each |
| 5 | "Specialists" directory preview | directory teaser | left 5/12: one tall rounded featured portrait P9 (Dr. Priya Raman) with a white rounded caption chip overlapping its bottom edge; right 7/12: two grouped lists "Surgeons" (5) and "Sports medicine & physio" (3), each entry = name, role, joint chips (pill, 1 px `#8DB3CC` border), clinic days; hairline between; link "Open the directory →" | P9 | 8 entries |
| 6 | "This week" visit flow + hours | same-week booking | pale panel band. Left 5/12: rounded landscape photo P10 (reception) with the T2 32 px ribbon curling out of the card corner next to it. Right 7/12: white rounded card (24 px) with the Izumi dot-grid: header row `#3E5566` white (Mon … Sun), rows "7:30–13:00" / "13:00–19:00" / "Sat 8:00–13:00" with `#E08A3C` dots, Sun "—"; under it the 3-line flow in prose (not a step grid): request by Wed 17:00 → we reply within one business day by 18:00 → visit the same week | P10 | 70 words |
| 7 | "Fees" | transparency | ground. Left 6/12: white rounded card with 7 fee rows (name left, $ right, dotted leader) + insurance note; right 5/12 tall rounded photo P11 (ultrasound of shoulder), radius 24 | P11 | 7 rows + 50 words |
| 8 | "Stories" | patient stories | three stories: one large rounded landscape P12 (runner back on a trail) 7/12 with the first story beside it 5/12; then two text-only stories side by side below with initials + joint chip. Disclaimer line: "Individual experiences; results differ from person to person." | P12 | 3 × 60 words |
| 9 | "Journal" | articles | three notch cards smaller (image 4:3 here, notch 60 px) | P13, P14, P15 | title + date + 20 words |
| 10 | Close "Visit" | address + request | ground with the full T2 (disc + dark arc + ribbon) at bottom-right behind a rounded clinic-exterior photo P16 (6/12, right); left 5/12: label "Visit", address, hours summary, phone, the two pill buttons | P16 | 50 words |

Home photo positions: P1–P16 = **16** (≥ 8). Home text ≥ 450 English words.

### Not like the last three themes
| Slot | Taiyo Solar Works | Hada Dermatology | Michi Motors | Hone |
|---|---|---|---|---|
| Hero | split 50/50 photo + graphite panel with inset portrait | inset photo in L band, thin Latin line, arch | full-bleed dimmed cover, staggered headline | tall rounded photo strip bleeding off both edges + ribbon stroke |
| 2 | roofwork text | doctor letter + inset portrait | family text + photo | clinic statement with big light label |
| 3 | featured case + hairline circles | numbered concern rows on gradient panel | forecourt feature + ledger | joint finder (radio tabs, photo + conditions + who you'll see) |
| 4 | numeral-card band | 3 alternating chapter bands | checked statement rows | three notch-arrow photo cards |
| 5 | ruled services list | doctors as rows | full-bleed service band | featured portrait + grouped directory with joint chips |
| 6 | graphite assessment band | standard band, line over photo | 3 location rows | hours dot-grid card + same-week flow on pale band |
| 7 | crew photo + ruled list | fees list + photo | steel band + pull line | fee card + tall photo |
| 8 | news-line rows | journal 3 columns | 2 unequal journal posts | stories (large + two text) |
| 9–10 | mirrored 50/50 close | visit close with arch | full-bleed test-drive close | notch-card journal, close with disc/arc/ribbon |
Why different: no split hero, no full-bleed dimmed band, no doctor letter, no numbered rows, no alternating chapters; the shape language is rounded tall photos + thick ribbon + notches, which none of the three use (Taiyo = hairline circles/square cards, Hada = thin arch and L band, Michi = full-bleed bands).

---

## 4. Inner pages (stage 2)
1. **Home** (above).
2. **Our Specialists**: filter chips by joint and by role (CSS radio `:has()`, works without JS); 8 notch cards; each card name, role, joints, clinic days.
3. **Single clinician** (×8 as pages or one template + 8 pages): bio 150 words, training (generic, no real institutions), joints, clinic days, "Conditions I see" notch cards, request link.
4. **Conditions & Treatments**: five joint sections (knee, shoulder, hip, spine, hand-foot-ankle), each: common conditions, non-surgical first, when surgery is discussed, who treats it.
5. **Sports Injury**: acute vs overuse, sports injury assessment ($195), return-to-play testing, working with coaches; no outcome promises.
6. **Physiotherapy & Rehabilitation**: post-op programmes, single session and 6-pack prices, the rehab floor, home exercise plans.
7. **Your First Visit**: same-week flow, what to bring (imaging, medication list, referral optional), how long it takes (60–75 min), hours dot grid.
8. **Fees & Insurance**: the same 7 fees, insurance note (we issue itemised receipts for extended health plans; provincial plan coverage depends on referral; no named insurers), cancellation (24 h notice, otherwise $50).
9. **Patient Stories**: 4 stories (3 from home + 1), disclaimer on every story.
10. **Journal**: index + single, 3–6 posts.
11. **Book an Appointment / Contact**: request form pattern (plain HTML, no plugin), address, map placeholder (rounded pale panel with pin, no real map embed), hours, phone.

---

## 5. Fixed numbers (identical on every page)

### Fees (CAD)
| Item | Price |
|---|---|
| New patient consultation, surgeon (40 min) | $240 |
| Follow-up consultation (20 min) | $140 |
| Sports injury assessment, physician + physio (50 min) | $195 |
| Physiotherapy session (45 min) | $110 |
| Physiotherapy pack, 6 sessions | $600 |
| On-site X-ray, 2 views | $85 |
| Diagnostic ultrasound (one joint) | $160 |
Cancellation with less than 24 h notice: $50. Itemised receipts for extended health plans; we do not name or guarantee any insurer.

### Clinicians (8, fictional)
| Name | Role | Joints / focus | Clinic days |
|---|---|---|---|
| Dr. Amara Okonjo | Orthopedic surgeon, clinical lead | Knee, sports knee (ACL, meniscus) | Mon, Wed, Fri |
| Dr. Lucas Brennan | Orthopedic surgeon | Shoulder and elbow | Tue, Thu |
| Dr. Priya Raman | Orthopedic surgeon | Hip and knee replacement | Mon, Thu |
| Dr. Tomás Ferreira | Orthopedic spine surgeon | Spine, neck and lower back | Tue, Fri |
| Dr. Helen Cho | Orthopedic surgeon | Hand, wrist, foot and ankle | Wed, Sat |
| Dr. Grace Whitfield | Sports medicine physician | Sports injuries, non-surgical care | Mon, Tue, Thu, Sat |
| Sina Talataina | Physiotherapist | Sports rehab, return-to-run | Mon–Fri |
| Mikkel Sorensen | Physiotherapist | Post-operative and spine rehab | Tue–Sat |
Joint finder pairs (section 3): Knee → Okonjo, Talataina; Shoulder → Brennan, Sorensen; Hip → Raman, Sorensen; Spine → Ferreira, Sorensen; Hand, foot & ankle → Cho, Whitfield.

### Patient stories (no outcome guarantees)
1. **Maya, 34, trail runner — knee.** Meniscus tear; sports injury assessment, eight weeks of physio with Sina, back to short trail runs at week ten.
2. **Daniel, 58, carpenter — shoulder.** Rotator cuff repair with Dr. Brennan, post-op programme with Mikkel, back at the bench part-time after four months.
3. **Rosa, 71 — hip.** Hip replacement with Dr. Raman, walking her dog round the block at six weeks.
4. (inner page only) **Kenji, 19, basketball — ankle.** Repeated sprains; balance programme with Dr. Whitfield and Sina.
Every story carries: "Individual experience. Recovery differs from person to person; your clinician will talk through what to expect for you."

### Booking flow (this week)
Request online or call by **Wednesday 17:00** → we reply **within one business day, by 18:00** with a time → first visit **the same week** (Mon–Sat). Referral optional; bring any imaging.

---

## 6. Photos (16, Grok, one STYLE string)

STYLE: `bright high-key documentary photograph, soft natural daylight, white and pale grey-blue modern clinic interior, clinicians in navy or grey-blue scrubs, calm and unposed, shallow depth of field, international setting, diverse people, no text, no logos, no brands, no signage, no visible screens with text, no blood, no surgery, 35mm lens, clean airy colour grade`

| ID | Subject / composition | Where | Stage 1 |
|---|---|---|---|
| P1 | surgeon's hands examining a seated patient's bent knee, cropped tall, window light | home hero (bleed left) | ✔ |
| P2 | portrait of a woman orthopedic surgeon (Black, 40s) in grey-blue scrubs standing in a bright corridor, three-quarter, looking slightly off camera, tall | home hero centre | ✔ |
| P3 | physiotherapist guiding a runner doing a single-leg squat on a mat, tall | home hero (bleed right) | ✔ |
| P4 | wide rehab floor with treatment plinths, parallel bars and windows, nobody close-up | home 2 | ✔ |
| P5 | physio checking a knee brace fit on a young man sitting on a plinth | home 3 | ✔ |
| P6 | sports physician testing an athlete's ankle on a plinth, sports clothes | home 4 | ✔ |
| P7 | surgeon pointing at a blank backlit x-ray viewer showing a knee x-ray silhouette (no text) with a patient | home 4 | ✔ |
| P8 | older woman doing a resistance-band shoulder exercise guided by a physio | home 4 | ✔ |
| P9 | portrait of a South Asian woman surgeon (Dr. Priya Raman) in her 50s seated at a desk with a hip/knee model, tall | home 5 | ✔ |
| P10 | bright reception desk with a receptionist and a patient on crutches arriving, no signage | home 6 | ✔ |
| P11 | clinician doing a shoulder ultrasound, probe on shoulder, screen not legible | home 7 | ✔ |
| P12 | woman runner on a forest trail in morning light, mid-stride, seen from the side | home 8 | ✔ |
| P13 | close-up of hands taping an ankle | home 9 | ✔ |
| P14 | man in his 50s doing a step-up on a low box in the rehab gym | home 9 | ✔ |
| P15 | foam roller and resistance bands neatly on a wooden bench, still life | home 9 | ✔ |
| P16 | modern low clinic building exterior with large windows and street trees, no signage | home 10 | ✔ |
| (stage 2) P17 | spine consultation, surgeon showing a spine model | Conditions | |
| (stage 2) P18 | teenager basketball player balance work on a wobble board | Sports Injury / Stories | |
P2 is the hero surgeon (Dr. Amara Okonjo); P9 is a different person (Dr. Priya Raman).
Inspect every image: no text, logos, broken faces/hands, wrong anatomy; ≤300 KB, ≤2000 px. Same photo never twice on one page.

---

## 7. Home acceptance checklist (self-review)
1. First screen 1440×900: three tall rounded (24 px) photos, P1 bleeds off the left edge and P3 off the right; text column between P2 and P3; H1 ≤ 3.25rem, left-aligned; no table/form/search.
2. Ribbon: ≥ 44 px round-capped `#8DB3CC` stroke visibly crossing P3's lower-left corner, over a pale disc and a dark `#3E5566` arc. Reprised in sections 6 and 10.
3. Notch cards: section 4 shows three 3:4 cards with a ground-coloured notch bottom-right holding a dark circle arrow; section 9 repeats it.
4. Every section head uses the big light label (≥ 4.25rem at 1440) + orange dot + caption; heading theme preset max = 4.5rem.
5. Joint finder works without JS (radio tabs), Knee default; pairs match section 5 table.
6. Directory teaser lists all 8 clinicians with roles, joint chips and days exactly as section 5.
7. Hours grid and flow match: Mon–Fri 7:30–19:00, Sat 8:00–13:00; Wed 17:00 / one business day / same week.
8. Fees card: 7 rows exactly as section 5.
9. ≥ 8 (target 16) distinct photos, none repeated; no text/logos in photos; zero cut-out objects.
10. Saturated area of the first screen ≤ 12% (`check-first-screen.py`), page ground is cool `#F7F9FA` not cream.
11. ≥ 450 English words, ≥ 3 narrative paragraphs; no outcome guarantees, awards, real insurers or real brands; stories carry the disclaimer.
12. Compare the full page against Taiyo, Hada, Michi full-desktop.png: no split hero, no full-bleed dimmed band, no numbered rows, no alternating chapter bands.
13. Single top menu; mobile 390 px: strip reflows as specified, no horizontal scroll (bleed clipped by `overflow-x: clip` on the hero).
