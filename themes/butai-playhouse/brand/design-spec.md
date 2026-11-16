# Butai Playhouse — design spec (stage 1, design director)

Type: **events** (WooCommerce-compatible but not required; the site works fully without it). Industry: a **two-hundred-seat repertory playhouse** that stages **five plays a season** (September to May) and sells **season tickets and single performances**. Theme buyers: independent theatres, theatre companies and small performing-arts venues selling seasons.
Primary reference: **https://silotheatre.co.nz/** (S5-Style museum / event; contemporary theatre company; photo-led white / black page with flat colour floods). Secondary: **https://syuzgen.com/** (performing-arts production company; vertical section labels at the right edge, pale pill arrow buttons).
Tokens: `brand/reference-tokens.md`, cited as **T(a)…T(g)**. Screens: `ref/silo-first.png` (1440×900 first screen), `ref/scroll-silo-900/1300/1800/2700/3600.png`, `ref/syuz-first.png`, `ref/scroll-syuz-900/2700.png`.
**Imagery: photo** (stage-a IMAGERY = photo). One real-photography STYLE string: **low-key documentary theatre photography** (row `photo_direction: low-key`; T(e)). 0 cut-outs.
Font direction: **serif** (row `font_direction`). Latin display **Playfair Display**, Latin body / UI **Source Sans 3** (row fonts). zh-TW / ja headings **Noto Serif TC / Noto Serif JP** (Mincho). Details §6.
Similarity target: about **80%** to Silo in palette relationship, image treatment, motion, decoration and layout rhythm. Photographs, copy, play titles and the wordmark are ours; no asset, text or logo of either reference is reused.
Header: exactly one top menu (`core/navigation`, overlay always), **centred** wordmark (row `nav: centered`). Row page structure **timeline-milestone** = the season laid out as a horizontal dated rail (home §5 and the Season page). Row hero `framed-window` / first screen `full-bleed-photo-info-bar` are answered by the twin full-bleed panes with the docked ticker bar (the "info bar").
Class prefix: `bp-`. Pattern slugs `butai-playhouse/<name>`.

---

## 1. Signature techniques (3, obvious at a glance; none may be softened)

### S1 (T1): Twin-pane stage — two full-height photographs abutting with no gap, corner furniture only, ticker bar docked underneath
- **Source**: Silo hero, https://silotheatre.co.nz/ (`ref/silo-first.png`). Two face photographs side by side, each 720×820 (0.88), edge to edge, `object-fit: cover`; nothing over them except tiny white caps links in the four corners (round-dot MENU top-left, name centred, "→ ABOUT" top-right, "→ SIGN-UP" bottom-left, current show bottom-right); directly under them a white strip 108px tall carrying the name in 74px bold caps, running as a marquee (T(c), T(e), T(f), T(g)).
- **Ours (home §1)**: left pane **P01** (stage manager in the wings calling a cue), right pane **P02** (actor alone in a pool of light). Each pane exactly 50% wide, height `calc(100svh - 108px)` (792px at 900), **gap 0**, no frame, no radius, no overlay gradient except a 0→35% black gradient on the bottom 120px of each pane for link legibility. The fixed header (S3 below) is the top row of corner furniture; the bottom two corner links sit on the photos. A **14px plum cue dot** sits on the seam. Under the panes a **white ticker bar 108px** with the H1 in Playfair Display 800 caps 4.625rem (74px) ink, running right to left (`sp-marquee`).
- **Never soften**: both photos full-bleed to the viewport edges and to each other (no gutter, no card, no rounded tab, no caption box); no headline over the photos; the ticker is big (74px caps) and directly under the photos with no padding band between; the corner links stay tiny caps.

### S2 (T2): Black season board — full-bleed ink band, giant dim marquee line, row of narrow poster cards with dot labels
- **Source**: Silo season announcement (`ref/scroll-silo-2700.png`, `ref/scroll-silo-3600.png`): a full-bleed black section (≈1117px), padding-top 128px, a 74px grey `#999999` bold caps marquee line, then narrow poster photographs 258×368 (0.70) on wide gaps; under each a 10px white dot + 11px caps label and a 20px bold caps title; header colours invert over the black (T(a), T(c), T(e), T(f), T(g)).
- **Ours (home §4)**: full-bleed **ink `#130E15`** band, padding 128px top / 128px bottom. Row 1: marquee line **"THE 2026–27 SEASON — FIVE PLAYS — "** Playfair Display 800 caps 4.625rem, colour `#8F8A93` (dim), `sp-marquee`, row height 108px. 96px below: a **horizontal row of five poster cards** **P03–P07**, each **258×368 (0.70)**, `object-fit: cover`, radius 0, gap **96px** (T(c) 128px reduced to show 4 + a peek), first card at x64; the row is a horizontal scroller (`overflow-x: auto; scroll-snap-type: x mandatory`; scrollbar hidden; the 5th card peeks at 1440). Under each card (16px gap): 10px white dot + caps label Source Sans 3 600 .75rem ls .06em white ("PLAY ONE · OPENS 18 SEPT"), then the title Playfair Display 700 caps 1.25rem lh 1.15 white, then one dates line Source Sans 3 400 .875rem `#8F8A93`. At the far right of the row a thin **70px × 1.5px white arrow** (SVG) linking to `/season/`.
- **Never soften**: band is near-black and full-bleed (not a dark card); the marquee line is giant and dim grey (not white, not small); cards are narrow portrait 0.70 with wide gaps (not a 5-column grid filling the width, not rounded); dot + caps label above a caps title.

### S3 (T3): Colour-flood tile trio — three abutting tall flat panels, text at the top, outline pill at the foot
- **Source**: Silo e-news / super pass / support tiles (T(a) floods, T(c) 480×706 each, three abutting, text at the top; T(d) outline pill 52px radius, 1px border, padding 14 56 10, uppercase 20px; T(b) light 50px/53px statements in the panels).
- **Ours (home §6)**: three tiles, each exactly **one third of the viewport** (480px at 1440), **min-height 706px**, no gap, full-bleed: tile 1 **plum `#824880`** (white text) "Season ticket"; tile 2 **deep aubergine `#3C1F3D`** (text `#F4EEF4`) "Choose your seat"; tile 3 **pale lilac `#E3D8E4`** (ink text) "Single performance". Padding 48px 40px. Top: caps label Source Sans 3 600 .875rem ls .06em with a 10px dot; 24px below the title Playfair Display 400 **3.125rem / 1.06** (T(b) 50/53); 32px below one paragraph Source Sans 3 400 1.125rem lh 1.5, max 22em; then the price line Playfair Display 400 2rem (tiles 1 and 3: "€190", "€48"; tile 2: "One price, any seat"). Foot (pinned to the bottom with `margin-top: auto`): **outline pill** radius 52px, 1px border `currentColor`, padding 14px 56px 10px, Source Sans 3 600 caps 1.25rem (20px), transparent fill; hover fills with the text colour and swaps the text to the tile colour, `.3s cubic-bezier(0,0,.2,1)` (T(g)). Pills: "Buy a season ticket" → `/season-tickets/`; "Open the seat plan" → `/seats/`; "Book one performance" → `/seats/#request`.
- **Never soften**: three tiles abutting edge to edge, full-bleed, tall (≥706px desktop), flat colour with no photo, no shadow, no radius; text top, pill bottom; the plum tile stays plum (it is the one saturated area of the page and is far from the first screen).

### Supporting T4 (syuz'gen): vertical section label at the right edge
`ref/scroll-syuz-2700.png`: rotated caps word + dash + small sub-label at the right edge, beside a section. Ours: `writing-mode: vertical-rl` caps Source Sans 3 600 1.5rem ls .08em ink, followed by "— " + sub-label .8125rem (e.g. "SEASON 26/27 — Dates"), absolutely positioned at right 40px, top 128px of the section, **only ≥1024px** (below that it renders horizontal, in flow, above the section title). Used on home §5 (rail), §8 (prices), §9 (company) and every inner page's first section. Pale pill arrow button (syuz'gen 60×28 pill with arrow): `#EEECEF` pill 56×28 radius 14 with a 1.5px arrow, used for "more" links in journal rows and inner pages.

### Supporting T5 (Silo intro): staggered-baseline wordmark
`ref/scroll-silo-900.png`: the four letters of the name sit on different vertical offsets (45–60px apart) in black, 80px. Ours (home §2): the word **BUTAI** Playfair Display 900 caps **5rem**, ink, left-aligned at the text column's left edge; letter spans offset by `top`: B 0, U +44px, T −12px, A +60px, I +20px (static final state stays scattered, as on Silo); each letter has `sp-reveal sp-reveal--up` inside an `sp-stagger` parent so they rise into those positions one by one.

### Continuation on inner pages (≥4 required; here 9)
| Page | S1 twin-pane | S2 ink board | S3 flood tiles | T4 / T5 |
|---|---|---|---|---|
| The Season | mini twin head (P11 + P15) + ticker "THE SEASON" | full board of the five plays + one section per play | — | T4 "PLAYS — Five" |
| Season Tickets | mini twin head (P10 + P09) + ticker "SEASON TICKETS" | — | trio: Season / Under 26 / Single | T4 |
| Choose Your Seat | — (seat plan head) | — | trio: On this site / At the box office / By phone | T4 |
| Plan Your Visit | mini twin head (P17 + P08) + ticker "PLAN YOUR VISIT" | — | trio: Before the show / Getting here / Access | T4 |
| The House | mini twin head (P11 + P12) + ticker "THE HOUSE" | — | — | T4 |
| The Company | mini twin head (P09 + P16) + ticker "THE COMPANY" | board variant: seven people as name cards (text only, no photos) on ink | — | T4 |
| About | mini twin head (P08 + P13) + ticker "SINCE 2009" | board of past milestones (P12, P13, P14, P16 as cards) | — | T5 wordmark repeat |
| Contact | — | — | trio: Box office / Press / Schools and groups | T4 |
| The Call Sheet (newsletter) | — | — | single plum-flood intro tile beside the form panel | T4 |
| Journal (archive) | — | posts as poster cards on ink (featured images, 0.70) | — | — |
Mini twin head = the S1 pattern at height **480px** desktop (each pane 50%, gap 0, cue dot on the seam, bottom-left caps label "● <PAGE>"), ticker bar **72px** with the page title Playfair Display 800 caps 3rem, `sp-marquee`; panes are `sp-parallax` `--sp-par: 6%` (mobile 4%). The page H1 is the ticker text (one H1 per page).

---

## Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **What it draws**: two huge close-up faces of performers mid-gasp, mouths open, turning back over their shoulders, photographed against a saturated running-track orange; the two photographs abut edge to edge across the whole viewport. Nothing covers the faces but four tiny white caps corner links (a round-dot MENU top-left, SILO centred, "→ ABOUT SILO" top-right, "→ SIGN-UP FOR UPDATES" bottom-left, "→ MARATHON" — the current show — bottom-right). Under the photos, a white strip carries "SILO THEATRE 2026" in 74px black bold caps.
- **Story**: theatre as a live, physical, risky act — the audience meets the performers' bodies first and the programme second; the season is announced like a race about to start.
- **Signature motion**: the endless caps marquee under the photos (~88px/s, GSAP transform, two copies 826px apart); the hero photos fade in over 2.5s linear; the round menu dot pulses (`pulsate` 1.8s); the header colours invert over black sections; scrolling on, the scattered letters of the wordmark settle.

### (2) Our scene (same composition, same motion idea, same image type: low-key documentary photographs)
**19:29, the minute before the first cue.** Two photographs of one moment, side by side with no gap. Left, **the wings**: the stage manager (woman, 40s, West African heritage) stands at the prompt desk in the dark wing, headset on, one hand raised with the index finger up, ready to say "Go"; the hooded desk lamp lights half her face and the open prompt book. Right, **the stage**: an actor (man, 30s, South Asian heritage) stands alone and still in a single pool of light on a bare black stage, seen from the wings side, a chair beside him, the dark auditorium beyond. The **plum cue dot pulsing in the seam** is the cue light between them: when it fires, the play begins. Like Silo's two faces, it is two people, two frames, one breath held; unlike Silo, the moment is the one every playgoer never sees. The season title runs underneath in big caps as the ticker. Motion: the panes fade in (2.5s linear, the right pane 0.4s later), drift with parallax at two different speeds, the cue dot pulses at 1.8s, the ticker runs.

### (3) KV checklist (all six built in the home first screen and visible at 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Left face photograph, edge to edge | **P01** stage manager in the wings, headset, finger raised, prompt-desk lamp on half her face | x0–720, y0–792 (0.91), under the transparent header | load fade 0→1 2.5s linear (CSS, `bp-hero__pane`); `sp-parallax` `--sp-par: 8%` (mobile 5%) | P01 |
| 2 | Right face photograph, abutting, no gap | **P02** actor alone in a pool of light on a bare stage, seen from the wings | x720–1440, y0–792 | same fade, delay .4s; `sp-parallax` `--sp-par: 6%` (mobile 4%) | P02 |
| 3 | Four corner micro-links, round-dot MENU, name centred | fixed header: "● Menu" x16 (16px dot), wordmark "BUTAI" centred x720, "→ The season" right 16px; on the photos bottom-left "→ Book a season" and bottom-right "→ Now playing: The Lamp Room"; all Source Sans 3 600 caps 1.25rem white | corners; bottom links at bottom 16px | hover underline 1px, `.3s cubic-bezier(0,0,.2,1)` | P01 / P02 |
| 4 | White strip with the name in 74px bold caps as a marquee | white ticker bar 108px: H1 **"BUTAI PLAYHOUSE 2026–27 — FIVE PLAYS — TWO HUNDRED SEATS — "** Playfair Display 800 caps 4.625rem ink | y792–900, full width | `sp-marquee`, right to left, 27s per copy (≈90px/s) | — |
| 5 | Pulsing round dot (`pulsate` 1.8s) | **14px plum `#824880` cue dot** with a 1px white ring, on the seam | centre x720, y428 (54% of the pane height) | `bp-pulse` 1.8s ease-in-out infinite (scale 1→1.35, opacity 1→.55); static under reduced motion / `?sp-static` | — |
| 6 | Caps labels with a 10px dot (Silo card labels) | "● THE WINGS · 19:29" on P01 and "● THE STAGE · 19:29" on P02, Source Sans 3 600 caps .75rem ls .06em white | bottom 64px, left 16px of each pane (x16 and x736) | none | P01 / P02 |
Nothing else in the first screen: no paragraph, no button block, no form, no table, no search.

---

## 3. Home page: block order

Container: S1, S2, S3, the band and the newsletter are full-bleed. Text blocks use the **950px** column (T(c) text column 950px, centred box, text left-aligned) or wide 1312px (64px side margins). Section padding desktop **128px top / 128px bottom** (T(c) black section padding-top 128px), mobile 64 / 64. Copy target ≈ **680 English words**, ≥3 narrative paragraphs ≥20 words (§2 ×3, §6 tiles, §7, §9).

| # | Block (pattern) | Purpose | Layout | Photo(s) | Copy |
|---|---|---|---|---|---|
| 0 | `header` (fixed) | one top menu | §6.4; transparent, 48px, `mix-blend-mode: difference` text | — | labels |
| 1 | `hero-twin` (S1, KV) | key visual | Key visual §3; nothing else | P01 P02 | H1 ticker + 2 corner links + 2 labels |
| 2 | `statement` (T5) | who we are | white; padding 160 / 128; 950px column at x245: T5 wordmark **BUTAI** (5rem, scattered) 64px above the text; **¶1** Source Sans 3 400 **1.5rem / 1.35** ink (≈45 words: a 200-seat repertory playhouse on Lantern Row since 2009, five plays a season); **¶2** and **¶3** 1.125rem / 1.55 (≈60 words each: how a season works — the same seat for all five plays; why five plays — one company, one rehearsal room, each play four weeks); link **"→ Read the season letter"** Source Sans 3 700 1.25rem → `/season/` | — | 3 ¶ ≈ 165 words |
| 4 | `season-board` (S2) | the five plays | §1 S2 | P03 P04 P05 P06 P07 | marquee + 5 × (label, title, dates) |
| 5 | `season-rail` (timeline-milestone) | when things happen | white; T4 vertical label "SEASON 26/27 — Dates" at right; heading Playfair Display 400 3.125rem "One season, seven dates." at x64; 1 ¶ (≈40 words) 950px; then a **horizontal rail**: 1px ink hairline across the wide width (1312) at y+120; **7 milestones** evenly spaced (flex, `justify-content: space-between`); each: a 10px dot on the line (plum for the five openings, ink ring for on-sale dates), above the line the date Playfair Display 700 1.5rem ("1 Jun"), below the line a caps label .75rem + one line .9375rem (≤36 characters). Items in an `sp-stagger` group, each `sp-reveal sp-reveal--up` | — | ¶ ≈ 40 + 7 items |
| 6 | `ticket-tiles` (S3) | three ways in | §1 S3; tile ¶ ≈ 35 words each | — | 3 × (label, title, ¶, price, pill) |
| 7 | `rehearsal-band` | pause | inset band like T(e) "wide band photo": **P08** 1196×720 (1.66), inset 122px each side, `sp-parallax` `--sp-par: 10%` (mobile 6%); foreground caps statement white bottom-left 48px: Playfair Display 800 caps 2.25rem lh 1.05, 2 lines **"ONE COMPANY. / ONE ROOM. FIVE PLAYS."** + one line Source Sans 3 400 1.125rem (≈25 words: the company rehearses the next play by day while this one plays at night) — text sits on the static wrapper, not the moving layer; 0→55% black gradient on the lower 40% | P08 | 2 lines + 1 sentence |
| 8 | `prices` | the price list | white; T4 label "PRICES — 2026/27"; left: **P10** 432×540 (0.8) at x64; right column x560–1376: heading Playfair Display 400 3.125rem "One price, any seat."; 1 ¶ (≈35 words); **price table** (6 rows, §9) full right-column width: item Playfair Display 400 1.375rem left, note Source Sans 3 .9375rem `#5E5862` middle, price Playfair Display 700 1.375rem **right, nowrap**; 1px `#D8D3DA` rules, no card, no fill; under it a pale pill-arrow link "Season tickets explained" | P10 | ¶ ≈ 35 + table |
| 9 | `company` | people | white; T4 label "COMPANY — Seven"; left column x64 w560: heading Playfair Display 400 3.125rem "The people behind the cue." + ¶ (≈60 words); **4 ruled rows** (Tomas Reyes, Imani Okafor, Lena Vogt, Margit Ellison): name Playfair Display 400 1.5rem, role caps .75rem ls .06em, one line .9375rem; link "→ Meet all seven" → `/company/`. Right: **P09** 640×800 (0.8) flush right edge (x800–1440) | P09 | ¶ ≈ 60 + 4 rows |
| 10 | `journal-rows` | latest stories | `#EEECEF` ground; heading Playfair Display 400 3.125rem "Journal" + caps sub-label "— From the rehearsal room"; Query Loop 3 posts as ruled rows: date caps .75rem · title Playfair Display 400 1.5rem · 192×128 (1.5) thumbnail right · pale pill arrow; rows `sp-reveal sp-reveal--up` | P14 P15 P13 (featured images) | titles |
| 11 | `call-sheet` | newsletter | full-bleed ink `#130E15` panel, padding 96px; left x64 w560: caps label "● NEWSLETTER", Playfair Display 400 3.125rem "The Call Sheet", 1 ¶ (≈35 words: one email on the first Monday of each month); right x800 w512: newsletter slot (§11) | — | 2 lines + ¶ |
| 12 | `visit` | where and when | white; **P17** 1312×560 (2.34) wide; under it 3 columns (address + map link; box office hours + curtain times; getting here: tram 4 to Lantern Row, 3 min walk) Source Sans 3 1rem lh 1.6, labels caps .75rem | P17 | ≈70 words |
| 13 | `footer` | close | ink ground, text `#FFFFFF`, dim `#8F8A93`; marquee strip 108px "BUTAI PLAYHOUSE — LANTERN ROW — " in Playfair 800 caps 4.625rem `#8F8A93` (`sp-marquee`, T(g) "same on the black section"); then 4 columns: wordmark + address; box office; `#site-index` list of all pages; "The Call Sheet →" link; © line | — | — |

**Home photo positions: 14** (P01–P10, P13, P14, P15, P17), all unique on the page (≥8 ✔). P11, P12, P16 are inner-page only.

### First-screen composition (1440×900)
- y0–48: fixed header over the photos (transparent, padding 12 16 7, T(c)): "● Menu" at x16, wordmark "BUTAI" centred at x720, "→ The season" right-aligned to x1424. Text white with `mix-blend-mode: difference` (shows white over the dark photos, ink over white).
- y0–792: P01 x0–720, P02 x720–1440, abutting. Cue dot centre (720, 428). Labels at y≈716 (x16 / x736). Corner links at y≈760 (x16 / right 16).
- y792–900: white ticker bar, H1 caps 74px ink, running.
- Saturated share (HSV s>0.5, v>0.3): low-key desaturated photos ≈3–6% + cue dot <0.1% → **target ≤8%**, script cap 15%, row cap 30% (ref measured 37% — the one value we deliberately do not copy).

### Comparison with recent themes' home orders (must not match)
| Theme | Home order | Why Butai differs |
|---|---|---|
| Komorebi Cabins | gutter-tagline hero / greige intro / blurred-canopy mosaic / comparison table / Inside row / weekend flow / woodland band / hosts / getting here / journal / dark letter | no gutter tagline, no mosaic, no comparison table, no edge-peek row; hero is two abutting full-bleed panes + ticker; core blocks are an ink poster board and three colour-flood tiles |
| Hinata Market | gazette frame 3 columns / ticker / feed + values / stalls strip / parallax band / apply rows / fees table / foot trio / colophon | Hinata's ticker is a news line inside a framed gazette; ours is a 74px caps title marquee docked under photos; no ruled newspaper columns, no framed page |
| Futari Journeys | inset photo hero + 3-question foot / pair on pale band / question blocks / map band / Q&A / how 5 steps / planners / ink band / letter | no inset hero, no question blocks, no Q&A, no step list on home; the dated rail is horizontal, not steps |
| Utsushi Films | dark window hero with film index / centred intro / masonry case wall / wipe panel / 3 centred columns / band / rates rows / crew rows / letters | no framed window, no masonry, no wipe, no centred columns; intro is left-aligned with a scattered wordmark; work is shown as five narrow 0.70 poster cards on ink |

---

## 4. Inner pages (10 pages + Journal + 3 posts)

All inner pages: the same fixed blend header; first section per the continuation table (§1); content; footer as home. Every inner page H1 is in its ticker or, for pages without a twin head, a Playfair Display 400 **4.25rem** heading on white with the T4 label.

| Page (slug) | Head | Content points |
|---|---|---|
| **The Season** (`season`) | twin P11 + P15, ticker "THE SEASON 2026–27" | intro ¶ (≈80 words); S2 board (P03–P07, each card links to its section); horizontal rail (7 dates, as home §5); **five play sections** `#play-1`…`#play-5`, text only (no second copy of the poster): T4 vertical label "PLAY ONE — 18 Sept" at right, caps label "PLAY ONE · 18 SEPT – 11 OCT", Playfair 3.125rem title, writer / director line, ¶ ≈60 words (story, no spoilers), running time, age guidance, "→ Choose your seat"; 1px rule between sections |
| **Season Tickets** (`season-tickets`) | twin P10 + P09, ticker "SEASON TICKETS" | S3 trio (Season €190 / Under 26 €95 / Single €48); "What a season ticket includes" ruled list (6 items: five plays, the same seat every time, one free date swap per play up to 48 h before, the season programme book, 10% at the bar, priority renewal in May); full price table (§9, 6 rows); renewal dates; ¶ on paying in two instalments (June and December) |
| **Choose Your Seat** (`seats`; booking) | white head, H1 4.25rem "Choose your seat", T4 "SEATS — Two hundred" | **the single way** (§9 flow, 4 ruled steps); **seat plan**: inline SVG of the house (stalls rows A–J × 14 = 140, circle rows K–M × 20 = 60; stage at top; seats as 12px squares in ink, aisle gaps; 4 wheelchair spaces in row J marked plum) with a caption — decorative + `aria-label`; S3 trio (On this site / At the box office / By phone); **seat request form slot** `#request` (§11) |
| **Plan Your Visit** (`visit`) | twin P17 + P08, ticker "PLAN YOUR VISIT" | S3 trio (Before the show / Getting here / Access); hours table (box office, doors, curtain, matinee, bar); latecomers rule (admitted at a suitable break); access (step-free stalls, 4 wheelchair spaces, hearing loop, captioned performance — 2nd Thursday of each run); cloakroom, bar |
| **The House** (`the-house`) | twin P11 + P12, ticker "THE HOUSE" | the building (former tram depot, converted 2009), the 200-seat room (end-on, steep rake, no seat more than 11 rows from the stage), the rehearsal room, the workshop; 3 numbers as ruled rows (200 seats · 11 rows to the furthest seat · 9.5 m stage width); backstage tour Saturdays 11:00 (€12) |
| **The Company** (`company`) | twin P09 + P16, ticker "THE COMPANY" | intro ¶; S2 board variant: **seven people** as text cards on ink (name Playfair 700 caps 1.25rem white, dot + role label, 2-line note), horizontal scroller like the board; one ¶ on the resident acting ensemble (eight actors each season) — no portrait grid |
| **About** (`about`) | twin P08 + P13, ticker "SINCE 2009" | T5 wordmark; founding story (3 ¶); S2 board "MILESTONES" with 4 cards (P12, P14, P16, P15): 2009 doors open · 2014 the rehearsal room · 2019 the under-26 season · 2024 the new seats; values (3 ruled rows) |
| **Contact** (`contact`) | white head H1 "Contact", T4 | S3 trio (Box office / Press / Schools and groups) with emails and hours; **contact form slot** (§11) on `#EEECEF` panel; address + phone |
| **The Call Sheet** (`newsletter`) | white head H1 "The Call Sheet", T4 | two columns: left a plum flood tile 50% (min-height 520) with label, title, ¶, three example items (on-sale dates, rehearsal notes, one ticket offer for subscribers); right the **newsletter slot** on ink panel (dark test) |
| **Journal** (`journal`, role posts, empty content) | — | archive template: ink band with heading "JOURNAL" marquee line (dim) and posts as 0.70 poster cards (featured image), dot + date label, caps title; pagination as pills |
| **Privacy** (`privacy`) | white head | plain text, no motion |
Templates: `front-page`, `page`, `page-season`… only if needed; `single`, `archive`, `category`, `tag` (copy of archive, label TAG), `index`, `404`, `search`.

Posts (3, category "From the rehearsal room", tags "season", "backstage", "tickets"): "What a stage manager says before 'Go'" (featured P14), "Why your season seat stays yours" (P15), "Building a ferry for Winter Ferry" (P13).

---

## 5. Colour

**Reference relationship (T(a))**: white ground ~38%, black section ~24%, pale grey menu `#EDEDEF`, flat colour floods ~25% (deep green `#002519`, oxblood `#640014`, red `#D72C24`, yellow `#F0DD17`, orange `#F37520`), grey `#999999` marquee on black; colour otherwise only from photographs. We keep the white / black / pale-grey / grey relationship within ±5% lightness; the **floods are re-coloured into the row's plum family** ("nasukon" aubergine `#824880`) because Silo's floods are per-campaign show colours at high chroma — red, yellow and orange tall panels would break the row note "quiet palette" and the house rule against large high-chroma areas; we keep their *roles* (one mid flood, one deep flood, one pale flood) and their 480×706 shape.

| Token (theme.json slug) | Hex | Role | Share (home) | Source |
|---|---|---|---|---|
| `white` | `#FFFFFF` | page ground, ticker bar | ~40% | **T(a) exact** |
| `ink` | `#130E15` | season board, newsletter, footer, all text on light | ~26% | T(a) black `#000000`, +5% L with a plum tint (row palette) |
| `mist` | `#EEECEF` | journal ground, menu overlay, pale pills, contact panel | ~8% | T(a) `#EDEDEF` (±1%) |
| `dim` | `#8F8A93` | marquee lines on ink, meta on ink | <2% | T(a) `#999999` −4% L, plum tint |
| `plum` | `#824880` | flood tile 1, cue dot, milestone dots, focus ring on dark | ~5% | row hex "nasukon" aubergine; replaces oxblood `#640014` |
| `aubergine` | `#3C1F3D` | flood tile 2 | ~5% | replaces deep green `#002519` (same deep role) |
| `lilac` | `#E3D8E4` | flood tile 3 | ~5% | replaces yellow `#F0DD17` (pale role, quiet) |
| `petal` | `#F4EEF4` | text on aubergine | type | cream `#FFF4EA` role (T(a) text on green) |
| `rule` | `#D8D3DA` | hairlines, table rules | <1% | mist −10% L |
| `muted` | `#5E5862` | captions, notes on white | type | ink +35% L |
| `error` | `#A3263B` | form error (light) | — | oxblood role, +5% L |
| `success` | `#2F6B4F` | form success (light) bg `#E2EFE7` | — | — |
Contrast: ink on white 19.3:1; white on plum 6.2:1; petal on aubergine 12.6:1; ink on lilac 14.9:1; dim on ink 5.6:1; white on ink 19.3:1. **First-screen saturated share target ≤8%, script cap 15%, row cap 30%.** No beige / cream ground. Recent main colours (Komorebi greige / terracotta, Hinata, Futari, Utsushi charcoal) avoided.

---

## 6. Typography (serif direction)

Loaded only through **theme.json `fontFamilies` + `fontFace`** (woff2 in `assets/fonts/`, OFL licence files, all listed in theme-meta.json `fonts[].files`, family names in readme.txt) so the editor iframe and the front end use the same faces.
| Family (slug) | Files | Stack |
|---|---|---|
| `display` Playfair Display (variable 400–900 + italic 400–700) | `playfair-display-variable.woff2`, `playfair-display-italic-variable.woff2` | `"Playfair Display", "Iowan Old Style", Georgia, serif` |
| `body` Source Sans 3 (variable 300–900) | `source-sans-3-variable.woff2` | `"Source Sans 3", "Helvetica Neue", Arial, sans-serif` |
| `display-zh` Noto Serif TC (subset, 500 + 700) | `noto-serif-tc-500-subset.woff2`, `noto-serif-tc-700-subset.woff2` | zh-TW headings: `"Playfair Display", "Noto Serif TC", "Songti TC", "PMingLiU", serif` |
| `display-ja` Noto Serif JP (subset, 500 + 700) | `noto-serif-jp-500-subset.woff2`, `noto-serif-jp-700-subset.woff2` | ja headings: `"Playfair Display", "Noto Serif JP", "Hiragino Mincho ProN", "Yu Mincho", serif` |
CJK body (system only; must not contain the bundled zh/ja families): zh-TW `"Source Sans 3", "PingFang TC", "Microsoft JhengHei", sans-serif`; ja `"Source Sans 3", "Hiragino Sans", "Yu Gothic", sans-serif`. Subsets via the Hokuto / Hada replacement method (the shared zh subset script is broken), covering every heading / marquee glyph in demo-content.zh-TW.json / ja.json and the i18n dictionaries. Copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and require it (style.css uses `:lang()`). `check-editor-fonts.mjs` must pass in en and zh-TW.

Sizes (theme.json `fontSizes`):
| Slug | Size | Use (token) |
|---|---|---|
| `x-small` | .75rem | dot labels, dates (T(e) 11px caps) |
| `small` | .9375rem | notes, meta, table notes |
| `medium` | 1.125rem | body (T(b) 20px, reduced for long copy) |
| `large` | 1.25rem | corner links, pills, card titles (T(b) UI 24px → 20px; T(d) pill 20px) |
| `x-large` | 1.5rem | statement lead ¶, names, rail dates (T(b) intro 24px / 28.3) |
| `xx-large` | 3.125rem | section titles, tile titles (T(b) 50px / 53px) |
| `huge` | **4.25rem** | inner H1 without twin head |
| `display` | **4.625rem** | hero ticker H1, board marquee, footer marquee (T(b) 74px / 84px) |
| (`mark`, CSS only) | 5rem | T5 scattered wordmark letters (T(f) 80px) |
- **Ticker / marquee**: Playfair Display 800, caps, lh 1.135 (84/74), ls 0; mobile 2.5rem.
- **Section title**: Playfair Display 400, 3.125rem, lh 1.06, ls −.01em; mobile 2.25rem.
- **Body**: Source Sans 3 400, 1.125rem, lh 1.55, ink; paragraph gap 1em. Lead ¶ 1.5rem lh 1.35.
- **UI / corner links / nav**: Source Sans 3 600, caps, 1.25rem, lh 1.22, ls .02em (T(b) +0.48px). Menu overlay items Playfair Display 400 3rem lh .93 (T(b) 48 / 44.6).
- **Dot labels**: Source Sans 3 600 .75rem caps ls .06em, 10px round dot before (inline SVG or an empty span — no `content:` text).
- **zh-TW / ja**: headings ×0.75 (ticker 3.5rem, titles 2.375rem), no caps transform, body lh **1.85**, nav ls .08em; marquees use the 700 subset; de / fr `hyphens: auto`; each ticker string rewritten locally (≤40 characters before the separator).

### 6.4 Header (S3-like corner furniture, centred, one menu)
Fixed, 48px, transparent, padding 12px 16px 7px (T(c)). Three slots in a flex row `space-between`: left `core/navigation` with `overlayMenu: "always"`, `hasIcon: false` (text "Menu"), a 16px round dot before it; centre site title "BUTAI" (Source Sans 3 700 caps 1.25rem ls .08em), centred absolutely at 50%; right a paragraph link "→ The season". All three in white with **`mix-blend-mode: difference`** applied to each item (not to the header wrapper, so the overlay is unaffected) — this reproduces Silo's header inversion over black sections without any scroll listener. Overlay: full-screen `mist` `#EEECEF`, ink text, items Playfair Display 400 3rem left-aligned at x64 from y128, close "× Close" caps top-left; open/close `scaleIn` .4s `cubic-bezier(.65,.05,.36,1)` (T(g)). Admin bar: offset `top` by `var(--wp-admin--admin-bar--height, 0px)`. **<782px**: header is in flow (position relative), white ground, ink text, no blend, height 56px.

---

## 7. Motion and scroll (sp-scroll)

Copy `pipeline/assets/sp-scroll/` unchanged to `assets/`; enqueue css + js in head (js not deferred); `add_editor_style`. Theme overrides in style.css: `:root { --sp-dur: .8s; --sp-ease: cubic-bezier(.65,.05,.36,1); --sp-dist: 24px; }` (T(g) panel easing). Marquee speed (theme CSS, not the sp file): `.bp-ticker.sp-marquee > * { animation-duration: 27s; }` and board / footer `32s` (≈88px/s, T(g)).

### 7.1 Chosen effects (3 + parallax)
| Effect | sp-* | Where | Reference trigger / time / easing | Ours |
|---|---|---|---|---|
| Caps marquee | `sp-marquee` (pattern duplicates the inner group with `aria-hidden="true"`) | home §1 ticker, §4 board line, §13 footer strip; inner twin-head tickers; Journal archive line | Silo: GSAP transform loop, always on, ≈88px/s, linear, two copies 826px apart (T(g)) | linear, 27s / 32s per copy; under reduced motion / `?sp-static` static (first copy visible, starts at x0) |
| Rise into place | `sp-reveal sp-reveal--up` + parent `sp-stagger` | §2 the five T5 letters; §4 the whole card row (single reveal on the scroller container, **not** on cards); §5 the 7 milestones; §9 the 4 rows; §10 journal rows; inner: play sections, rails, people cards container | Silo: ScrollTrigger on entry ≈0.8s `cubic-bezier(.65,.05,.36,1)`; syuz'gen sections slide up ≈0.6s ease-out | 24px, .8s, steps .12s |
| Parallax (required) | `sp-parallax` | §7.2 | Silo full-width photo band, hero | §7.2 |
Not used: `sp-count`, wipe / mask / zoom, left / right. **No reveal in the hero** (KV). **No reveal** on forms, the price table, hours, the seat plan or legal text. Reveals ≤60% of home blocks.
**Hero load fade (KV #1–#2)**: CSS only, inside `@media (prefers-reduced-motion: no-preference)`: `html.sp-js:not(.sp-no-motion) .bp-hero__pane img { animation: bp-fade 2.5s linear both; } .bp-hero__pane--stage img { animation-delay: .4s; }` (T(g) `fadein 2.5s linear`, 0.4s). **Cue dot**: `html.sp-js:not(.sp-no-motion) .bp-cue { animation: bp-pulse 1.8s ease-in-out infinite; }` (T(g) pulsate 1.8s). Both visible / static with no JS, `?sp-static`, reduced motion and in the editor.

### 7.2 Parallax (required)
| Where | Block | Moving layer | Foreground (static) | `--sp-par` desktop / mobile | Reference motion |
|---|---|---|---|---|---|
| **Hero left pane** (primary) | Group `bp-hero__pane bp-hero__pane--wings sp-parallax` wrapping `figure > img` | **P01** | label + corner link are siblings positioned on the pane wrapper, **outside** the moving img | **8% / 5%** | Silo hero photos fade in and hold; ours also drift |
| **Hero right pane** | Group `bp-hero__pane bp-hero__pane--stage sp-parallax` | **P02** | label + corner link; cue dot sits on the hero wrapper over the seam | **6% / 4%** (different speed = the two frames slide subtly against each other at the seam) | same |
| **Rehearsal band** (home §7) | Group `bp-band sp-parallax` (1196 wide, inset 122) wrapping `figure > img` | **P08** | caps statement + sentence on the wrapper | **10% / 6%** | Silo T(e) wide band photo of a lit stage (inset 122px) |
| **Inner twin heads** | each pane `sp-parallax` | each page's two head photos | page label | **6% / 4%** | as hero |
Mobile keeps parallax at the smaller speeds. Reduced motion, `?sp-static`, no JS and the editor: no movement. Acceptance: `check-parallax.mjs` desktop + mobile, displacement difference ≥6px, ≤1px under reduced motion; ≥3 reveals hidden before entering and final after; nothing transparent after scrolling to the bottom.

---

## 8. Responsive rules (hard)

- **390px first screen**: header in flow, 56px, white, ink ("● Menu" left, "BUTAI" centre, "→ Season" right, .9375rem). Then the twin panes **stay side by side**: each 195px wide, height `62svh` (≈520px), gap 0; `object-position`: P01 `58% 40%`, P02 `45% 50%` (the figures are vertical subjects). Cue dot 10px on the seam, centred. **Pane labels hidden <782.** Ticker 64px, Playfair 800 caps 2.5rem. Below the ticker, **in flow**, a 48px row with the two corner links ("→ Book a season" left, "→ Now playing" right, .875rem caps ink). **No vertical writing, no absolutely positioned text over the photos, no overlap**; `scrollWidth == innerWidth`.
- 782–1023: header fixed with blend; panes 50/50 at `calc(100svh - 96px)`; ticker 96px 3.5rem; labels shown; corner links on the photos.
- **T4 vertical labels**: only ≥1024; below, horizontal caps label in flow above the section title. CJK <1024 horizontal only.
- **S2 board <782**: marquee 2.5rem; cards 200×286 in the horizontal scroller, gap 32, first at x20, the next card peeking; the reveal stays on the container.
- **S3 tiles <782**: stacked full width, each min-height 420px, padding 32 24; pill full width minus padding. 782–1023: three columns kept, min-height 600, titles 2.25rem.
- **Rail <782**: becomes a list of 7 ruled rows (date left Playfair 700 1.25rem w96, label + line right), a 1px vertical hairline at x20 with the dots on it (timeline is the row's required page structure); no horizontal scroll.
- **Price table ≥782px**: spans the **full width of its column** (`width: 100%`, `table-layout: auto`); item column left; note column left, may wrap; **price column `white-space: nowrap; text-align: right; width: 1%`**; never clipped at 800 and 1280 (at 800–1023 the P10 photo moves above the table and the table takes the full content width); no `overflow: hidden` on the wrapper.
- **Any table <782px** (prices, hours): stacked — each row a block: item + price on one flex line (price right, nowrap), note below in `muted` .9375rem, 1px `rule` between rows. No horizontal scrolling.
- **Company <782**: P09 full width 4:5 above the rows. **Rehearsal band <782**: inset 0, height 420, statement 1.5rem.
- Touch targets ≥44px. `html, body { overflow-x: clip }`; parallax layers clipped by their wrapper; the board scroller is the only horizontal scroller.

---

## 9. Fixed facts (identical on every page and in all five locales; brand.md is the source)

- **Name**: Butai Playhouse ("butai" = stage). **Founded** 2009 by Tomas Reyes and Margit Ellison in a converted tram depot. **Address**: 14 Lantern Row, Easthaven (fictional). **Phone** +44 1632 960 527 (box office hours). **Email**: box office `boxoffice@butai-playhouse.example` (seats, booking form fallback); general `hello@butai-playhouse.example` (contact, newsletter).
- **The house**: 200 seats — stalls rows A–J × 14 = 140, circle rows K–M × 20 = 60; 4 wheelchair spaces in row J; end-on stage 9.5 m wide; no seat more than 11 rows from the stage. **Every seat is one price.**
- **The 2026–27 season (five plays)**:
  | # | Play | Dates | Note |
  |---|---|---|---|
  | 1 | The Lamp Room | 18 Sept – 11 Oct 2026 | new play; a lighthouse keeper's last winter |
  | 2 | Winter Ferry | 30 Oct – 22 Nov 2026 | two strangers on the last crossing |
  | 3 | A House with Nine Doors | 15 Jan – 7 Feb 2027 | comedy; a family sells the house |
  | 4 | The Understudy | 5 Mar – 28 Mar 2027 | an understudy goes on |
  | 5 | Salt and Thunder | 23 Apr – 16 May 2027 | a storm, a harbour town, a trial |
- **Season dates (rail, 7)**: 1 Jun season tickets on sale (renewals 4–31 May) · 3 Aug single tickets on sale · 18 Sept Play one opens · 30 Oct Play two · 15 Jan Play three · 5 Mar Play four · 23 Apr Play five (season closes 16 May).
- **Performances**: Tue–Sat 19:30, Sun 15:00, no Monday performances; first two performances of each play are previews. Running times 1 h 45 – 2 h 30 incl. one interval.
- **Price list (6 items)**: Season ticket (5 plays, same seat) **€190** · Under-26 season ticket **€95** · Single performance **€48** · Under-26 single **€24** · Preview performance **€32** · Backstage tour (Saturdays 11:00) **€12**. Season ticket can be paid in two instalments (June, December). One free date swap per play, up to 48 h before.
- **The single way to choose seats (4 steps)**: 1 choose a season ticket or one performance · 2 pick your seat on the seat plan (on this site, at the box office or by phone — staff use the same plan) · 3 pay; we email a confirmation with your seat number · 4 your seat is yours for the season; collect tickets at the box office or show the email at the door.
- **Hours**: box office Tue–Sat 12:00–18:00, and on performance days until curtain (Sun 13:30–15:00) · doors and bar 18:30 (Sun 14:00) · curtain 19:30 (Sun 15:00) · latecomers admitted at a suitable break.
- **A day at the playhouse (daily routine)**: 10:00 rehearsal room (the next play) · 12:00 box office opens · 16:00 technical checks on stage · 18:30 doors and bar · 19:25 beginners called · 19:30 curtain · about 21:45 house lights up.
- **People (7)**: Tomas Reyes, artistic director and co-founder · Margit Ellison, executive director and co-founder · Imani Okafor, stage manager · Lena Vogt, technical and lighting manager · Rafael Duarte, resident designer · Aisha Rahman, under-26 and schools programme · Jonas Berg, box office and front of house manager. Plus a resident ensemble of eight actors each season (unnamed).
- **Milestones (About)**: 2009 doors open in the old tram depot · 2014 the rehearsal room · 2019 the under-26 season · 2024 new seats in the stalls.
- **Stories (3 posts)**: "What a stage manager says before 'Go'" · "Why your season seat stays yours" · "Building a ferry for Winter Ferry".
- **Getting here**: tram 4 to "Lantern Row", 3 minutes' walk; Easthaven Central station 12 minutes' walk; no venue parking; bicycle racks at the side door.
- **The Call Sheet**: first Monday of each month; on-sale dates, notes from the rehearsal room, one subscriber offer.
- **Audience**: regular playgoers, season subscribers, under-26s and schools in Easthaven; theme buyers: independent theatres and small venues. **Tone**: plain, warm, a little dry, theatre-literate; no awards, no reviews quoted, no "best", no guarantees.

---

## 10. Images (17 photographs, one STYLE; 14 on home)

**STYLE** (identical for every image):
`IMAGE_STYLE="real low-key documentary theatre photograph, single practical light source, deep shadow, faces and hands partly in darkness, muted desaturated blue-violet shadows and warm tungsten highlights, fine film grain, 35mm lens, candid and unposed, modern international black-box and end-on theatres, international mixed cast and crew of diverse ages and ethnicities, natural skin tones, no text, no letters, no numbers, no logos, no brand names, no signage, no posters with writing, no Japanese elements"`
Generate one at a time with `scripts/grok-image.sh out.webp "<subject>"`; Read every image; regenerate any with text, readable signs, logos, broken faces / hands, bright high-key look or saturated colour. ≤300 KB, ≤2000px, webp. No cut-outs.
| # | File | Subject (prompt core) | Ratio / size | Used on (page · block) | Home |
|---|---|---|---|---|---|
| P01 | `hero-wings.webp` | **KV left**: a stage manager (woman, 40s, West African) in the dark wing at a prompt desk, headset on, right hand raised with index finger up about to call a cue, a hooded desk lamp lights half her face and an open prompt book; vertical composition, figure centre-right | 0.9, 1440×1600 | Home §1 | ✔ |
| P02 | `hero-stage.webp` | **KV right**: an actor (man, 30s, South Asian) standing alone and still in a single pool of white-warm light on a bare black stage, a wooden chair beside him, seen from the wings side, dark empty auditorium beyond; vertical, figure centre-left | 0.9, 1440×1600 | Home §1 | ✔ |
| P03 | `play-lamp-room.webp` | poster: an older woman holding an oil lantern in a dark timber room set, lantern the only light | 0.70, 1120×1600 | Home §4 card 1 · Season board | ✔ |
| P04 | `play-winter-ferry.webp` | poster: two actors at a ship's rail set in stage haze, cold blue backlight | 0.70, 1120×1600 | Home §4 card 2 · Season board | ✔ |
| P05 | `play-nine-doors.webp` | poster: a woman pausing in one of several doorways of an open box set, warm practical lamp | 0.70, 1120×1600 | Home §4 card 3 · Season board | ✔ |
| P06 | `play-understudy.webp` | poster: a young actor (non-binary, 20s) in a dressing room lit by a row of mirror bulbs, looking at themself, costume half on | 0.70, 1120×1600 | Home §4 card 4 · Season board | ✔ |
| P07 | `play-salt-thunder.webp` | poster: two actors in stage rain under a single hard sidelight, wet coats | 0.70, 1120×1600 | Home §4 card 5 · Season board | ✔ |
| P08 | `rehearsal-room.webp` | wide: a rehearsal room with a taped floor plan, cast of six seated around a long table reading scripts, work lights and a window at dusk | 1.66, 2000×1205 | Home §7 band · Visit head · About head | ✔ |
| P09 | `production-desk.webp` | portrait: the artistic director (man, 50s, Latin American) and the designer at a production desk in empty stalls, a small desk lamp, the lit stage beyond | 0.8, 1280×1600 | Home §9 · Season Tickets head · Company head | ✔ |
| P10 | `box-office.webp` | portrait: at a timber box office counter at dusk, a staff member (woman, 60s, Northern European) points to a printed seat plan of plain dots (no letters) for a guest (young woman, East Asian) | 0.8, 1280×1600 | Home §8 · Season Tickets head | ✔ |
| P11 | `auditorium.webp` | wide: an empty steeply raked 200-seat end-on auditorium, dark seats, house lights at low glow, a single work light on stage | 1.6, 2000×1250 | Season head · The House head | |
| P12 | `lighting-focus.webp` | a lighting technician (woman, 30s) on a tall ladder focusing a theatre lantern, beam cutting haze | 0.8, 1280×1600 | The House head · About board | |
| P13 | `workshop-ferry.webp` | a set workshop: two builders sanding a curved timber ship's rail, sawdust in a shaft of light | 1.5, 1800×1200 | Home §10 (post 3) · About head · post 3 | ✔ |
| P14 | `cue-light.webp` | close-up: a stage manager's hand over a prompt book, a small cue-light box glowing beside it, pencil marks (no readable text) | 1.5, 1800×1200 | Home §10 (post 1) · About board · post 1 | ✔ |
| P15 | `audience-dark.webp` | audience in the dark seen from the side of the stage, faces lit softly by stage spill, mixed ages | 1.5, 1800×1200 | Home §10 (post 2) · Season head · About board · post 2 | ✔ |
| P16 | `dressing-room.webp` | portrait: an actor (woman, 50s, Black British) fastening a period costume in a narrow dressing room, rail of costumes | 0.8, 1280×1600 | Company head · About board | |
| P17 | `exterior-night.webp` | wide: the playhouse front at night, a former brick tram depot with tall lit doors open onto a wet street, people arriving, no signage | 2.34, 2000×855 | Home §12 · Visit head | ✔ |
**Per-page check (no repeats on one page)**: **Home** P01–P10, P13, P14, P15, P17 · **Season** P11 P15 (head) + P03 P04 P05 P06 P07 (board, once each; play sections are text only) · **Season Tickets** P10 P09 · **Visit** P17 P08 · **The House** P11 P12 · **Company** P09 P16 · **About** P08 P13 (head) + P12 P14 P16 P15 (milestone board) · **Journal** archive P14 P15 P13 (featured) · posts: 1 P14, 2 P15, 3 P13. All 17 files used; 12–18 ✔.
**Head pairs**: Season P11 + P15 · Season Tickets P10 + P09 · Visit P17 + P08 · The House P11 + P12 · Company P09 + P16 · About P08 + P13. Seats, Contact, The Call Sheet, Privacy have white heads (no photo).

---

## 11. Forms (form contract v1: `steps/form-contract-v1` exists)

Copy `pipeline/assets/forms/shippress-forms.php` unchanged to `inc/`, the CSS and editor JS unchanged to `assets/`; `require` it in functions.php. Patterns stay literal block markup with a small PHP island for `shippress_form_slot`. **No form in the home first screen; no `sp-reveal` on any form or its wrapper.**
- **Choose Your Seat (`seats`, booking; anchor `#request`)**: section "Request your seats" on `mist` `#EEECEF`: text left (x64, w420: one price any seat; we reply within one working day with seat numbers and a payment link), form right (w640): `shippress_form_slot( kind: contact )`. Fallback = buffered literal mailto button **"Email the box office"** (`wp-element-button`, ink fill, white text, radius 52px pill, href `mailto:boxoffice@butai-playhouse.example?subject=<forms_seat_subject>`) + hint "Opens your email app. Tell us the play, the date, how many seats and the seats you chose on the plan." Recommended CF7 fields (readme, not created by the theme): name*, email*, phone, ticket type* (select: Season ticket / Under-26 season / Single performance / Under-26 single / Preview), play* (select: the five plays / All five — season), date (date), number of seats* (number 1–8), seats from the plan (text, e.g. "F7, F8"), access needs (checkbox: wheelchair space / step-free / hearing loop / captioned), message (textarea), consent*, submit "Send seat request". The fallback never links to `/contact/`.
- **Contact (`contact`)**: on `mist` panel; slot kind contact; fallback mailto **"Email us"** → `hello@butai-playhouse.example` (subject `forms_contact_subject`). Fields: name*, email*, subject (select: Tickets and seats / Press / Schools and groups / Hiring the house / Other), message*, consent*.
- **The Call Sheet (`newsletter`)**: standalone page; form panel on **ink** `#130E15` (dark test case), padding 64px, radius 0, text white: `shippress_form_slot( kind: newsletter, email: hello@butai-playhouse.example, label: forms_email, submit: forms_subscribe, notice: forms_mail_notice, subject: forms_mail_subject )`.
- **Home §11**: the same newsletter slot on ink (dark). **Footer**: link "The Call Sheet →" only (no second slot). Light-ground cases: Seats and Contact on `mist`.
- Plugin order (shared helper): newsletter MailPoet (explicit id) → MC4WP; CF7 / WPForms only via an explicit dedicated newsletter id. Contact kinds CF7 → WPForms. Without plugins the newsletter shows a required `type=email` field + submit, native mailto POST, notice visible.
- **Tokens** (style.css, mapped to theme.json presets):
  - light: `--sp-form-accent: var(--wp--preset--color--ink)` #130E15; `--sp-form-on-accent: var(--wp--preset--color--white)`; `--sp-form-radius: 0` for fields, submit radius 52px (T(d) pill); `--sp-form-focus: var(--wp--preset--color--plum)` #824880 (2px outline, offset 2px); `--sp-form-surface: #FFFFFF`; `--sp-form-text: #130E15`; inputs 48px, 1px border `#D8D3DA`, Source Sans 3 400 1.0625rem, padding 12px 14px; labels Source Sans 3 600 caps .75rem ls .06em; submit 52px, Source Sans 3 600 caps 1.125rem, padding 14 40 10, hover bg plum `.3s cubic-bezier(0,0,.2,1)`; error text + border `#A3263B`; success panel `#E2EFE7` text `#2F6B4F`; checkbox / radio `accent-color: #824880`.
  - dark (`.bp-dark`, ink ground): `--sp-form-surface: #221A25`; `--sp-form-text: #FFFFFF`; `--sp-form-accent: #FFFFFF`; `--sp-form-on-accent: #130E15`; `--sp-form-focus: #C99BC6`; border `rgba(255,255,255,.35)`; submit is an **outline pill** (1px white, transparent, T(d)) that fills white on hover; error `#F2A7B4`; success `#A9D9BE`; labels inherit.
  - States styled: input, textarea, select, checkbox / radio, label, submit, hover, focus-visible, disabled, error, success; scoped to CF7, WPForms, MailPoet, MC4WP (+ Jetpack, `.wp-block-form`) classes and `.sp-newsletter-fallback`; no global input selectors.
- **i18n semantic keys** (`inc/i18n/en.php`, extract with `L10N_SEMANTIC=1`, rewritten locally in en, zh-TW, ja, fr, de): `forms_email` "Email address", `forms_subscribe` "Send me The Call Sheet", `forms_mail_notice` "This opens your email app. Send the message to subscribe; you are not subscribed yet.", `forms_mail_subject` "Subscribe to The Call Sheet", `forms_contact_subject` "Hello from the website", `forms_seat_subject` "Seat request", `contact_email` "Email us", `forms_seat_button` "Email the box office", `forms_seat_hint`, `forms_contact_hint`. Dynamic block attributes (label, submit, notice, subject, fallback) must be translated, not only visible pattern text.
- Validation: `form-check.py`, five-locale `form-runtime-check.php`, `repo-gates.sh forms`; a real CF7 check at 390px and desktop on light (Seats) and dark (The Call Sheet); never submit.

---

## 12. Similarity table (target ≈ 80%; values from reference-tokens.md)

| Dimension | Reference value (token) | Butai value |
|---|---|---|
| Ground | white `#FFFFFF` ~38% (T(a)) | `#FFFFFF` exact ~40% |
| Dark section | black `#000000` ~24%, 1117px season section (T(a)) | ink `#130E15` ~26%, board ≈1000px + newsletter + footer |
| Pale grey | `#EDEDEF` menu overlay (T(a)) | `#EEECEF` menu overlay, journal, pills |
| Marquee grey on black | `#999999` (T(a)) | `#8F8A93` |
| Colour floods | 4–5 flat floods, ~25%, tall half/third panels (T(a)) | 3 plum-family floods `#824880` / `#3C1F3D` / `#E3D8E4`, ~15%, three 480×706 tiles (re-coloured: quiet palette) |
| First-screen saturation | 37% (orange photo) (T(a)) | ≤8% (cap 15%) — deliberate deviation |
| Hero | two photos 720×820 (0.88) abutting, full-bleed (T(e)) | P01 + P02 720×792 (0.91), gap 0, full-bleed |
| Ticker bar | white strip 108px, 74/84px bold caps, marquee ≈88px/s (T(b), T(c), T(g)) | white 108px, Playfair 800 caps 74/84px, `sp-marquee` 27s ≈90px/s |
| Corner links | 5 white caps links 24px, dot MENU, centred name, arrows (T(f)) | 5 white caps links 20px, dot Menu, centred BUTAI, arrows |
| Nav bar | 48px, padding 12 16 7, colour inverts over black (T(c), T(g)) | 48px, padding 12 16 7, `mix-blend-mode: difference` |
| Display type | Founders Grotesk bold caps 74px / 84px (T(b)) | Playfair Display 800 caps 74px / 84px (serif row) |
| Body / UI | Suisse 400 20/24; UI caps 24px +0.02em (T(b)) | Source Sans 3 400 18/28; UI caps 20px +0.02em |
| Intro | 24/28.3, max 950px, centred (T(b), T(c)) | 24/32.4 lead, max 950px box, text left-aligned |
| Panel statements | light 50/53 (T(b)) | Playfair 400 50/53 |
| Menu overlay | `#EDEDEF`, items 48/44.6, scaleIn (T(b), T(g)) | `#EEECEF`, items 48/44.6, scaleIn .4s |
| Board | padding-top 128, marquee row 108, cards 258×368 (0.70), gaps 128 (T(c), T(e)) | padding 128, row 108, cards 258×368, gaps 96, horizontal scroller |
| Card label | 10px dot + 11px caps, bold caps 20px title (T(e), T(f)) | 10px dot + 12px caps, Playfair 700 caps 20px |
| Tiles | 480×706, text top, pill 52px radius, 1px, padding 14 56 10, caps 20px (T(c), T(d)) | identical |
| Wide band photo | 1196 wide, inset 122 (T(e)) | P08 1196×720, inset 122, + parallax 10% |
| Radius / shadow | 0 except pills / none (T(d)) | 0 except pills (52px) / none |
| Scattered wordmark | 4 letters, offsets 45–60px, 80px black (T(f)) | BUTAI, offsets 0/44/−12/60/20, 80px ink |
| Arrows | long thin 70px × 1.5px (T(f)) | 70px × 1.5px on the board, arrows in links |
| Motion | marquee ≈88px/s linear; fade 2.5s / 0.4s linear; pulsate 1.8s; `cubic-bezier(.65,.05,.36,1)`, `(0,0,.2,1)` (T(g)) | marquee 27–32s linear; hero fade 2.5s / .4s; cue pulse 1.8s; reveals .8s `(.65,.05,.36,1)`; hovers .3s `(0,0,.2,1)` |
| Imagery | documentary theatre photographs, faces, rehearsal rooms, stage in blue-violet (T(e)) | same type, low-key, blue-violet + tungsten |
| Secondary (syuz'gen) | vertical caps section label at right, pale pill arrow | T4 labels ≥1024, `#EEECEF` 56×28 pill arrows |

---

## 13. Home acceptance checklist (stage 1)

1. 1440×900 first screen: P01 x0–720 and P02 x720–1440, y0–792, abutting with no gap (stage manager calling a cue / actor in a pool of light); plum 14px cue dot on the seam at y≈428 pulsing; fixed transparent header "● Menu" / centred "BUTAI" / "→ The season" in white; labels "● THE WINGS · 19:29" / "● THE STAGE · 19:29"; corner links "→ Book a season" / "→ Now playing: The Lamp Room"; white ticker y792–900 with the H1 in 74px Playfair 800 caps running. Nothing else.
2. 390×844: header in flow; panes side by side 195px each; ticker 2.5rem; corner links in flow below; no vertical text, no absolute labels, no overlap; no horizontal overflow.
3. §2: scattered BUTAI wordmark (5rem) left-aligned, three paragraphs in a 950px column, link.
4. §4: full-bleed ink board; dim 74px marquee line; five 258×368 poster cards P03–P07 in a row with 96px gaps, dot labels + caps titles; 70px arrow; header text inverts (blend) over the board.
5. §5: horizontal rail with 7 dated milestones (plum dots for openings); T4 vertical label at right; stacked rows <782.
6. §6: three abutting full-bleed tiles plum / aubergine / lilac, ≥706px tall, titles 3.125rem, prices €190 / One price, any seat / €48, outline pills at the foot.
7. §7 P08 band inset 122px with visible parallax and caps statement; §8 P10 + price table — 6 rows, prices match §9 (€190 / €95 / €48 / €24 / €32 / €12), full column width ≥782, price column nowrap right, not clipped at 800 / 1280, stacked <782; §9 P09 + 4 ruled people rows; §10 3 journal rows on mist; §11 newsletter slot on ink (email + submit + notice without plugins; no reveal); §12 P17 + address / hours (Tue–Sat 12:00–18:00, curtain 19:30, Sun 15:00); ink footer with marquee and `#site-index`.
8. 14 unique images on home (≥8); 0 cut-outs; every image Read-checked (no text, signs, logos; low-key, desaturated).
9. ≥250 English words (target ≈680), ≥3 narrative ¶ of ≥20 words; facts match §9 exactly.
10. Effects: `sp-marquee`, `sp-reveal--up` + `sp-stagger`, `sp-parallax` only; hero has no reveal (CSS fade + cue pulse only); no reveal on forms, table, hours; `check-parallax.mjs` passes desktop + mobile; reduced motion shows final state, marquees static.
11. First-screen saturated share ≤8% (cap 15%); largest theme.json size 4.625rem (≥4.25rem); fonts via theme.json fontFace (Playfair Display, Source Sans 3, Noto Serif TC / JP subsets); editor matches front end.
12. Radius 0 except pills; no shadows; exactly one top menu; no `content:` text in CSS (dots are empty spans / SVG).
13. auto-gates `1 1` pass for en; `pattern_source.py` passes.
