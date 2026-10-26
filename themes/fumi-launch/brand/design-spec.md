# Fumi Press Launch: design spec (stage 1, binding for implementation)

Slug `fumi-launch`, single-book launch landing page for an essayist (row b11-9, type landing, archetype editorial-magazine, hero framed-window, nav split, image real-photography with film grain, font_direction **serif**). Main reference: **yoichi-shumputei.com** (S5-Style). Measurements: `reference-tokens.md`. Borrow structure, technique, colour relationships, motion and the key-visual concept. Never copy its photos, copy, logo, brush lettering or page layout one-to-one.

Home = one long conversion page with an anchor menu and **one repeated CTA ("Pre-order")**. Inner pages as listed in section 6.

---

## 0. Fixed facts (home, inner pages and all five languages use exactly these)

| Item | Value |
|---|---|
| Publisher | Fumi Press, independent essay publisher, founded **2014**, studio in **Da'an District, Taipei** (no street number) |
| Book | ***Small Hours*: Essays from a Corner Table**, by **Clara Hsu**. 21 essays, 248 pages, 14 × 21 cm. Published in English and Traditional Chinese on the same day |
| Publication date | **18 March 2027**. Pre-orders close **10 March 2027**; pre-ordered copies ship **11 March 2027** |
| Signed first printing | **1,500** numbered hardcover copies |
| Currency | **USD** in every language (no converted prices) |
| Contact | hello@fumipress.example, Mon–Fri **10:00–18:00 (GMT+8)**, replies within 2 working days |

**Editions and prices (7 rows, home table = Editions page table):**
| # | Edition | Price |
|---|---|---|
| 1 | Hardcover, signed and numbered first printing (English) | USD 34 |
| 2 | Paperback (English) | USD 22 |
| 3 | Paperback, Traditional Chinese edition | USD 22 |
| 4 | Ebook (EPUB, both languages) | USD 12 |
| 5 | Audiobook read by the author (6 h 40 min) | USD 18 |
| 6 | Launch bundle: signed hardcover + canvas tote + one event seat | USD 58 |
| 7 | Book-club pack: 6 paperbacks + printed reading guide | USD 110 |

**Launch events (4, free, 60 seats each, booking required, all at 19:30 local time):**
| Date | City | Venue (fictional) | Format |
|---|---|---|---|
| Sat 20 March 2027 | Taipei | The Corner Room, Da'an | Launch reading + signing with Mina Cho |
| Sat 27 March 2027 | Tokyo | Annex Reading Room, Kiyosumi | Conversation with Tomas Reyes |
| Sat 3 April 2027 | Paris | Librairie du Quai Bas | Reading + translator Q&A |
| Sat 10 April 2027 | Berlin | Lesesaal Nord | Reading + book-club evening with Hanna Weber |

**Named people (8):** Clara Hsu (author, born 1986 in Kaohsiung, lives in Taipei); Tomas Reyes (editor, Fumi Press); Noor Haddad (cover and book design); Jun Park (photographer of the book's images); Elena Brandt (rights and publicity, Berlin); Mina Cho (bookseller, Taipei launch host); Rafael Ortiz (teacher, book-club host); Hanna Weber (reader, Berlin book club).

**Reader stories (3, early readers, no media names):** Mina Cho (bookseller), Rafael Ortiz (teacher and club host), Hanna Weber (reader). Each one 2–3 sentences, no "best book ever", no ratings.

**Pre-order process (4 steps, written as one numbered sentence list, never a step grid):** 1 choose an edition → 2 pay at order (refundable until 10 March 2027) → 3 signed copies ship 11 March 2027 → 4 bundle holders receive their event-seat email two weeks before their city's date.

**History (author note, 4 years):** 2014 first essay in a small-press zine · 2018 first collection *Window Seat* with Fumi Press · 2022 began writing at the same café table every morning · 2027 *Small Hours*.

No awards, no bestseller claims, no real media, real bookshops, real people or real brands.

---

## 1. Signature techniques (three, obvious at a glance)

### T1. Giant title crossing a framed photograph + the hot roman name across it (yoichi hero)
- **Reference** (https://yoichi-shumputei.com/, first screen): a seated portrait (≈33% width, x≈520–1000 at 1440) stands centred on a flat deep field; a ≈300px brush name in ivory runs across ≈90% of the width at y≈290–460, crossing the figure's chest; an orange wide roman name (~60px) crosses the middle of the big name; the orange occupation word (~90px) sits top-left above it.
- **Fumi:** framed-window photo H1 (open book on a café table) centred, the book title **"Small Hours"** in Gloock ivory crosses the lower-middle of the photo, **"Clara Hsu"** in Public Sans 700 #F26B3A crosses the title, **"Essays"** in Gloock #F26B3A sits above the title on the left. Geometry in section 3.
- **Not to dilute:** title ≥ 9.5rem on desktop 1440 and one line, truly in front of the photo (overlap ≥ 40% of the title height); the persimmon name must overlap the ivory letters; the photo stays ≥ 30% of the viewport width.

### T2. Left rail + 1px hairline frame column with corner ticks (yoichi layout)
- **Reference:** 93px left rail with a 1px ivory line on its right edge, vertical logo top (x 28–62), hamburger centred at y≈458; every section sits inside 1px vertical frame lines at x≈170 and x≈1369 (≈1200px column), statement section in an inner 1000px frame; radius 0; tiny ≈1px dot ticks at frame corners.
- **Fumi:** `.fl-rail` 92px wide fixed left (≥1024px), background = field #3E453A, `border-right:1px solid rgba(250,248,234,.6)`. Top: vertical wordmark "Fumi Press" (Gloock 1.375rem, `writing-mode: vertical-rl`, ivory, x centred, top 28px). Middle (top 50%): navigation block with `overlayMenu:"always"`, icon = three 1px lines 30px wide. Bottom: language switcher (Public Sans .6875rem, ls .1em). Every section's content sits in `.fl-frame` (max-width 1200px, `border-left/right:1px solid rgba(250,248,234,.6)`, padding-inline 48px); statement and excerpt use `.fl-frame--narrow` (1000px). At each section's bottom, the two frame lines end in a 3×3px ivory square tick (`::before/::after`, bottom −2px). Radius 0 everywhere except the stamp.
- **Not to dilute:** the rail and both frame lines must be visible at 1440 (opacity ≥ .6), not removed in favour of a normal top bar; no radius on photos or buttons.

### T3. Rotating-text stamp as the single CTA (yoichi "booking" stamp)
- **Reference:** a 215px round stamp bottom-right of the first screen (x 1195–1410, y 645–860): text on a circle in orange, a heavy centre word, an orange arrow; rotates slowly.
- **Fumi:** `.fl-stamp` 184px circle (SVG `textPath`, no image): ring text "PRE-ORDER · SIGNED FIRST PRINTING · 18 MARCH 2027 ·" Public Sans 600 11px ls .2em #F26B3A; centre "Pre-order" Gloock 1.375rem ivory on two lines ("Pre-/order" not allowed, use "Pre-order" one line + "↗" below) with arrow #F26B3A 1.5rem. Only the ring rotates: `animation: fl-spin 28s linear infinite`; paused on hover; off under `prefers-reduced-motion` and `?sp-static`. Link → `/editions/#order`. Hero position: absolute right 56px, bottom 40px (desktop ≥1024 only).
- **Repeats** (same component, same text): end of Editions section (right of the table footer), Waitlist band, and every inner page head (bottom-right of the page head, in flow on mobile). It is the only CTA style; the normal buttons are outline 1px ivory, radius 0, "Pre-order" text only.
- **Not to dilute:** stays round, ≥160px desktop / ≥112px mobile, persimmon ring text, actually rotates.

### Supporting (from yoichi, not counted): black stage band (one cinematic photo, full bleed, #0E0D0B base) between field sections; light statement set at 70px with ls .06em.

### Continuation to inner pages (≥4 required; all listed pages comply)
| Page | T1 (page head) | T2 | T3 |
|---|---|---|---|
| The Book | Gloock 6rem "The Book" crossing the lower third of framed photo I9 (proof pages), persimmon "21 essays" across it | rail + frame | stamp bottom-right of head |
| Read an Excerpt | "Excerpt" crossing framed I4 | rail + narrow 1000 frame for the essay | stamp after the essay |
| The Author | "Clara Hsu" crossing framed I14 (desk at night), persimmon "Essayist" | rail + frame, history as hairline rows | stamp |
| Editions & Pre-order | "Editions" crossing framed I5, persimmon "From USD 12" | rail + frame, table inside frame | stamp next to table footer (`#order`) |
| Launch Events | "Readings" crossing framed I6, persimmon "4 cities" | rail + frame, dates as hairline rows | stamp |
| Book Clubs | "Read Together" crossing I12 | rail + frame | stamp |
| FAQ / Press & Contact / Newsletter | smaller (4.25rem) title crossing I15 / I10 / I11 | rail + frame | stamp |
| Privacy / Terms / Thanks | text-only head (no photo), frame + rail | rail + frame | no stamp on legal; Thanks shows stamp |

Inner page head geometry (desktop): field #3E453A, height 620px, photo window 3:4, width 30%, centred; title clamp(4.25rem, 8vw, 7.5rem) one line crossing at 60–75% of the photo height. Mobile: same as the mobile hero rule (in flow, no absolute).

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
yoichi-shumputei.com opens on a flat deep ultramarine field (#003F8B, 73%) with one seated performer, cut out and centred, kneeling on a cushion as if about to begin. His name in giant ivory brush lettering cuts across his chest; an orange roman name crosses the big letters; the orange occupation word sits above. A tiny caption sits bottom-left; a round rotating "booking" stamp bottom-right. Story: **one person, one name, one invitation ("book me")**. Signature motion: page-load transition, then the elements arrive with fade + scale .9→1; slow inertial scroll; the stamp turns.

### (2) Our translation (book launch)
Same composition with the book as the "seated figure": a **film-grain photograph of *Small Hours* open on a small café table in Taipei** (morning window light, a cup, the corner of a chair) inside a framed window, centred on a flat deep rikyu-green field. The book title "Small Hours" in giant ivory serif crosses the open pages; the author's name in persimmon crosses the title; "Essays" in persimmon above-left. Bottom-left a small caption ("Twenty-one essays written at the same corner table, 2022–2026. Published 18 March 2027."); bottom-right the rotating "Pre-order" stamp. Story: **one book, one name, one invitation ("pre-order / read the first pages")**. Same image type: photo. Same motion concept: load fade + scale .9→1 and a turning stamp; plus a slow parallax inside the window.

### (3) KV checklist (all six implemented and visible on the 1440×900 first screen)
| # | Reference element | Our counterpart | Position (1440×900) | Motion | Image |
|---|---|---|---|---|---|
| 1 | Flat deep field, full screen | #3E453A field, 1px ivory frame lines at x=170 and x=1370 | full first screen | static | — |
| 2 | Seated portrait centred, ≈33% width | Framed-window photo of the open book on a café table, 480×640 (3:4), 1px ivory inner frame 12px inset | x 520–1000, y 130–770 | `sp-parallax` on the window, `--sp-par: 6%`; load fade+scale | **I1** hero-book-cafe |
| 3 | Giant ivory name crossing the figure | "Small Hours", Gloock 400, 11.5rem (184px), #FAF8EA, one line, in front of the photo | x 170–1370 centred, cap band y 400–540 (crosses lower-middle of the photo) | load: opacity 0→1, scale .9→1, .8s, delay .15s | — |
| 4 | Orange roman name crossing the big name + orange occupation word above | "Clara Hsu" Public Sans 700 3.25rem ls .04em #F26B3A across the title's middle; "Essays" Gloock 3.5rem #F26B3A above-left | name centred at y≈470; "Essays" x 170, y 300–356 | load fade+scale, delay .3s | — |
| 5 | Rotating "booking" stamp bottom-right | `.fl-stamp` "Pre-order" 184px | right 56px, bottom 40px | ring rotates 28s linear; load delay .45s | — |
| 6 | Left rail with vertical logo + hairline, tiny caption bottom-left | 92px rail (vertical "Fumi Press", menu icon mid, languages bottom) + caption Public Sans .6875rem/1.5 ivory 3 lines max-width 280px | rail x 0–92; caption x 170, bottom 40px | rail static; caption fade | — |

Load animation: CSS only, `@keyframes fl-in {from{opacity:0;transform:scale(.9)}}`, `.8s cubic-bezier(.22,1,.36,1) both` (token g). Not `sp-reveal`. Disabled (final state) under `prefers-reduced-motion`, in the editor, and with `?sp-static`.

---

## 3. First-screen composition

- **Desktop 1440×900:** hero Group `alignfull`, min-height 100svh (max 960px), background #3E453A, `position:relative; overflow:clip`. Layers: frame lines (z1) → photo window (z2, absolute centred, `left: calc(50% - 240px + 46px)` so the photo centres on the content area right of the rail) → title + name + "Essays" (z3) → caption, stamp (z4). Title is **not** inside the parallax wrapper.
- **1024–1279:** title 9.5rem, photo 400×533, stamp 160px.
- **782–1023:** rail becomes a 64px top bar (wordmark horizontal left, menu right, 1px bottom hairline). Title 7rem, still one line; stamp 140px in flow under the caption, right-aligned.
- **Mobile 390:** top bar 56px. Order in normal flow, **no absolute positioning, no vertical text** in the first screen: "Essays" (Gloock 1.75rem persimmon) → "Clara Hsu" (Public Sans 700 1.125rem persimmon, ls .06em) → photo window full width minus 48px, 4:5 → title "Small / Hours" 4.25rem line-height .92, two lines, `margin-top:-0.55em` so it overlaps the photo bottom edge in flow (text over image, not over text) → caption → stamp 112px right-aligned. Parallax kept with `--sp-par: 4%`.
- Saturated share of first screen ≤ 15% (persimmon ≈ 2%, photo graded muted; target ≤ 8%).

---

## 4. Home sections (order, purpose, layout, photo, copy)

Anchor menu (overlay): Book · Excerpt · Author · Readings · Editions · FAQ · Waitlist. Each section has its `id`.

| # | Section (id) | Purpose | Layout | Photo | Copy |
|---|---|---|---|---|---|
| 1 | Hero | KV, invitation | section 3 | I1 | caption 30 words |
| 2 | Readings `#readings` (yoichi "info" list) | dates first, like the reference's dated info list | frame 1200; label "Readings" top-left on the frame; 4 hairline rows (date Gloock 1.75rem · city · venue · format · "Book a seat →"); right column 4/12 photo I6 3:2 | I6 | 4 rows + 1 line |
| 3 | Statement `#book` | why the book exists | narrow frame 1000, text only, Gloock 4.375rem lh 1.21 ls .06em ivory, 2–3 lines: "Twenty-one small hours, one table, the city going by." + a 60-word paragraph below in Public Sans | — | 70 words |
| 4 | Excerpt `#excerpt` | excerpt-led long read | **ivory paper section** (#FAF8EA, ink #1E211B), narrow frame lines in rgba(30,33,27,.25); left 7/12: label "From the first essay", 3 paragraphs Noto/Gloock-body serif feel (Public Sans 1.0625rem lh 2.0), first line set in Gloock 1.75rem; right 5/12: photo I4 4:5, top-aligned; link "Read the whole essay →" | I4 | 220 words |
| 5 | Author `#author` (yoichi profile/history two-column) | who wrote it | field; frame 1200; left 5/12 photo I2 4:5; right 7/12: label "Author", Gloock 2.5rem name, 90-word note, then 4 history rows (year Gloock 1.25rem · line) with 1px hairlines | I2 | 120 words |
| 6 | Stage band | cinematic pause (yoichi black band) | `alignfull` #0E0D0B, height 72vh (min 480), photo I3 full bleed, `sp-parallax` `--sp-par: 10%`; caption bottom-left in a static Group (not in the layer): Public Sans .75rem "The Corner Room, Da'an, 7:10 a.m." | I3 | 8 words |
| 7 | Readers | early readers (yoichi archive strips) | field; frame 1200; left 4/12 photo I7 3:4; right 8/12: 3 wide strips separated by 1px hairlines: quote Gloock 1.5rem lh 1.45 + name/role Public Sans .75rem uppercase | I7 | 3 × 40 words |
| 8 | Editions `#editions` | price + order | field; frame 1200; top row: label + Gloock 2.5rem "Seven ways to hold it" left, photo I5 16:9 right 6/12; then **full-width table** (7 rows, section 7 rules); under it the 4-step process sentence list and a small photo I13 3:2 left with the stamp right | I5, I13 | 80 words + table |
| 9 | Book clubs | secondary audience | ivory paper band, frame 1000; photo I12 3:2 left 6/12, text right: guide, 10 questions, pack USD 110, link to Book Clubs page | I12 | 70 words |
| 10 | FAQ `#faq` | objections | field; frame 1000; 6 `details` rows with 1px hairlines (Gloock 1.25rem question, Public Sans answer) | — | 6 Q&A |
| 11 | Waitlist `#waitlist` | repeated CTA | field #3E453A, frame 1200; left photo I11 4:5 (5/12); right: Gloock 3rem "Hear first, read first.", 40 words, link to Newsletter page + stamp | I11 | 50 words |
| 12 | Footer | info | #0E0D0B, frame lines continue; wordmark, contact, hours, page links, languages | — | — |

Home photos: **I1, I6, I4, I2, I3, I7, I5, I13, I12, I11 = 10 positions** (≥ 8). Home English copy ≥ 450 words, ≥ 3 narrative paragraphs (statement, excerpt, author note).

### Order vs recent themes (must not resemble)
| Theme | Home order | Fumi difference |
|---|---|---|
| Mado Air | dark top bar → hero product → Why → How it works band → dark macro band → specs → reviews → pre-order → FAQ | no top bar (rail), no feature/how-it-works blocks; dates come right after the hero, excerpt-led |
| Kazoe Books App | boxed H1 on split gradient+photo → numbered features → pricing → FAQ, fixed CTA pair | no boxes, no split hero, no numbered features; single rotating stamp CTA |
| Kaigi Centre | image stage + plum side panel → longform 720 column → rooms → rates → parallax band | no side panel; title crosses the photo; 1200/1000 hairline frames instead of a 720 column |
| Shirota Laundry | oval window over ghost wordmark on hairline grid → full-bleed hall → staggered cards | rectangular radius-0 window, title in front (not ghost behind), no grid weave, no cards |

---

## 5. Colour

From yoichi (relationships and roles). The field is changed from ultramarine to rikyu-nezumi green because (a) the row palette is 利休鼠 #6F7765, and (b) the reference's saturated share is 83% while our gate is ≤ 15%. Ivory, accent and band stay within ±5% lightness of the reference.

| Role | Hex | Source token | Share of page |
|---|---|---|---|
| Field (base) | `#3E453A` | ref field #003F8B 73% → 利休鼠 deep | ≈ 65% |
| Mid tone (hover, secondary rules, rail active) | `#6F7765` | row hex | ≈ 3% |
| Ivory (display, text on field, paper sections) | `#FAF8EA` | ref #FFFFED (L 96.5% → 94.9%) | ≈ 20% incl. paper sections |
| Accent persimmon | `#F26B3A` | ref #F26B3A (as is) | ≤ 2% (Essays, name, stamp ring, arrows) |
| Stage band / footer | `#0E0D0B` | ref #000 band (+5% warm) | ≈ 10% |
| Ink on ivory | `#1E211B` | derived from field | text only |
| Hairlines | `rgba(250,248,234,.6)` on field, `rgba(30,33,27,.25)` on ivory | ref 1px ivory | lines |

Contrast: ivory on field 9.6:1; persimmon on field 3.0:1 → **only ≥ 24px or ≥ 18.66px bold** (never body text). Links on field are ivory underlined. No cream/beige page ground.

---

## 6. Type (font_direction = serif)

- Latin display: **Gloock 400** (Google Fonts, OFL). Latin body/labels: **Public Sans 400/600/700**. CJK: **Noto Serif TC / Noto Serif JP 400/700** (明體) for both headings and body in zh-TW / ja; no Noto Sans anywhere.
- Stacks (theme.json fontFamilies, all loaded by `fontFace` from `assets/fonts/`, so the editor iframe and the front end match; zh-TW / ja subsets by the Hokuto / Hada method; `inc/editor-lang.php` copied if style.css uses `:lang(`):
  - `display`: `"Gloock", "Noto Serif TC", "Noto Serif JP", Georgia, serif`; `:lang(ja)` → `"Gloock", "Noto Serif JP", "Noto Serif TC", serif`
  - `body`: `"Public Sans", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif`; `:lang(ja)` swaps TC/JP order; `:lang(zh-TW|ja)` body line-height 1.85, CJK size ≈ 0.75× of en display sizes.
- Sizes (theme.json presets; max ≥ 4.25rem):

| Preset | Value | Use | Token |
|---|---|---|---|
| `display` | `clamp(4.25rem, 12.8vw, 11.5rem)` | hero title (desktop 1440 = 184px) | ref name ≈300px glyph height |
| `xx-large` | `clamp(3rem, 5.2vw, 4.375rem)` lh 1.21 ls .06em | statement | ref 70px / lh 84.7 / ls 4.2px |
| `x-large` | `clamp(2.25rem, 4vw, 3.5rem)` lh 1.1 | "Essays", page sub-heads | ref 90px label (scaled) |
| `large` | 2.5rem lh 1.15 | section headings | — |
| `medium` | 1.375rem lh 1.45 | quotes, FAQ questions | — |
| `body` | 1rem lh 2.0 ls .04em | body | ref 14px / lh 28 (2.0) / ls .06em |
| `small` | .75rem 700 uppercase ls .05em lh 1.5 | labels ("Readings", "Author") | ref 12px / 700 / ls .6px |
| `x-small` | .6875rem 500 lh 1.5 ls .05em | hero caption, credits | ref 9px (raised for legibility) |

Fr / de: `hyphens:auto`. CJK headings never use letter-spacing > .04em.

---

## 7. Responsive rules (hard)

- 390px: first screen per section 3; no vertical text, no absolutely positioned labels over text; rail → 56px top bar; no horizontal scroll.
- Price table (home and Editions page) at ≥ 782px: **full width of the 1200 frame**, columns `Edition | Format notes | Price`, price column `white-space:nowrap; text-align:right; width:9rem`, never clipped at 800 or 1280 (table `table-layout:auto`, no fixed min-width wider than the frame). Rows 1px hairlines, radius 0, row height 64px (ref archive strips 64px), price in Gloock 1.5rem ivory.
- < 782px every table becomes stacked rows (`display:block` rows; label on top, price right-aligned on its own line; `data-label` pseudo labels). Events list and history rows stack the same way.
- Frame lines are hidden < 782px (keep 24px gutters), rail-less top bar keeps the 1px hairline.

---

## 8. Images (15, one STYLE, photo)

**Imagery: photo** (per stage-a IMAGERY). STYLE (identical for every image):
`Film-grain 35mm colour photograph, Kodak Portra 400 look with fine visible grain, soft natural window light, high-key where possible, muted sage greens, warm off-whites and deep green-grey shadows, gentle contrast, shallow depth of field, quiet documentary mood, modern international city setting, diverse people when present, no text, no readable writing, no logos, no brand marks, no signage, no Japanese elements.`
Book pages and covers must be blank or show blurred unreadable lines. ≤ 2000px, ≤ 300 KB webp, no cut-outs.

| # | File | Subject / composition | Ratio | Used on |
|---|---|---|---|---|
| I1 | hero-book-cafe | open hardcover book on a small round marble café table, cup of black coffee, morning window light, top-down 3/4 angle, corner of a bentwood chair | 3:4 | **Home hero** |
| I2 | author-window | woman in her late 30s (East Asian), linen shirt, seated by a café window, looking out, holding a pencil, half-length | 4:5 | **Home author**; Author page (second position) |
| I3 | cafe-dawn-wide | wide empty café interior at dawn, corner table by the window, chairs up, low-key warm light, deep shadows | 21:9 | **Home stage band** |
| I4 | notebook-pen | hand writing in a lined notebook with a fountain pen beside a saucer, close crop | 4:5 | **Home excerpt**; Excerpt page head |
| I5 | editions-stack | hardcover and paperbacks (blank covers in sage, ivory) stacked on linen | 16:9 | **Home editions**; Editions page head |
| I6 | reading-room | small bookshop reading room with folding chairs facing a lectern, evening lamps | 3:2 | **Home readings**; Events page head |
| I7 | reader-tram | reader (man, 50s, Latin American) holding the open book on a tram seat, city blurred | 3:4 | **Home readers** |
| I8 | street-morning | tree-lined city street at early morning, café awning, bicycles, no signage | 16:9 | The Book page (wide figure) |
| I9 | proof-pages | printed proof pages with pencil marks (unreadable), paper clips, on a desk | 3:4 | The Book page head |
| I10 | press-sheets | printed sheets drying on racks in a small print shop | 3:2 | Press & Contact page head |
| I11 | envelope-postcard | ivory envelope, postcard and a sprig of leaves on a green-grey table | 4:5 | **Home waitlist**; Newsletter page head |
| I12 | book-club-table | six hands with cups and copies around a wooden table, diverse | 3:2 | **Home book clubs**; Book Clubs page head |
| I13 | tote-book | canvas tote bag (blank) with the hardcover peeking out, on a chair | 3:2 | **Home editions (process)** |
| I14 | desk-night | writing desk at night, lamp, stacked books, window with city lights | 3:4 | Author page head |
| I15 | rain-window | café window with rain drops, blurred street, cup on the sill | 3:4 | FAQ page head; Thanks page |

No image repeats within one page. 10 used on home.

---

## 9. Inner pages (12 reachable incl. home ≥ 9)

| Page (slug) | Key content |
|---|---|
| The Book (`/the-book/`) | T1 head (I9); what the book is (150 words); the 21 essay titles in three parts (7 each) as hairline rows; specs table (pages, size, languages, dates); I8 wide figure; stamp |
| Read an Excerpt (`/excerpt/`) | T1 head (I4); full first essay "The Corner Table" ≈ 600 words on ivory paper section, narrow frame; Gloock first line; link to Editions; stamp |
| The Author (`/author/`) | T1 head (I14); bio 200 words, I2, history 4 rows, "how I write" note, team credits (Tomas, Noor, Jun, Elena) as a hairline list (no portrait grid) |
| Editions & Pre-order (`/editions/`) | T1 head (I5); full 7-row price table (`#order`), 4-step process sentence list, shipping (worldwide, from Taipei, 5–12 working days), refund until 10 March 2027; stamp |
| Launch Events (`/readings/`) | T1 head (I6); 4 events rows with full details and "Book a seat" (mailto); seat rules; accessibility note |
| Book Clubs (`/book-clubs/`) | T1 head (I12); reading guide summary, 10 discussion questions, pack USD 110, Rafael Ortiz's note |
| FAQ (`/faq/`) | T1 head (I15); 12 Q&A in details rows (incl. the 6 on home) |
| Press & Contact (`/press/`) | T1 head (I10); press kit list, contact email, hours Mon–Fri 10:00–18:00 GMT+8, Elena Brandt for rights |
| Newsletter / Waitlist (`/newsletter/`) | T1 head (I11); early-access signup (name, email, language, consent), what you get (first essay, event seats 48 h early) |
| Privacy, Terms (`/privacy/`, `/terms/`) | text-only head, frame, legal text (no motion) |
| Thanks (`/thanks/`) | short head, I15, next steps, stamp |

---

## 10. Scroll techniques (sp-scroll)

| Effect | sp class | Where | Source (yoichi) | Trigger / time / easing |
|---|---|---|---|---|
| Zoom-fade of statements and labels | `sp-reveal sp-reveal--zoom` | Statement text (#3), Author heading, Editions heading, Waitlist heading | Webflow IX2 scroll-into-view: opacity 0 + scale .9 → 1 | sp default observer (≈20% into view); sp-scroll zoom duration; easing `cubic-bezier(.22,1,.36,1)` (adjust only via CSS variables if exposed) |
| Rows rising in sequence | parent `sp-stagger`, rows `sp-reveal sp-reveal--up` (`--sp-dist: 24px`) | Readings rows (#2), Readers strips (#7), FAQ rows not (forms/legal/tables excluded: price table **no** reveal) | IX2 icon rise translateY 64px (capped to 24px) | 0.12s step, ≈0.6s ease-out |
| Parallax | `sp-parallax` | Hero window (I1, `--sp-par: 6%`, mobile 4%) and Stage band (I3, `--sp-par: 10%`, mobile 6%) | yoichi black stage band + luxy.js floaty scroll (not adopted as a listener; expressed as parallax) | CSS scroll-driven (`view()`), JS fallback built in |

Hero gets **no** `sp-reveal` (it uses its own load keyframes). Inner page heads: parallax on the photo window with `--sp-par: 6%`. Reduced motion / `?sp-static` / editor = final state.

---

## 11. Similarity table (target ≈ 80%)

| Dimension | Reference (yoichi) | Fumi |
|---|---|---|
| Field colour / share | #003F8B ≈ 73% | #3E453A ≈ 65% (row palette + saturation gate) |
| Display colour | #FFFFED | #FAF8EA |
| Accent | #F26B3A ≈ 1.6% | #F26B3A ≤ 2% |
| Band | #000 full bleed | #0E0D0B full bleed |
| Hero figure | portrait 33% width, x 520–1000 | framed photo 480px (33%), x 520–1000 |
| Giant name | ≈300px glyphs, 90% width, y 290–460, crosses figure | Gloock 184px one line ≈ 80% width, y 400–540, crosses photo |
| Roman name | orange ~60px across the big name | persimmon 52px across the title |
| Stamp | 215px rotating, bottom-right | 184px rotating, right 56 / bottom 40 |
| Rail | 93px, 1px ivory line, vertical logo, mid hamburger | 92px, same |
| Frame | 1px lines x 170 / 1369; inner 1000 | 1px lines x 170 / 1370; inner 1000 |
| Statement type | 70px / 400 / lh 1.21 / ls .06em | 4.375rem / 400 / lh 1.21 / ls .06em |
| Body | 14px / lh 2.0 / ls .06em | 16px / lh 2.0 / ls .04em |
| Labels | 12px / 700 / ls .05em | .75rem / 700 / ls .05em |
| Radius / shadow | 0 / none (stamp round) | 0 / none (stamp round) |
| Strip rows | 64px hairline rows | 64px hairline rows (table, events, quotes) |
| Motion | load scale .9→1; IX2 scale .9 fade; rise 64px; 0.6–0.8s ease-out | load scale .9→1 .8s; sp-reveal--zoom; sp-reveal--up 24px; ease-out |
| Imagery | photo, cut-out figure on flat field | photo (film grain), framed window on flat field (no cut-outs by rule) |

---

## 12. Home acceptance checklist

- [ ] 1440×900 first screen shows all six KV items: green field + frame lines, framed I1 photo centred, "Small Hours" one line crossing the photo, persimmon "Clara Hsu" across the title and "Essays" above-left, rotating stamp bottom-right, rail with vertical wordmark + caption bottom-left.
- [ ] First-screen saturated share ≤ 15% (`check-first-screen.py`).
- [ ] Rail and 1px frame lines visible on every section ≥ 1024px; radius 0 everywhere except the stamp.
- [ ] Stamp appears in hero, Editions, Waitlist (and each inner head); links to `/editions/#order`; rotates; stops on reduced motion.
- [ ] Section order exactly as section 4; 10 photo positions, no repeated image on the page.
- [ ] Price table: 7 rows, prices identical to section 0, full width at 800 and 1280, price column nowrap right, stacked at 390.
- [ ] Dates, prices, counts (21 essays, 248 pages, 1,500 copies, 60 seats) identical on home and inner pages.
- [ ] `check-parallax.mjs`: hero window and stage band move ≥ 6px, 0 under reduced motion; ≥ 3 reveals hidden before entry; no leftovers.
- [ ] 390px: no vertical text, no absolute labels over text, no horizontal overflow; title two lines at 4.25rem.
- [ ] Fonts: Gloock / Public Sans / Noto Serif TC-JP via theme.json fontFace; editor = front end.
- [ ] ≥ 450 English words on home, 3+ narrative paragraphs, no claims of awards or guaranteed results.
- [ ] `auto-gates.mjs … 1 1` pass.
