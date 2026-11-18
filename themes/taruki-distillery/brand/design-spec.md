# Taruki Distillery: design spec (stage 1, opus)

Row b35-3 · archetype sticky-media · hero photo-left-text-right · nav centred · first_screen timeline-line · page_structure process-timeline · font_direction **serif** · IMAGERY **photo** (film grain).
Reference: https://niseko-distillery.com/ja/ (S5-Style, food and drink / spirits). Secondary: none. Tokens: brand/reference-tokens.md (all numbers below cite a token letter (a)–(g)). Screenshots: brand/ref/niseko-first.png, scroll-niseko-900/1800/2700/3600/4800.png.
We borrow structure, techniques, colour relationships and the hero concept. We never copy Niseko's photographs, copy, logo, award badges or full page layout.

## 1. Fixed facts (identical on home, inner pages and all five languages)
- Name: Taruki Distillery. Founded 2016. Address: 14 Quarry Lane, Larchmere (fictional, international neutral; harbour town with citrus groves on the hill). Email hello@taruki-distillery.example. Phone +00 1234 5678 (placeholder format).
- Hours: tasting room Wed–Sun 11:00–18:00 (Mon–Tue closed, still running). Tours Wed–Sun at 11:30, 14:00, 16:00; 60 minutes; max 12 guests; age 18+.
- Six batch stages (the timeline, everywhere in this order): 01 Botanicals · 02 Steep · 03 Still · 04 Cut · 05 Rest · 06 Bottle. One batch = 9 days, 420 bottles, 300-litre copper pot still named "Ottilie".
- Price list (6 items, used on home ledger, /tours/ and /shop/):
  | Item | Price |
  |---|---|
  | Still-Room Tour + three-gin tasting (60 min) | €32 |
  | Tour + Cut Tasting at the spout, with G&T (90 min) | €48 |
  | Botanical Blending Workshop, take home 50 cl (3 h) | €115 |
  | Private group tour, up to 10 guests | €390 |
  | Larchmere Citrus Peel Gin 70 cl, 43% | €44 |
  | Navy Cut Gin 50 cl, 57% | €49 |
- Named people (7): Mira Okafor (founder and head distiller), Tomasz Wren (still operator), Inès Dubreuil (botanical forager), Kenji Halvorsen (tasting room lead), Ana Lucía Ferro (tour guide), Ruth Abernathy (bottling and labels), Samir Haddad (citrus grower, Hillside Grove partner).
- Stories (3): "The first cut that went down the drain" (2016), "Peel from the Hillside Grove" (2019), "Why Ottilie runs slowly" (2023). One demo post: "Inside batch 112: a week at the still".
- Booking: one way only — /book/ page (form slot + mailto fallback). No third-party booking widget.

## 2. Signature techniques (borrowed, never softened)
| # | Source (Niseko, https://niseko-distillery.com/ja/) | What the reference does | Ours, home block | Shape / ratio / position / contrast | Not to be diluted |
|---|---|---|---|---|---|
| S1 | First screen stacked bands (token a, niseko-first.png) | 90px burnt-orange notice strip #A0522A, 63px caramel strip #C88C5A, then photo, then a 170px charcoal nav row #3C3939 with caps nav and a 4px grey underline under the current item | Block H0+H1: copper "Next tour" strip (48px, #A0522A, one line of #F3EDE6 text, centred) + caramel "Today's batch" strip (40px, #C88C5A, text #3C3939, right-aligned language links) → centred nav row on #3C3939 (96px tall) → hero | Strips are full width, flat, no radius, no shadow. Order strictly copper above caramel above charcoal | Both strips must be visibly saturated colours (not tints); underline 4px #9A9696 width = word width |
| S2 | Wide inset slider on charcoal (scroll-niseko-900/1800) | Two centred light lines, then a photo 1250px wide (87% of 1440) on #3C3939, 6-dot pager under it, then a 1110px paragraph at line-height 1.8 | Block H4 "The still room": two centred lines (DM Serif 2.25rem) → inset photo 87vw max 1250px, 2.4:1, radius 0 → row of 6 dots (10px, #6E6A6A, current #A0522A) labelled with the six stage names in caps → paragraph 1110px | Ground stays charcoal; photo edges straight; 95px side margins at 1440 | Must be 87% width (not full bleed, not card-narrow); dots exactly six |
| S3 | Frosted photo fading in from the right (scroll-niseko-3600) | White ground; pale desaturated tree photo masked by a left-to-right gradient covers right 70%; packshot left 40%; text right with line-height 2; caps orange "VIEW MORE" | Block H5 "What goes in the bottle": ground #EEF1EE; botanicals-in-trays photo (img-07) at 35% opacity + grayscale(.6) under `linear-gradient(90deg,#EEF1EE 0%, #EEF1EE 25%, transparent 70%)`, right 70% of block; bottle photo (img-06) left 40% 1:1; text right; caps link #A0522A tracked 0.12em | Mask direction left→right always; text on the frosted part must hit 4.5:1 (#3C3939 on it) | The ghost photo must be visibly there (opacity ≥30%), not removed for "clean" |
| S4 support | 20px charcoal rule between full-bleed photo bands (scroll-niseko-2700/4800) | Every full-bleed photo band ends on a 20px #3C3939 bar | `border-bottom:20px solid #3C3939` on every full-bleed photo band (H2 parallax band, H7 tour band) | 20px exactly | — |

### Continuation on inner pages (each ≥4)
- S1 strips + charcoal nav: global header part on every page (all 9+).
- S2 inset 87% photo + six dots: /process/ (top of page, dots = jump links to the 6 chapters), /about/ (founding still photo, dots = years 2016…2023 limited to six), /tours/ (tour route photo, dots = six tour stops), /journal post single (featured image 87% inset on charcoal header).
- S3 frosted right fade: /shop/ (each of 2 bottles), /botanicals/ (header), /about/ (founder quote block), /book/ (beside the form, citrus photo ghosted).
- S4 20px rule: every full-bleed band site-wide (/tours/, /visit/, /process/ chapter break).

## 3. Key visual concept
**(1) Reference first screen.** Niseko stacks a burnt-orange award strip and a caramel language strip over an amber, out-of-focus bar scene: a bottle and a tall gin-and-tonic glass sit on a warm counter, light glowing behind; under it a charcoal band carries the centred caps nav. Story: this place, this craft, this gin (award-led). Signature motion: each line fades up as it enters; the next section is a cross-fading still-room slider with six dots.
**(2) Our translation (same image type: warm documentary photo, film grain; same composition logic: strips → warm copper photo → charcoal; same motion concept: lines fade up + a six-step progression).** A craft gin distillery: film-grain photograph of head distiller Mira Okafor tasting a cut from the copper still's spout in a small glass, amber light, trays of drying citrus peel and juniper out of focus behind her. Story: "From botanicals to bottle — then come and taste it." The six-dot pager becomes a horizontal batch timeline line along the foot of the first screen (Botanicals → Bottle), the copper dot marking today's stage. Award content is dropped (we may not claim awards); the strip instead announces the next tour — same shape, same colour, honest content.
**(3) KV checklist (all visible in the 1440×900 and 390 first screens).**
| # | Reference element | Our version | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Burnt-orange + caramel stacked strips | copper "Next tour: today 14:00 · 4 places left →" strip + caramel "Batch 112 · day 4 of 9 · Cut" strip with EN/中文/日本語/FR/DE links | top, full width, 48px + 40px | none | — |
| 2 | Amber blurred bar photo | distiller tasting the cut at the spout, botanical trays behind, film grain | hero left 56% (desktop), top 56vw (mobile) | sp-parallax, --sp-par 8% (mobile 6%) | img-01 |
| 3 | Charcoal nav row, caps, underline current | one centred menu on #3C3939, Work Sans caps 0.95rem tracked 0.08em, 4px #9A9696 underline | under strips | none | — |
| 4 | Light lines + orange caps link | H1 DM Serif Display 4.5rem #F3EDE6 "Steamed peel, slow copper, a glass at the spout." + 2-line lede + caps link "Book a tour" #E08A5A | hero right 44% on #3C3939 | lines in place (no reveal on hero); link underline grows on hover 0.3s | — |
| 5 | 6-dot slider pager | timeline line 1px #9A9696 with 6 dots (10px) + caps labels; dot 04 Cut copper #A0522A 14px | foot of hero, full container width | static (hero carries no reveal); current dot marks today's stage, set in markup | — |
| 6 | Bottle + tonic glass packshot | small inset 1:1 photo of our bottle beside a G&T on the bar, 160px, at the end of the hero lede | hero right column, under the link | none | img-02 |

## 4. Home blocks (order fixed)
| # | Block | Purpose | Layout / images | Copy |
|---|---|---|---|---|
| H0 | Strips (part of header) | next tour + batch status | see KV 1 | 2 lines |
| H1 | Hero split | KV | img-01 left 56% full hero height (min 640px desktop) flush to viewport edge, text right on #3C3939; img-02 inset; timeline line along the foot | H1 + 40-word lede |
| H2 | Parallax band "Larchmere, on the hill above the harbour" | place | full-bleed img-03 (citrus grove at dawn above the distillery roof), 2.4:1, 20px charcoal rule under; two light lines centred over a #3C3939 at 45% veil band | 2 lines |
| H3 | Sticky process (archetype sticky-media) | the six stages | left 45%: sticky photo (position:sticky top 120px) swapping is NOT required — a single tall 4:5 img-04 (Ottilie the still, steam); right 55%: six chapter rows 01–06, each: caps number #A0522A, DM Serif 1.75rem title, 45–55 words, 1px #C9CFC9 rule | ~300 words (narrative paragraphs ≥3 here) |
| H4 | Still-room inset (S2) | craft | charcoal; img-05 at 87%; 6 dots + labels; 1110px paragraph | 2 lines + 60 words |
| H5 | What goes in the bottle (S3) | product | img-06 bottle left, img-07 ghost right; text right; caps link to /shop/ | 70 words |
| H6 | Ledger "Tours, tastings and bottles" | price | full container table (6 rows from §1), caps label left, price right nowrap, 1px rules; ground #EEF1EE | 6 rows + note "Under-18s welcome in the shop only." |
| H7 | Tour band (reference tour block, scroll-niseko-4800) | single booking way | full-bleed img-08 (guests at the still with guide) with centred translucent panel rgba(60,57,57,.82) 960px wide; DM Serif 2.5rem "Reservation needed" style heading "Every visit is booked"; 3 lines; solid #A0522A button "Book a visit" → /book/; 20px rule | 45 words |
| H8 | People row | 4 of the 7 people | 4 portraits 3:4 (img-09, img-10, img-11, img-12) in a single row, name + role caps; link to /people/ | 4×12 words |
| H9 | Journal | 3 latest posts | text list on #3C3939 textured (no image) with date, title, caps link | — |
| H10 | Newsletter "Batch letter" | subscribe | #EEF1EE; left 2 lines; right `shippress_form_slot` kind newsletter | 25 words |
Home photo positions: img-01, 02, 03, 04, 05, 06, 07, 08, 09, 10, 11, 12 = 12 (≥8). English words ≥ 600 total.

### Not like recent themes
| Theme | Their order | Difference |
|---|---|---|
| Moyooshi | transparent header over film hero → problem → method → works → journal → brief | ours has opaque stacked strips, split hero, sticky process |
| Sanroku | flush film still, vertical headline → ruled rows → story → races → kit → fee ledger → CTA | no vertical type; ledger follows product, not steps grid |
| Tabidachi | framed photo + rail → gateway cards → … → price table → black CTA | no cards row, no framed window |
| Ashiato | rounded inset window → quick answers → … → FAQ → reviews → book | no rounded window, no FAQ on home, charcoal inset slider instead |

## 5. Inner pages (≥8) — all use header strips + charcoal nav
1. /process/ — six chapters, each an S2 87% inset photo on charcoal + text; dots jump-link; numbers match §1 (9 days, 420 bottles).
2. /botanicals/ — 9 botanicals (juniper, Larchmere lemon peel, bitter orange, coriander, angelica, orris, bay, pink pepper, sea fennel) as ruled list with source; S3 header.
3. /tours/ — 4 experiences from §1 with times, duration, capacity; S2 route photo with six dots = six stops; ledger.
4. /shop/ — 2 bottles (S3 each) + gift note, prices §1; WooCommerce compatible but not required.
5. /book/ — the only booking route: steps (choose tour → send request → confirmation within 1 working day), form slot (kind contact) + mailto fallback.
6. /about/ — story 2016→now, 3 stories, S2 dots = six years, S3 founder quote.
7. /people/ — 7 people, 3:4 portraits (reuse portraits only on this page and home, never twice on one page).
8. /visit/ — address, hours, getting there, accessibility; full-bleed img-14 with 20px rule.
9. /journal/ (posts page, empty content) + single + category + tag.
10. /newsletter/ — standalone subscribe page.
11. /contact/ — form slot + mailto fallback, address, hours.
12. /faq/ — 10 questions (age, driving, dogs, allergies, cancellations 48h).

## 6. Colour (from token a; ±0 change except text ground)
| Role | Hex | Source | Home share |
|---|---|---|---|
| Charcoal ground / nav / text on light | #3C3939 | Niseko ground | ~30% |
| Copper strip, button, current dot, caps links on light | #A0522A | Niseko notice strip | ~5% |
| Caramel strip | #C88C5A | Niseko language strip | ~4% |
| Link on dark | #E08A5A | Niseko orange link (#E0703A, lightened +5% for AA on charcoal) | <1% |
| Patina accent (row hex) — rules on light, hover, focus ring | #47885E | design row | ~2% |
| Pale ground | #EEF1EE | replaces reference white (cool patina-tinted, avoids beige) | ~25% |
| Light text | #F3EDE6 | near Niseko #EBEBEB, warmed | — |
| Mid grey (underline, dots, rules on dark) | #9A9696 | Niseko underline grey | — |
| Rule on light | #C9CFC9 | derived | — |
First-screen saturated share ≤15% (strips ~9% + accents); photo is film-graded amber but desaturated (saturation ≤ 45%). Never exceed 30%.

## 7. Type (font_direction serif)
- Headings: "DM Serif Display", then zh-TW "Noto Serif TC", ja "Noto Serif JP", serif. Body: "Work Sans", system-ui, sans-serif; zh-TW body uses system Chinese stack (PingFang TC, Microsoft JhengHei) — not Noto Serif TC, not JP fonts (repo gate). ja body: Hiragino Sans, Yu Gothic.
- Load via theme.json fontFamilies + fontFace (woff2 in assets/fonts: DM Serif Display 400/400i, Work Sans 300/400/500, Noto Serif TC 600 subset, Noto Serif JP 600 subset), same in editor and front; copy shared/inc/editor-lang.php and require it.
- Sizes (theme.json): xxl 4.5rem (hero H1, ≥4.25rem; clamp(2.6rem,6vw,4.5rem)), xl 3rem, l 2.25rem, m 1.5rem, base 1.125rem (Niseko 20.8px → 18px for long reading), s 0.95rem nav caps, xs 0.78rem strip/caps labels.
- Body line-height 1.8 (token b, 37px/20.8px); letter-spacing body 0.02em, caps 0.08–0.12em (token b 0.075em). Headings weight 400, line-height 1.1. CJK headings 0.75×, body line-height 1.85; fr/de hyphens:auto.

## 8. Spacing, shape, decoration (tokens c, d, f)
Container 1250px, side padding 95px at 1440 (min 20px mobile). Section padding 96px top/bottom (token c 80–110). Radius 0 everywhere (photos, buttons, inputs). Buttons: solid rectangle min 232×44, Work Sans caps 0.85rem tracked 0.12em, #A0522A bg / #F3EDE6 text, hover #3C3939. No shadows. Fixed "Page top" 64×64 square #EEF1EE with circled up arrow, bottom right (labels in block markup, not CSS content). 1px #9A9696 highlight line where hero meets the timeline (token f).

## 9. Scroll effects
| Effect | Source (Niseko) trigger / time / ease | Our class | Where |
|---|---|---|---|
| Fade up | AOS fadeIn_up, IO once, ~0.8s ease, ~20px | `sp-reveal sp-reveal--up` (--sp-dist 20px, --sp-dur .8s) | H2 lines, H3 rows (parent `sp-stagger`), H4 lines + paragraph, H5 text, H8 people (parent `sp-stagger`), inner page headings |
| Cross-fade slider → zoom-in on still image | flexslider fade | `sp-reveal sp-reveal--zoom` | H4 inset photo wrapper; /process/ chapter photos |
| Parallax | Niseko's slow blurred amber backdrop | `sp-parallax` | H1 hero photo and H2 band |
Not on hero text, ledger, forms, legal text.

### Parallax (required)
- H1: hero left Group `sp-parallax`, direct `figure>img` img-01, foreground = none inside the moving layer (text column is a sibling); `--sp-par: 8%` desktop, `6%` ≤781px.
- H2: Cover `sp-parallax` with img-03 background, foreground two lines on veil; `--sp-par: 10%`, mobile 6%.
- Reference correspondence: Niseko's hero is a static blurred amber backdrop behind the bottle; we turn that depth into a slow drift. Mobile keeps it. Reduced-motion / ?sp-static / editor = still.

## 10. Responsive
- 390px first screen: strips wrap to max 2 lines (font 0.78rem), nav collapses to one "Menu" button, image stacks above text (56vw tall), H1 clamp to 2.6rem, timeline becomes a horizontal line with 6 dots and only the current label shown — no vertical text, no absolutely positioned labels over text.
- Ledger ≥782px: full container width, price column `white-space:nowrap; text-align:right`, never clipped; <782px rows stack (label above price). Every table stacks on mobile.
- H3 sticky only ≥1024px; mobile normal flow.

## 11. Images (14, one STYLE)
STYLE: "Documentary film photograph, 35mm Portra-like film grain, warm amber and copper tones with muted patina greens, soft window light, shallow depth of field, natural unposed moments, contemporary international craft distillery, diverse adults, no text, no logos, no labels, no brands."
| id | Subject / composition | Used on | Home |
|---|---|---|---|
| img-01 | Woman head distiller tasting from a small glass at the copper still's spout, trays of drying citrus peel behind, 4:5 | home H1 | ✔ |
| img-02 | Unlabelled clear gin bottle beside a gin and tonic on a dark wood bar, 1:1 | home H1 inset, /shop/ | ✔ |
| img-03 | Citrus grove at dawn on a hillside above a timber-roof distillery and harbour, 2.4:1 | home H2, /visit/ header | ✔ |
| img-04 | Copper pot still with steam, tall 4:5 | home H3, /process/ ch.3 | ✔ |
| img-05 | Still room wide: copper still, steel tanks, timber trusses, 2.4:1 | home H4, /about/ S2 | ✔ |
| img-06 | Bottle with stopper standing on pale stone, white background, 1:1 | home H5, /shop/ | ✔ |
| img-07 | Wooden trays of juniper, citrus peel and coriander drying, top-down, pale | home H5 ghost, /botanicals/ ghost | ✔ |
| img-08 | Guide showing a small group of guests the still, 2.4:1 | home H7, /tours/ | ✔ |
| img-09 | Portrait, head distiller at work, 3:4 | home H8, /people/ | ✔ |
| img-10 | Portrait, still operator, 3:4 | home H8, /people/ | ✔ |
| img-11 | Portrait, botanical forager with basket, 3:4 | home H8, /people/ | ✔ |
| img-12 | Portrait, tasting room lead behind the bar, 3:4 | home H8, /people/ | ✔ |
| img-13 | Hands filling and corking bottles on a bottling bench, 3:2 | /process/ ch.6, /about/ | |
| img-14 | Tasting room interior with long bar, afternoon light, 3:2 | /visit/, /book/ ghost, /contact/ | |
No image twice on one page; 0 cut-outs; ≤300 KB, ≤2000px webp.

## 12. Forms (form contract v1)
- /book/ and /contact/: `shippress_form_slot` kind contact, placed below the steps / address, its own block; fallback = existing mailto button "Email us to book" → mailto:hello@taruki-distillery.example (subject from i18n). Fields when CF7/WPForms present: name, email, tour (select from §1 experiences), date, guests (1–12), message.
- /newsletter/ (standalone page, not alias of posts) and home H10 + footer: kind newsletter, required email + submit "Subscribe"; MailPoet / MC4WP first, CF7/WPForms only via a dedicated id; no plugin → native mailto POST with notice "Opens your email app. Send the request to subscribe; you are not subscribed yet."
- Tokens → `--sp-form-*`: light ground bg #FFFFFF on #EEF1EE, border 1px #9A9696, text #3C3939, radius 0, focus 2px #47885E outline offset 2px, error #A0522A text + border, success #47885E; dark ground (footer #3C3939): input bg #4A4646, text #F3EDE6, border #9A9696, focus #8CC5A0.
- Semantic keys forms_email, forms_subscribe, forms_mail_notice, forms_mail_subject + contact labels in all five languages. No reveal on forms; no form in the first screen.

## 13. Home acceptance
- [ ] Copper + caramel strips stacked above charcoal centred nav with 4px underline on current.
- [ ] Hero photo left 56%, text right, H1 4.5rem DM Serif, timeline with 6 dots along foot, copper current dot.
- [ ] Hero photo + H2 band parallax ≥6px (check-parallax.mjs), none with reduced motion.
- [ ] H4 inset photo exactly 87% on charcoal with six dots; H5 frosted ghost photo fading from the right visible.
- [ ] Ledger 6 rows, prices identical to §1, nowrap right at 800/1280, stacked at 390.
- [ ] 12 home images, no repeats; ≥250 English words, ≥3 narrative paragraphs.
- [ ] Newsletter slot present at H10; no form in first screen; first-screen saturated ≤15%.
- [ ] 390px: no vertical or overlapping labels; no horizontal scroll.

## 14. Similarity table (target 80%)
| Dimension | Reference (token) | Ours |
|---|---|---|
| Ground / strips | #3C3939 / #A0522A / #C88C5A (a) | same hexes |
| Light text | #EBEBEB (a) | #F3EDE6 |
| Accent link | #E0703A (a) | #E08A5A on dark, #A0522A on light |
| Body size / LH / tracking | 20.8px / 1.8 / 0.075em (b) | 18px / 1.8 / 0.02em body, 0.08em caps |
| Nav | caps 20px, 0.08em, 4px grey underline (b) | caps 0.95rem, 0.08em, 4px #9A9696 |
| Container / margins | 1250px / 95px (c) | 1250px / 95px |
| Section padding | 80–110px (c) | 96px |
| Radius / shadow | 0 / none (d) | 0 / none |
| Inset photo width | 87% (e) | 87%, max 1250px |
| Photo ratios | 3:2, 2.4:1, 1:1 (e) | 2.4:1, 3:2, 1:1, 4:5, 3:4 |
| Band divider | 20px charcoal (d) | 20px #3C3939 |
| Pager | 6 dots 10px (f) | 6 dots 10px + stage labels |
| Motion | fadeIn_up 0.6–1s ease once (g) | sp-reveal--up 0.8s, 20px |
| Depth | static blurred backdrop (g) | sp-parallax 8–10% |
