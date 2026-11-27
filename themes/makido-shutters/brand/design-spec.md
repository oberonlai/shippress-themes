# Design spec: Makido Shutters (makido-shutters)

Plan row b41-5 · type **landing** (category business-services, `rules.landing_track`) · archetype horizontal-strip · page_structure landing-longform · nav top-bar · font_direction **sans** · IMAGERY **photo** (documentary).
Main reference: **Sanwa Holdings**, https://www.sanwa-hldgs.co.jp/ (door, shutter and opening-solutions group; same trade). No secondary reference.
Token source: `brand/reference-tokens.md`, cited below as `tok(a)` … `tok(g)`. Screens: `brand/ref/sanwa-first.png`, `scroll-sanwa-notices-900.png`, `scroll-sanwa-before-lens-1800.png`, `scroll-sanwa-lens-rise-2700.png`, `scroll-sanwa-photorow-3600.png`, `scroll-sanwa-lens-foot-4500.png`.
Photos, copy, wordmark and marks are all our own. We take the reference's structure, motion idea, colour relationships and measurements; never its pictures, words, CG, globe artwork or logo.

Class prefix for theme CSS: `mk-`. Effects use only the sp-scroll classes, copied unchanged from `pipeline/assets/sp-scroll/`.
Imagery row: **photo → real documentary photograph STYLE** (§13). No illustration anywhere.

---

## 1. Signature techniques (all three appear on the home page at full strength)

### T1. Lens band with a cover reveal: a deep radial band bounded top and bottom by giant ellipse arcs, sliding up over a pinned hero (Sanwa vision band; `ref/scroll-sanwa-lens-rise-2700.png`, `scroll-sanwa-photorow-3600.png`, `scroll-sanwa-lens-foot-4500.png`, `tok(c)(d)(g)`)
- **What Sanwa does.** Right after the news rows, a blue band rises with a **huge convex arc** as its top edge (crown at the centre, the arc meeting the viewport edges ~250 px lower) and closes with the mirror arc at the bottom. It is one pseudo-element, `border-radius: 50%`, **150 % of the viewport wide** (180 / 220 / 400 % on narrower screens), 100 % of the section high, filled with `radial-gradient(105% 50% at 50% 50%, #011657 0%, #005CAA 100%)`. Inside, centred and white: a 40 px / 600 heading with a **64 × 4 white bar** under it, a ~56 px English statement, a 24 px sub line flanked by short dashes, a white pill button with a blue round chevron disc, then a **row of four abutting install photos** (333 × 209 each, 1.6 : 1, 0 gap, 0 radius), then a second centred heading + bar and **stat numerals** (72 px / 500 + 30 px unit). The hero above is `position: sticky`, so the band **slides up over the pinned hero** like a lowered shutter (`js-topParallax`).
- **Ours, home §2 "What a quote includes" (`#quote`).** The hero and §2 sit inside one wrapper `div.mk-pin`. At ≥ 1024 px and `prefers-reduced-motion: no-preference`, the hero is `position: sticky; top: var(--mk-header-h)` (104 px), `z-index: 0`; §2 is `position: relative; z-index: 1`. The band therefore scrolls over the pinned photo; the **transparent top corners outside the ellipse show the hero photo underneath while it rises**. Pure CSS, no JS, no scroll listener.
  - **Geometry (keep exactly):** `section.mk-lens` `overflow-x: clip`; `::before` `position:absolute; top:0; bottom:0; left:50%; width:150%; transform:translateX(-50%); border-radius:50%; z-index:-1; background: radial-gradient(105% 50% at 50% 50%, #18263A 0%, #46607C 100%)`. Width 150 % at ≥ 1280, 180 % at 782–1279, 220 % at 480–781, 400 % below 480 (`tok(d)`). Padding `160px 16px 200px` (desktop), `112px 16px 140px` (mobile). Section background `linear-gradient(transparent 50%, #FFFFFF 50%)` so the **bottom** corners show white, never the hero.
  - **Content, top to bottom, all centred, max-width 1000 px except the photo row:**
    1. H2 "What a quote includes", 2.5rem / 600 / 1.4, white, padding-bottom 20 px, then the **64 × 4 bar** in white, margin-bottom 40 px (`tok(b)(f)`).
    2. Statement 3.5rem / 500 / 1.15 white, Schibsted Grotesk: "One visit, one written quote, one fitting day."
    3. Sub line 1.5rem / 600 white flanked by 24 × 2 white dashes (pseudo-elements on the paragraph, not text): "for loading bays, shopfronts and service hatches".
    4. Narrative paragraph 1.0625rem / 1.85 #DDE3E8, max 680 px (≥ 40 words; text in §4).
    5. **Photo row**: three abutting photos img-02, img-03, img-04, each **1.6 : 1**, **0 gap, 0 radius**, together 1200 px wide (alignwide; 400 × 250 each). Mobile: one column, still 0 gap, full width.
    6. The repeated CTA pill (white, §8) "Book a site measure" → `/contact/`, 48 px below the row.
    7. Second centred H2 "A standard bay, in figures" + 64 × 4 white bar, margin-top 104 px.
    8. Three figures in a 3-column grid (max 900 px): numeral Schibsted 4.5rem / 500 white with unit 1.875rem / 500 (`tok(b)` stat 72 / 30 px); label above the numeral 1.125rem / 600 #DDE3E8 (Sanwa puts the label above). `45 min` "Site measure" · `3 days` "Written quote (working days)" · `1 day` "Fitting, per standard bay". Note under the grid, 0.8125rem #C9D0D5, left-aligned at the grid start (Sanwa footnote position): "Standard bay: up to 5 m wide. Wider or fire-rated openings take two fitting days."
  - **Must not be weakened:** the arcs must be clearly curved (crown-to-edge drop ≥ 200 px at 1440); the fill must stay **deep** (#18263A centre, white text ≥ 10 : 1), never a pale tint; the bar stays 64 × 4; the photos stay abutting with no gap or radius; the pin + slide-over must be visible in `?sp-motion` at 1440 × 900.

### T2. Hairline notice boxes with an inline chevron (Sanwa notices; `ref/scroll-sanwa-notices-900.png`, `tok(c)(d)(f)`)
- **What Sanwa does.** Under the hero, three full-container (1200 px) boxes stacked vertically: **1 px solid #C2CDD1, radius 0, padding 32 px, 32 px between boxes**, no fill, no shadow. Each holds one or two lines of 16 px / 500 text ending in a small blue chevron, the whole box a link.
- **Ours, home §3 "Before you book" (`#before`).** H2 centred 2.5rem / 600 + 64 × 4 bar in #5A6570. Then exactly **three boxes**, 1200 px, 1 px **#C9D0D5**, radius 0, padding 32 px, margin-bottom 32 px, white fill. Text 1rem / 1.75 / 500 #25292D, max two lines at 1200 px; the inline chevron is an inline SVG 10 × 14, stroke #5A6570 2 px, 12 px left margin, `aria-hidden`. Whole box is an `<a>`; hover: border #5A6570, chevron `translateX(4px)` .3 s ease (`tok(g)`). Box texts in §4.
- **Must not be weakened:** square corners, hairline only (no fill, no shadow, no icon on the left), full container width, the chevron right after the last word (not pushed to the box edge).

### T3. Centred heading with a 64 × 4 bar over a full-bleed photograph (Sanwa about band; `ref/scroll-sanwa-lens-foot-4500.png`, `tok(e)(f)`)
- **What Sanwa does.** On white, a large centred heading (40 px / 600 #333), a **64 × 4 brand-blue bar** 20 px below it, 40 px gap, then an **edge-to-edge photograph** (no inset, no radius) of people, full viewport width.
- **Ours, home §6 "The crew who measure" (`#crew`).** White ground. H2 centred 2.5rem / 600 #25292D, bar 64 × 4 **#B8862F** (our one ochre moment, the "guide-rail" mark), 40 px gap. Then a Cover block alignfull, **min-height 560 px at 1440 (2.57 : 1), 320 px at 390**, background img-12, `sp-parallax` `--sp-par: 10%` (§10), overlay 0 % (no scrim, no text on the photo). Directly under the photo, on white: the six named people as a **3 × 2 text list** (name 1.125rem / 600 #25292D, role and years 0.9375rem #5F676D, 1 px #C9D0D5 top rule per cell, 24 px padding-top) — no portraits, not a team-card grid.
- **Must not be weakened:** heading and bar sit **above** the photo, centred; the photo is truly full-bleed (0 inset, 0 radius); nothing is written on it.

### Supporting devices (not counted as signatures)
- **S1 White pill with a round chevron disc** (Sanwa "70th" pill and section buttons, `tok(d)(f)`): pill radius 100 px, height 60 px, min-width 340 px, text 1.0625rem / 600 #232B33 centred, disc 40 px #5A6570 with a white 2 px chevron, 10 px from the right end, very soft shadow `0 6px 24px rgba(35,43,51,.14)`. On white grounds the pill gets a 1 px #C9D0D5 border. This is the **one repeated CTA**: label always "Book a site measure", href always `/contact/`.
- **S2 Peeking photo row** (Sanwa PICKUP slider, `tok(e)`): cards 372 × 215 photos (1.73 : 1), radius 14 px, caption 1.25rem / 600 below with a chevron. Ours has **no autoplay and no JS**: a CSS `scroll-snap-type: x mandatory` row, cards 372 px, gap 40 px, row starts at the container edge and the 4th card peeks at the right viewport edge. Used in §5 only.
- **S3 Back-to-top disc**: 52 px white circle, 1 px #C9D0D5, slate chevron, fixed bottom-right 24 px, ≥ 782 px only (hidden on mobile so it never overlaps text).

### Continuation on inner pages (≥ 4 pages carry T1–T3)
Every inner page except legal pages opens with the **T1 lens head**: a 360 px section (mobile 260 px) whose `::before` is the same 150 % ellipse moved up (`top: -100%; bottom: 0`) so only the **bottom arc** shows; same radial; H1 white 3.25rem / 600 centred, 64 × 4 white bar, one-line lead #DDE3E8. Breadcrumb row 0.8125rem #C9D0D5 inside the head, above the H1.

| Page | T1 | T2 | T3 |
|---|---|---|---|
| About `/about/` | lens head | — | "Since 2009" heading + bar over full-bleed img-17 |
| Doors we fit `/doors/` | lens head | 3 notice boxes "Not sure which door you have?" | heading + bar over full-bleed img-07 |
| How it works `/how-it-works/` | lens head + the figures band (T1 full, with both arcs, `1 day` figures) | 3 notice boxes "Before the visit" | — |
| Prices `/prices/` | lens head | 3 notice boxes "Never extra" | — |
| Our work `/work/` | lens head | — | heading + bar over full-bleed img-14 |
| Book a site measure `/contact/` | lens head | 2 notice boxes beside the form ("What happens next", "Emergency call-outs") | — |
| Newsletter `/newsletter/` | full lens band (both arcs) holding the form | — | — |

T1 on 7 pages, T2 on 4, T3 on 3: every signature continues on ≥ 3 inner pages, at least one on 7.

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- **Picture** (`ref/sanwa-first.png`): a bright, looping **CG scene of a clean future city** filling the viewport: pale towers, a translucent tube **arcing across the sky**, drifting glass bubbles. Over it a transparent **two-tier header** (utility row, main nav). Bottom-right: a **white pill link with a blue round chevron disc** (360 × 60, bottom 48, right 125) and a 46 px **outline circle** control beside it.
- **Story**: "open the future, build the hub" — a door-and-opening group as the connection between buildings and the people who use them; confident, clean, bright.
- **Signature motion**: the scene moves by itself (video), and on scroll the hero **stays pinned while the deep blue lens band slides up over it**, like a shutter being lowered over the picture.

### (2) Our transposed scene (same composition idea, same motion idea, image type = high-key documentary photograph)
- **Scene, img-01**: a bright loading bay in daylight. **Two fitters in plain grey workwear and gloves guide a half-lowered galvanised roller shutter**: one (woman, 30s) has a gloved hand flat on the vertical **guide rail**, the other (man, 40s) steadies the bottom bar; the bright yard is behind the opening. Figures sit in the left 20–50 % of the frame so they stay clear of the panel.
- **Story**: "We measure the bay before anything is made" — a contractor who is the plain, careful link between a building's opening and the people who use it every day.
- **Motion**: the photo stays **pinned** while the lens band (our quote band) rises over it — the shutter in the photo is half-lowered, and the band completes the gesture. The lens crown already **peeks 56 px into the first screen** at the bottom centre, so the motion is announced before scrolling. Photos replace CG: the reference's content imagery is install photography, and the plan row is real-photography.

### (3) KV checklist (all six implemented in the first screen; visible at 1440 × 900 and 1280 × 800; mobile notes in §3)

| # | Reference element | Our equivalent | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Bright scene filling the first screen (CG city) | Documentary photo of two fitters guiding a half-lowered roller shutter, hand on the guide rail | Left of the diagonal: 62 % of the hero width at the top, 54 % at the bottom, full hero height | Pinned (sticky) during the cover reveal ≥ 1024 px; no reveal, no zoom | img-01 |
| 2 | Translucent tube arcing across the sky (the leading line) | The shutter's vertical guide rail in the photo + a **2 px white hairline along the diagonal seam** (SVG line, `vector-effect: non-scaling-stroke`, opacity .9) | Seam from (54 %, bottom) to (62 %, top) | Static | img-01 (rail) |
| 3 | Transparent two-tier header over the scene | Two-tier header: utility row 32 px (phone · hours · service area · languages) + main row 72 px (wordmark, anchor menu, outline pill CTA) | Top 0–104 px, above the hero | Sticky at ≥ 1024 px (CSS only, solid white, no colour change on scroll) | — |
| 4 | White pill link with a blue round chevron disc, bottom-right | **Booking bar**: white pill strip with two facts + "Book a site measure" and a 44 px slate chevron disc | Hero foot: bottom 40 px, from 28 % to 94 % of the hero width, crossing the seam | Static; hover disc `translateX(4px)` .3 s ease | — |
| 5 | 46 px outline circle control beside the pill | 46 px outline circle, 1.5 px white, down chevron, link to `#quote` (aria-label "Skip to what a quote includes") | On the photo, left 40 px, bottom 51 px (vertically centred on the pill) | Static; hover fills white with slate chevron .3 s | img-01 (behind) |
| 6 | Lens band sliding over the pinned hero | Lens band crown (deep radial, 64 × 4 bar below it on scroll) visible as a 56 px dome at the bottom centre of the first screen; rises over the pinned hero on scroll | Directly under the hero, centred | Cover reveal (CSS sticky) ≥ 1024 px; plain flow below | img-02, img-03, img-04 inside the band (below the fold) |

Never write this as "adapted, not copied" and drop the scene: the half-lowered shutter, the hand on the rail, the pill at the foot and the band sliding over are all required.

---

## 3. First-screen composition

**hero_composition: diagonal-split · hero_text: on-solid-panel · hero_footer: booking-bar · hero_fingerprint: diagonal-split/on-solid-panel/booking-bar**

- **diagonal-split** — the hero is split by **one straight diagonal** running from bottom-left to top-right: photo on the **left** (62 % wide at the top edge, 54 % at the bottom edge, mean 58 %), solid panel on the **right** (38 % → 46 %, mean 42 %). This mirrors Fuchi Glazing (panel left, photo right) on purpose.
- **on-solid-panel** — every hero word (eyebrow, H1, lead, text link) is on the panel. Nothing is written on the photo.
- **booking-bar** — a white pill strip docked at the hero foot, crossing the seam, holding two booking facts and the CTA. It is not a three-cell info bar and not a table.

### Desktop (≥ 1024 px)
- `div.mk-pin` > `section.mk-hero` (alignfull) + `section.mk-lens`.
- **Hero height**: `clamp(600px, calc(100svh - 104px - 56px), 820px)` → 740 px at 1440 × 900, 640 px at 1280 × 800, so the lens crown shows 56 px below.
- **Photo layer** `figure.mk-hero__photo`: absolute, left 0, top 0, width 64 %, height 100 %, `object-fit: cover; object-position: 35% 50%`. No reveal, no zoom.
- **Panel** `div.mk-hero__panel`: absolute, left 50 %, width 50 %, height 100 %, `clip-path: polygon(24% 0, 100% 0, 100% 100%, 8% 100%)` (seam at 62 % top / 54 % bottom of the hero). Fill `radial-gradient(105% 60% at 70% 50%, #232B33 0%, #5A6570 100%)` — dark at the text, lighter toward the edges (the same deep-to-mid relation as the lens band, `tok(d)`).
- **Seam line**: inline SVG absolute over the whole hero, `viewBox="0 0 100 100" preserveAspectRatio="none"`, `<line x1="54" y1="100" x2="62" y2="0">`, stroke #FFFFFF, 2 px, opacity .9, `aria-hidden`.
- **Panel text column**: absolute, left 65 %, right 6 %, vertically centred (translateY to sit 24 px above centre so it clears the booking bar):
  - eyebrow 0.8125rem / 600 / .12em uppercase #C9D0D5: "Doors & roller shutters · Wrenfield";
  - **H1** Schibsted Grotesk **4.5rem / 700 / 1.02 / −0.015em** white, 3 lines: "Measured before it's made." (fr/de 4.25rem with `hyphens: auto`; zh-TW/ja 3.375rem);
  - 64 × 4 **#B8862F** bar, 24 px above and below;
  - lead 1.125rem / 1.7 #E6EAED, max 420 px, ~32 words (§4);
  - text link 0.9375rem / 600 white, underline 1 px offset 4 px: "See what a quote includes" → `#quote`.
- **Booking bar** `div.mk-book`: absolute, bottom 40 px, left 28 %, right 6 %, height 68 px, white, radius 100 px, shadow `0 6px 24px rgba(35,43,51,.14)`, display flex, `z-index: 2`. Three segments split by 1 px #C9D0D5 vertical rules (24 px high):
  1. "Survey visits" (0.75rem / 600 / .1em caps #5F676D) over "Mon–Fri, 7:30–16:00" (1rem / 600 #25292D);
  2. "Written quote" over "Within 3 working days";
  3. CTA link (flex 1.2): "Book a site measure" 1.0625rem / 600 #232B33 + 44 px disc #5A6570 with a white chevron, 12 px from the right end → `/contact/`.
- **Outline circle** (KV 5): left 40 px, bottom 51 px.

### 1280 × 800
Same; H1 4.25rem; booking bar left 24 %, right 4 %; panel column left 64 %.

### 782–1023 px
No pin. Hero height 640 px; photo 66 % / panel from 58 %; booking bar left 6 %, right 6 % (full width pill); H1 3.5rem; outline circle hidden.

### Mobile 390 × 844 (no absolute text anywhere)
Stacked flow, in order:
1. header 64 px (wordmark + Menu button);
2. photo img-01, 390 × 300, `object-position: 35% 50%`, `clip-path: polygon(0 0, 100% 0, 100% 82%, 0 100%)` — the same bottom-left → top-right diagonal;
3. panel (same radial), `margin-top: -54px; padding: 86px 24px 32px`: eyebrow, H1 **2.75rem / 700 / 1.05**, ochre bar, lead (max 4 lines);
4. booking card inside the panel bottom: white, radius 24 px, padding 20 px; the two facts stacked as label/value pairs, then the CTA pill full width (60 px).
No vertical text, no labels over the photo, no overlap; the outline circle is hidden. The lens crown appears after the panel.

**First-screen saturation:** panel and photo are low-chroma; only the ochre 64 × 4 bar is saturated (< 0.1 %). Target ≤ 6 % (cap 15 %, plan note 30 %).

---

## 4. Home sections (landing-longform: one long conversion page; anchor menu; one repeated CTA)

**Anchor menu** (the single top menu): Quote `#quote` · Before you book `#before` · Doors `#doors` · On site `#measure` · Crew `#crew` · Lead times `#lead` · Work `#work` · Prices `#prices`, plus the outline pill "Book a site measure" → `/contact/`. Inner pages are linked from the footer only. On inner pages the anchors are `/#quote` etc.

| # | Section (anchor) | Purpose | Layout and images | Copy | Motion |
|---|---|---|---|---|---|
| 1 | Hero `#top` + booking bar | KV, the one CTA | §3. img-01 | eyebrow, H1, lead ≈ 32 w, 2 facts | pin only (≥ 1024); none else |
| 2 | **Lens band** `#quote` (T1) | what a quote includes + figures | §1 T1. img-02, img-03, img-04 abutting 1.6 : 1 | H2, statement, sub line, ≥ 40 w paragraph, 3 figures + note | 3 figures `sp-reveal sp-count` only |
| 3 | **Before you book** `#before` (T2) | the three things people ask first | H2 centred + bar; 3 hairline boxes 1200 px | 3 × 20–30 w | box stack (one wrapper) `sp-reveal--up` |
| 4 | **Doors we fit** `#doors` (S2) | the five door types | H2 centred + bar; peeking scroll-snap row of 5 cards 372 px, photos 1.73 : 1 r14, caption + chevron, each card → `/doors/#<type>`. img-07 … img-11 | 5 captions + 1 line each (≈ 12 w) | none (horizontal row) |
| 5 | **On site** `#measure` | narrative: what the 45-minute visit is | H2 centred + bar. 12 columns: img-05 **4:5** in cols 1–5 (480 × 600); text in cols 7–12: 3 paragraphs; then img-06 **3:2** (480 × 320) under the text in cols 7–11, 40 px below | 3 paragraphs, ≥ 180 w total | none |
| 6 | **The crew who measure** `#crew` (T3) | people, the T3 band, required parallax | §1 T3. img-12 full-bleed Cover `sp-parallax --sp-par:10%`; 3 × 2 name list under it | H2 + 1-line lead + 6 names/roles | heading `sp-reveal--up`; parallax |
| 7 | **How long it takes** `#lead` | lead times | Pale band #EEF1F3. H2 centred + bar. 12 columns: cols 1–7 five hairline rows (label 1.125rem / 600 left; value Schibsted 1.5rem / 600 right, nowrap; 1 px #C9D0D5 between rows, 24 px padding); cols 9–12 img-13 **4:5** (384 × 480) | 5 rows + 1 paragraph ≥ 30 w | none |
| 8 | **Recent work** `#work` | proof, 3 cases | H2 centred + bar. Three rows in T2 style (1 px #C9D0D5 box, padding 32 px, 32 px apart): photo 1.6 : 1, 320 × 200, flush left inside the box, r0; text right: H3 1.25rem / 600, meta line 0.8125rem caps #5F676D (place · doors · days), 2 sentences. img-14, img-15, img-16 | 3 × ≈ 45 w | list wrapper `sp-reveal--up` |
| 9 | **Prices** `#prices` | 7-row price table | H2 centred + bar; full-width table (§11); note line; the CTA pill centred 40 px below | 7 rows + note | **none** |
| 10 | **Survey-day list** `#list` (newsletter slot) | waitlist: next month's open survey days | Pale band #EEF1F3. Cols 1–5: H3 1.5rem / 600 "Next month's survey days, first" + 2 lines; cols 7–12: `shippress_form_slot` newsletter (§12) | ≈ 35 w | **none** |
| 11 | **One way to ask** (closing lens, T1 small) | the repeated CTA, last time | A 420 px lens band with both arcs (same geometry, 150 %); white H2 "One way to ask" + bar, one line "Book a 45-minute site measure. We reply within one working day with two visit times.", the CTA pill, phone line 0.9375rem #DDE3E8 | ≈ 30 w | none |
| — | Footer | address, pages, contact | #232B33, 4 columns: wordmark + address; Pages (About, Doors we fit, How it works, Prices, Our work, News, Newsletter); Contact (phone, email, hours); Legal (Privacy, Terms). 0.875rem #C9D0D5, links white | — | none |

**Key copy (English master; other languages rewritten locally, numbers identical):**
- Hero lead: "Makido Shutters replaces and fits industrial doors, roller shutters and shopfront grilles within 60 km of Wrenfield. Every job starts with a 45-minute site measure and a quote written down within three working days."
- §2 paragraph: "We come out, measure the opening three times, photograph the guide rails, the drum and the power supply, and write down exactly what we will make, what we will take away and which day we can fit it. Nothing is ordered until you have read it."
- §3 boxes: (1) "A quote includes the visit, the new door, fitting, removal and recycling of the old one, and an aftercare visit at 12 months. ›" → `#prices`. (2) "Standard bays up to 5 m wide are fitted in one day; we close one bay at a time so you can keep loading. ›" → `#lead`. (3) "Emergency call-outs for a shutter stuck open or shut: same day within 25 km, Monday to Saturday. ›" → `/contact/#emergency`.
- §4 captions: Roller shutters · Sectional overhead doors · Shopfront grilles · Counter and hatch shutters · Fire-rated shutters.
- §5 three paragraphs (≥ 60 w each): arriving and signing in, measuring width three times and height twice, checking headroom and side room for the drum; photographing the rails, the motor and the isolator; talking to whoever opens the door every morning ("the person who uses the door knows where it sticks"); leaving with nothing promised that has not been measured.
- §6 lead: "Six people, two vans, one workshop in Brannock Works. The person who measures your bay is on the crew that fits it."
- §7 rows: Site measure — 45 min · Written quote — 3 working days · Manufacture — 10–15 working days (fire-rated: 20) · Fitting — 1 day per standard bay (2 for wider or fire-rated) · Aftercare visit — at 12 months. Paragraph about ordering only after a signed quote and agreeing the fitting day before manufacture starts.
- §8 cases: see §14.

**Counts:** home image positions **16** (img-01 … img-16, none repeated). English words ≥ 600 (row minimum 250). Narrative paragraphs ≥ 20 words: §2 (1), §5 (3), §7 (1), §8 (3) → 8. `.sp-reveal` elements: 3 figures in §2 (`sp-reveal sp-count`) + §3 box stack + §6 heading + §8 case list = **6** (≤ 60 % of 11 sections, counted either by element or by section: 4 sections). The §2 heading group is **not** revealed. None in the hero, the doors row, §5, §7, the table, the form or the closing lens.

### Not the same as recent home pages
| Theme | Home order (from stage-a) | Makido Shutters differs because |
|---|---|---|
| Fuchi Glazing (nearest trade) | slate slanted-edge panel hero + info-bar → survey plate → in order → what we replace → why twice → strip → projects → prices → one way to ask → waitlist | Panel is on the **right** with a radial fill, cut bottom-left → top-right; the foot is a **white pill** crossing the seam, not a 3-cell info bar. The section after the hero is a **deep elliptical band sliding over a pinned hero**, not a survey plate. No square catalogue (ours is a peeking snap row), no ledger, no masonry; work is shown in hairline boxes. The tail is prices → waitlist → **closing lens band**. |
| Shirogane College | audience row → hero + 3-cell booking bar → notices → who → sticky-media day → six hexes → ward band → tutors → students → fees → where next → intake → letter | No audience row, no hexes, no sticky media, no notice label cells (our notices are plain hairline boxes with inline chevrons), no tutor cards. |
| Seimyaku Clinic | veil hero → message → paced care → what we watch → three stories → team → fees → visit → notes → letter | No veil, no centred message opener; ours is a conversion page with an anchor menu and one CTA. |
| Enban Records | keyword bar + hero slide → who → how a listening works → crate → counter band → story → from the desk → visit → letter | No keyword bar, no crate cards, no counter band on ink; our figures live inside the lens. |

---

## 5. Inner pages (landing track: 11 pages + 3 posts)
Every inner page: **T1 lens head** (§1), content with centred H2s + 64 × 4 bar, and the closing lens CTA (§4 row 11) except on legal pages and `/thanks/`. No image repeats within a page.

1. **About** `/about/` — lens head "About Makido Shutters". Founding story (2009, Aaron Makido, after a decade fitting other people's quotes: "nobody had measured the bay"). T3 "Since 2009" heading + bar over full-bleed img-17 (parallax 6 %). Years as plain text rows (2009 one van · 2013 Brannock Works workshop · 2017 fire-rated team · 2022 second van). The six people (name, role, year joined, one sentence each) as a 2-column text list. A "day" paragraph (§14).
2. **Doors we fit** `/doors/` — lens head; T3 heading + bar over full-bleed img-07; five anchored subsections `#roller`, `#sectional`, `#grille`, `#counter`, `#fire`, each: H3, 2 paragraphs, a 3-row spec list (sizes we fit, operation, typical lead time) beside its photo (img-08 … img-11, img-03 for `#roller`; 3:2 right, alternating left/right). T2 boxes "Not sure which door you have?" (3 boxes → contact, photos by email, how-it-works).
3. **How it works** `/how-it-works/` — lens head; six steps as **hairline rows** (not a grid, not a vertical timeline): Request · Site measure (45 min) · Written quote (3 working days) · Manufacture (10–15 / 20) · Fitting day (1 / 2) · Aftercare (12 months), each row: label left 200 px, 2 sentences right. img-02 and img-06 between rows (3:2). Full T1 figures band (both arcs) with the same three figures. T2 boxes "Before the visit" (access to the bay, power isolated, someone with keys).
4. **Prices** `/prices/` — lens head; the full price table (same 7 rows as home, §11); T2 boxes "Never extra" (visit within 25 km, removal and recycling, aftercare visit); service-contract paragraph beside img-18 (3:2).
5. **Our work** `/work/` — lens head; T3 heading + bar over full-bleed img-14; the 3 cases long-form (≈ 150 w each) as hairline boxes with 2 photos each (case 1 img-04 + img-02, case 2 img-15 + img-05, case 3 img-16 + img-13; img-14 is the head band), a meta row (measured / quoted / fitted dates).
6. **Book a site measure** `/contact/` (contact + booking) — lens head; left cols 1–7: H2 + `shippress_form_slot` contact (§12); right cols 9–12: address, hours, phone, email, then 2 T2 boxes: "What happens next" and `#emergency` "Emergency call-outs" (same day within 25 km, Mon–Sat, €120 call-out). img-18 under the boxes (4:5). No reveal on the form column.
7. **Newsletter** `/newsletter/` — standalone **waitlist / early-access** page "Survey-day list". Lens head without lead; then a **full lens band** (both arcs) holding H2 "Get next month's survey days first", a 3-line list of what we send (open survey days, lead-time changes, one short job note a month) and the newsletter slot with dark tokens (§12). img-12 is not used here; img-17 (3:2) beside the intro on white.
8. **News** `/news/` — the single `posts` page, empty content. Lens head without photo. List: date 0.875rem #5F676D 140 px · category pill (20 px high, radius 100, #5A6570, white 0.75rem — Sanwa tag pill `tok(f)`) · title 1.125rem / 600 #25292D · one-line excerpt; 1 px #C9D0D5 rules (Sanwa news rows).
   - Posts (3), category "Site notes", tags "site measure", "roller shutters", "fire-rated":
     - "What we measure on a 45-minute site visit" (featured img-05)
     - "Manual or electric: choosing a shopfront shutter" (img-09)
     - "Why a fire-rated shutter takes 20 working days" (img-11)
   - single.html: lens head without photo (title in it), 720 px text column, featured image 3:2 below the head.
9. **Privacy** `/privacy/`, 10. **Terms** `/terms/` (quote validity 60 days, 30 % deposit on order, balance on fitting day), 11. **Thanks** `/thanks/` ("We'll reply within one working day with two visit times", img-01 as a 3:2 photo, link back home). No reveal on legal pages.

theme-meta `pages`: home, about, news, article, category, tag, newsletter → `/newsletter/`, contact → `/contact/`. Exactly one `posts` page (`/news/`). Templates: front-page, page, single, archive, category (= archive), tag (copied from archive, label TAG), 404, search.

---

## 6. Colour (source `tok(a)`; relationship and shares kept)
The reference relation is **white ground ~70 % + pale cool panels + one deep-to-mid blue radial (~18 %) + hairlines**. Ground, rule and text stay within ±5 % lightness of the reference. The two blues are re-keyed to the plan's "ai-nezumi" blue-grey (#5A6570) **keeping the reference hue family (205–215°) and the deep→mid radial**: reason — the plan row fixes the ai-nezumi blue-grey palette (grey family) with a "quiet palette" note, and Sanwa's #005CAA is a fully saturated corporate blue that would read as another company's livery on a small contractor's site.

| Role | Reference `tok(a)` | Ours | Share | Use |
|---|---|---|---|---|
| Ground | #FFFFFF | #FFFFFF | ~66 % | page |
| Pale panel | #F0F5F7 | #EEF1F3 | ~10 % | §7, §10 bands |
| Lens deep (radial centre) | #011657 | **#18263A** | ~10 % | lens centre, hero-panel centre is #232B33 |
| Lens mid (radial edge) | #005CAA | **#46607C** | ~8 % | lens edge |
| Main slate | #005CAA (links, discs, pills) | **#5A6570** | ~3 % | chevron discs, links, tag pills, bars on white, hero panel edge |
| Ink | #011657 (dark pill) | **#232B33** | ~4 % (footer) | footer, hero panel centre, pill text |
| Rule | #C2CDD1 | #C9D0D5 (+2 % L) | hairlines | notice boxes, rows, table |
| Text | #333333 / #67757A | #25292D / #5F676D | body | white-ground text (14.9 : 1 / 5.7 : 1) |
| Text on deep | #FFFFFF | #FFFFFF / #DDE3E8 / #C9D0D5 | — | lens and panel text |
| Accent | none (red pdf icons) | **#B8862F** safety ochre | < 1 % | only: hero 64 × 4 bar, §6 bar, form focus |

First-screen saturated share (HSV s > 0.5, v > 0.3): target **≤ 6 %**, cap 15 % (`scripts/check-first-screen.py`).

---

## 7. Type (font_direction: **sans**)
- **Latin**: headings **Schibsted Grotesk** (variable, 400–900), body **Albert Sans** (variable, 300–700). Both OFL, Google Fonts, woff2 in `assets/fonts/`, subsets latin + latin-ext.
- **CJK (gothic / sans only, no Mincho or Ming serif)**: zh-TW headings Noto Sans TC (500/700 subset woff2), ja headings Noto Sans JP (500/700 subset), using the Hokuto / Hada subset workaround (the theme's zh subset script is broken).
- Stacks:
  - heading: `"Schibsted Grotesk", "Albert Sans", system-ui, sans-serif`; `:root:lang(zh*)` → `"Schibsted Grotesk", "Noto Sans TC", "PingFang TC", "Microsoft JhengHei", sans-serif`; `:root:lang(ja)` → `"Schibsted Grotesk", "Noto Sans JP", "Hiragino Sans", "Yu Gothic", sans-serif`.
  - body: `"Albert Sans", system-ui, sans-serif`; zh body → `"Albert Sans", "PingFang TC", "Microsoft JhengHei", sans-serif` (no bundled zh or ja font); ja body → `"Albert Sans", "Hiragino Sans", "Yu Gothic", "Meiryo", sans-serif`.
- Loaded **only via theme.json `fontFamilies` + `fontFace`** so the editor iframe and front end match; style.css has `:lang(` rules → copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. Must pass `check-editor-fonts.mjs` (en, zh-TW).

| Token | Size / weight / line-height | Source |
|---|---|---|
| H1 hero (`xx-large`, theme.json max) | **4.5rem** (72 px) / 700 / 1.02 / −0.015em | row ≥ 4.25rem; Sanwa stat 72 px `tok(b)` |
| Figures | 4.5rem / 500 / 1 + unit 1.875rem / 500 | stat 72 / 30 px `tok(b)` |
| Lens statement | 3.5rem / 500 / 1.15 | vision catch ~56 px `tok(b)` |
| H1 inner (lens head) | 3.25rem / 600 / 1.15 | — |
| H2 | 2.5rem / 600 / 1.4, padding-bottom 20 px, bar margin-bottom 40 px | 40 / 600 / 56 px `tok(b)` |
| Sub line (lens) | 1.5rem / 600 | 24 / 600 `tok(b)` |
| H3 | 1.25rem / 600 / 1.4 | 20 / 600 / 28 `tok(b)` |
| Body | 1rem / 400 / 1.75 (lens paragraph 1.0625rem / 1.85) | 16 px; lh raised from 1.4 for long English copy |
| Nav | 0.9375rem / 500, letter-spacing .005em | 15 / 500 `tok(b)` |
| Small / meta | 0.8125rem / 500; caps labels 0.75rem / 600 / .1em | — |
- zh-TW / ja: sizes ≈ 0.75 × for H1 / statement / figures text labels; body line-height 1.85; letter-spacing .02em. fr / de: `hyphens: auto` on headings and body.

---

## 8. Spacing, radius, borders, buttons (source `tok(c)`, `tok(d)`)
- Container **1200 px** (`contentSize`), wide **1334 px** (`wideSize`, Sanwa photo row), gutters 24 px (mobile 20 px).
- Section padding 104 px top / bottom (mobile 64 px) — Sanwa margin 104 `tok(c)`. Lens band 160 / 200 px (mobile 112 / 140).
- Header 104 px (utility 32 + main 72); mobile 64 px.
- Notice boxes padding 32, gap 32, 1 px #C9D0D5, radius 0. Table rows padding 20 px 0.
- Radius: pills 100 px; peeking cards 14 px; everything else **0** (photos, boxes, table, inputs).
- Shadow: only the white pill / booking bar `0 6px 24px rgba(35,43,51,.14)`; nothing else.
- Buttons: (a) CTA pill S1 (white or, on white ground, white + 1 px #C9D0D5); (b) header outline pill: 44 px high, 1.5 px #5A6570, text #232B33, 28 px disc; (c) no other button styles. Hover .3 s ease (`tok(g)`): disc `translateX(4px)`, border #232B33. Focus-visible: 2 px #B8862F outline, offset 3 px.

---

## 9. Scroll effects (from stage-a "Scroll effects to adopt"; sp-scroll copied unchanged)
| Effect | sp-* class | Where | Source and timing | Our values |
|---|---|---|---|---|
| Fade-up on blocks | `sp-reveal sp-reveal--up` | §3 box stack, §6 heading, §8 case list; inner pages: one per section max, never on forms, tables, legal text | Sanwa `.u-fade01`: opacity 0 → 1, translateY 15 px → 0, **1 s**, default `ease`, triggered at elTop − winH + winH/15 `tok(g)` | `--sp-dist: 15px; --sp-dur: 1s; --sp-ease: ease` |
| Number run | `sp-reveal sp-count` | §2 three figures (`45 min`, `3 days`, `1 day`) and the How-it-works figures band | Sanwa stats are static; our addition, matched to the band's 1 s fade | default 1.2 s easeOutCubic |
| Parallax | `sp-parallax` | §6 crew band (required, §10); About T3 band | Sanwa `js-topParallax` hero pin; rate from stage-a | `--sp-par: 10%` home, 6 % About |
| Cover reveal (pin) | **CSS `position: sticky`**, not an sp class | hero inside `.mk-pin` | Sanwa sticky hero, linear with scroll | ≥ 1024 px and `prefers-reduced-motion: no-preference` only |
- The hero gets **no reveal**. The doors row (horizontal) gets none. No stagger, no marquee, no custom scroll listener, no GSAP/AOS/Lenis/jQuery.
- Reduced motion, `?sp-static`, no-JS and the editor show the final state; the pin is also off under reduced motion.

## 10. Parallax (required)
- **Where**: home §6 "The crew who measure" — Cover block alignfull, class `sp-parallax`, background img-12 (crew unloading a shutter coil beside the van, 21:9). `--sp-par: 10%` desktop, **6 %** below 782 px (still ≥ 6 px movement on 390 × 844).
- **Foreground**: none on the photo; the heading + ochre bar are above it and the name list below it, so no text moves.
- **Reference motion**: Sanwa's hero stays put while the following band moves at a different speed (`js-topParallax`); our crew band does the same at a smaller scale — the photo drifts slower than the page around it — and the real pin is reproduced by the hero cover reveal (§1 T1).
- The hero photo is **not** `sp-parallax` (a pinned element would stall the view timeline and could fail `check-parallax.mjs`).
- Verify with `check-parallax.mjs` (desktop + mobile): ≥ 6 px displacement, 0 under reduced motion; reveal checks pass (≥ 3 reveals off-screen: §3, §6, §8 + figures).

---

## 11. Responsive
- **390 px first screen**: §3 mobile; no vertical text, no absolutely positioned labels over text or photo, no overlap; the outline circle and back-to-top hidden.
- **Lens band**: ellipse width 400 % below 480, 220 % to 781 so the arcs stay visible but shallow; photo row one column; figures one column, 40 px apart; statement 2.25rem.
- **Doors row**: scroll-snap inside its own `overflow-x: auto` row (cards 300 px on mobile, 85 % width); the document never scrolls sideways.
- **Price table** (home §9 and `/prices/`): a real `<table>` in a `figure.wp-block-table` alignwide-to-container, **100 % of the 1200 px container at ≥ 782 px** (800 and 1280 checked). Columns: Item (40 %), What's included (42 %, 0.9375rem #5F676D), **From** (18 %, `white-space: nowrap; text-align: right`, Schibsted 1.25rem / 600, `font-variant-numeric: tabular-nums`). `table-layout: fixed`, no overflow, no clipping, no horizontal scroll. Header row 0.75rem caps #5F676D, 1 px #25292D bottom rule; rows 1 px #C9D0D5.
- **Every table below 782 px stacks**: `thead` visually hidden; each `tr` a block with 1 px top rule, padding 16 px 0; item 1.0625rem / 600, includes on its own line, price on its own line left-aligned (data-label "From" before it via the `<td data-label>` + visible `<span>` in markup, not CSS `content:` text).
- 12-column splits (§5, §7, §10, contact) collapse to one column below 782 px, image first.
- Header below 1024 px: single row, core navigation overlay ("Menu"), CTA pill hidden in the bar (the hero card carries it).

---

## 12. Forms (form contract v1: `steps/form-contract-v1` exists)
- **Assets**: copy `pipeline/assets/forms/shippress-forms.php` → `inc/`, the forms CSS and editor JS → `assets/`, unchanged; `require` from functions.php. No fake forms, no mail backend, no import-time plugin detection. Forms are never in the first screen and never get sp-reveal (nor does their section).
- **Contact / booking** `/contact/` "Book a site measure" (the only booking page): the PHP pattern calls `shippress_form_slot( array( 'kind' => 'contact', 'fallback' => $fallback ) )`.
  - `$fallback` = `ob_start()`-buffered literal markup of the theme CTA pill: "Email to book a site measure" → `mailto:quotes@makido-shutters.example?subject=<measure_subject>`. Never a link to `/contact/`.
  - With CF7 or WPForms active, the first published form renders. **Recommended fields** (documented in readme and a page note): Full name*, Company, Email*, Phone*, Site address or postcode*, Door type (select: Roller shutter / Sectional overhead door / Shopfront grille / Counter or hatch shutter / Fire-rated shutter / Not sure), Number of openings (select 1 / 2 / 3 / 4+), Approximate width × height (text), Preferred visit days (checkboxes Mon–Fri), Is the door working? (radio: Yes / Stuck open / Stuck shut), Message (textarea), Consent* (checkbox linking `/privacy/`).
- **Newsletter** `/newsletter/` (standalone waitlist page, not an alias of News) **and home §10**:
  `shippress_form_slot( array( 'kind' => 'newsletter', 'email' => 'quotes@makido-shutters.example', 'label' => _t('forms_email'), 'submit' => _t('forms_subscribe'), 'notice' => _t('forms_mail_notice'), 'subject' => _t('forms_mail_subject') ) )`.
  - MailPoet (explicit ID) or MC4WP preferred; CF7 / WPForms only via an explicitly configured newsletter form ID, never the contact form.
  - **Without plugins**: required `type=email` field + submit; native mailto POST carrying the entered address. Visible notice: "Opens your email app. Send the message to join the survey-day list; you are not on it yet." Never claims success. Footer has no form.
- **Light tokens** (home §10 on #EEF1F3, contact on white): `--sp-form-surface #FFFFFF`, `--sp-form-text #25292D`, border #87909A (3.2 : 1), `--sp-form-accent #5A6570`, `--sp-form-on-accent #FFFFFF`, `--sp-form-focus #B8862F` (2 px outline, 2 px offset), `--sp-form-radius 0` (submit buttons scoped to radius 100 px to match the pill), inputs 48 px high, padding 0 14 px; labels 0.875rem / 600 #25292D; error #A8322A (text + 1 px border + message under the field); success #2F6B4A (text + 4 px left rule); checkbox / radio 18 px, `accent-color #5A6570`.
- **Dark tokens** (newsletter page form inside the lens band): surface #FFFFFF, text #25292D, border #C9D0D5, accent **#FFFFFF**, on-accent **#232B33**, focus #E2B866, labels and notice #DDE3E8, error text #FFC4B8, success #CFE3D2.
- Style every plugin class consistently (CF7, WPForms, MailPoet, MC4WP, Jetpack): input, textarea, select, checkbox / radio, label, submit, focus, error, success; scoped to plugin classes and `.sp-newsletter-fallback`, no global input/form selectors; map `--sp-form-*` to theme.json tokens.
- **Five-language strings** (en, zh-TW, ja, fr, de) as semantic keys in `inc/i18n/en.php`: `forms_email` ("Your email"), `forms_subscribe` ("Join the survey-day list"), `forms_mail_notice`, `forms_mail_subject` ("Survey-day list request"); `measure_email` ("Email to book a site measure"), `measure_subject` ("Site measure request"); every field label and option above. Extract with `L10N_SEMANTIC=1`. `form-runtime-check.php` passes in all five languages; `repo-gates.sh forms` passes; check real CF7 at 390 px and desktop on light and dark grounds without submitting.

---

## 13. Images (IMAGERY: **photo**; 18 images, 0 cut-outs)
**STYLE (one string for every image):**
`Real documentary photograph, high-key and bright, neutral cool daylight, soft natural shadows, true-to-life low-saturation colour with white, light grey, galvanised steel and muted blue-grey dominant, 35mm lens at eye level, medium depth of field, clean modern industrial and commercial settings, workers in plain mid-grey workwear and grey work gloves, diverse international people, candid and unposed, no visible text, no logos, no brand marks, no signage, no numbers, no watermarks, not CGI, not illustration, no Japanese elements`

All 3:2 landscape 2000 × 1333 unless noted, webp ≤ 300 KB, ≤ 2000 px. Read every result; regenerate any with text, logos, broken faces or hands, or off-style colour.

| # | Subject and composition | Ratio | Used on (home ★) |
|---|---|---|---|
| img-01 | Two fitters (woman 30s, man 40s) guide a half-lowered galvanised roller shutter in a loading bay; her gloved hand flat on the vertical guide rail, his on the bottom bar; bright yard behind; subjects in the left 20–50 % of frame | 3:2 | ★ hero KV; `/thanks/` |
| img-02 | Gloved hand holds a plain laser distance measurer (blank screen) against the concrete reveal of a bay opening, tape measure on the floor | 3:2 (crop 1.6) | ★ §2 row; `/how-it-works/`; `/work/` |
| img-03 | Shopfront at morning with a perforated aluminium roller shutter half raised over glass, no signage | 3:2 (crop 1.6) | ★ §2 row; `/doors/#roller` |
| img-04 | White insulated sectional overhead door half open on a clean warehouse wall, empty bay | 3:2 (crop 1.6) | ★ §2 row; `/work/` |
| img-05 | Fitter kneels in a shopfront opening running a steel tape along the floor, notebook beside him | 4:5 (1600 × 2000) | ★ §5; `/work/`; post 1 |
| img-06 | Close-up: hands pencil-mark a bracket position on a brick reveal, spirit level held flat | 3:2 | ★ §5 inset; `/how-it-works/` |
| img-07 | Row of three galvanised roller shutters on a warehouse front, daylight | 3:2 (crop 1.73) | ★ §4 card; `/doors/` T3 band (21:9 crop) |
| img-08 | Inside view of an insulated sectional door with its horizontal tracks and springs | 3:2 (crop 1.73) | ★ §4 card; `/doors/#sectional` |
| img-09 | Open-lattice steel grille lowered over a lit glass shopfront at early morning | 3:2 (crop 1.73) | ★ §4 card; `/doors/#grille`; post 2 |
| img-10 | Small aluminium counter shutter half raised over a stainless servery hatch | 3:2 (crop 1.73) | ★ §4 card; `/doors/#counter` |
| img-11 | Fitter checks the bottom edge of a heavy steel fire shutter recessed in a warehouse corridor | 3:2 (crop 1.73) | ★ §4 card; `/doors/#fire`; post 3 |
| img-12 | Wide: five crew members beside an open grey van in a yard, two wheeling a shutter coil on a trolley, morning light | 21:9 (2000 × 857) | ★ §6 parallax band |
| img-13 | Workshop bench: shutter slats being cut to length, a worker measuring a slat with a tape | 4:5 | ★ §7; `/work/` |
| img-14 | Three white sectional doors with grey dock shelters at a cold-store loading dock | 3:2 (crop 1.6) | ★ §8 case 1; `/work/` T3 band (21:9 crop) |
| img-15 | Hardware shopfront with a newly fitted electric roller shutter fully raised; owner and fitter talking at the door | 3:2 (crop 1.6) | ★ §8 case 2; `/work/` |
| img-16 | Fitter tests a counter shutter in a bright school kitchen, stainless counter, no children | 3:2 (crop 1.6) | ★ §8 case 3; `/work/` |
| img-17 | Planning table: paper drawings of a door opening with indistinct lines, tape, laser measure, mug — nothing readable | 3:2 (21:9 crop on About) | `/about/` T3 band; `/newsletter/` |
| img-18 | Aftercare: technician wipes and lubricates a shutter guide rail with a cloth | 3:2 / 4:5 crop | `/prices/`; `/contact/` |

Home: **16** unique (img-01 … img-16). Total: **18**. No image repeats within a page.

---

## 14. Fixed facts (brand.md must match; identical in all five languages)
- **Name**: Makido Shutters. **Founded**: 2009 by **Aaron Makido** (former shutter fitter). **Location**: Unit 4, Brannock Works, 22 Kestle Road, Wrenfield (fictional). **Service area**: within 60 km of Wrenfield.
- **Contact**: phone 021 480 1948 · quotes@makido-shutters.example. **Hours**: office Mon–Fri 7:30–17:00; survey visits Mon–Fri 7:30–16:00; emergency call-outs Mon–Sat 7:00–19:00 (same day within 25 km).
- **People (6)**: Aaron Makido — founder, measures most sites (2009) · Priya Venn — quotes and scheduling (2012) · Joel Asante — lead fitter (2013) · Marta Kowal — fitter, fire-rated shutters (2017) · Sami Haddad — fitter, motors and controls (2019) · Lena Brandt — aftercare and service desk (2021).
- **Fleet / place**: two vans, one workshop at Brannock Works.
- **Process (6 steps)**: Request → Site measure 45 min → Written quote within 3 working days → Manufacture 10–15 working days (fire-rated 20) → Fitting 1 day per standard bay up to 5 m wide (2 days wider or fire-rated) → Aftercare visit at 12 months.
- **Prices (7, ex VAT, € "from")**:
  | Item | What's included | From |
  |---|---|---|
  | Site measure and written quote | visit, photos, written quote | free within 25 km; €60 beyond, credited on order |
  | Manual roller shutter, shopfront up to 3 × 2.5 m | shutter, fitting, removal of the old one | €1,480 |
  | Electric roller shutter, bay up to 4 × 4.5 m | shutter, motor, controls, fitting, removal | €3,950 |
  | Insulated sectional overhead door, up to 4 × 4.5 m | door, tracks, motor, fitting, removal | €5,200 |
  | Fire-rated roller shutter, up to 3 × 3 m | shutter, release unit, fitting, removal | €6,800 |
  | Motor replacement on an existing shutter | motor, controls, testing | €690 |
  | Yearly service visit, per door | inspection, lubrication, adjustment, report | €140 |
  Note: "Prices exclude VAT. Every fitted door includes removal and recycling of the old one and an aftercare visit at 12 months." Emergency call-out €120. Terms: quote valid 60 days, 30 % deposit on order, balance on the fitting day.
- **Cases (3)**: (1) **Harbour Lane Cold Store** — three insulated sectional doors on loading bays, measured on a Tuesday, fitted over three days, one bay closed at a time. (2) **Corrie & Sons Hardware** — manual shopfront shutter changed to electric, fitted in one day before opening time. (3) **Westmoor Primary School kitchen** — counter shutter on the servery hatch, fitted in one day during the half-term break.
- **A day (brand.md must contain "day")**: 7:00 vans loaded at Brannock Works; 7:30 first site measure; late morning fitting crew on site, one bay at a time; 13:00 Priya sends the day's written quotes; afternoon second visit or aftercare calls; 16:30 vans back, tomorrow's doors checked against the measure sheets.
- **Audience**: warehouse and logistics managers, shop owners, school and facilities managers. **Tone**: plain, exact, calm; numbers before adjectives; no guarantees, no awards, no claims we cannot measure.

---

## 15. Home acceptance checklist
- [ ] First screen is **diagonal-split / on-solid-panel / booking-bar**: photo left (62 % → 54 %), radial slate panel right with all hero text, white seam hairline, white booking pill crossing the seam at the foot; nothing written on the photo; not full-bleed overlay.
- [ ] KV 1–6 visible at 1440 × 900 and 1280 × 800: img-01 shows two fitters + half-lowered shutter + hand on the guide rail; seam line; two-tier header; booking pill with 44 px disc; 46 px outline circle; the lens crown peeking ~56 px at the bottom centre.
- [ ] `?sp-motion` at 1440: the hero stays pinned while the lens band slides over it; top corners show the photo, bottom corners white. Off under reduced motion and below 1024 px.
- [ ] T1: ellipse 150 % wide, radial #18263A → #46607C, 64 × 4 white bars, statement 3.5rem, three abutting 1.6 : 1 photos with 0 gap / 0 radius, three figures 4.5rem with 1.875rem units, closing lens CTA at the end of the page.
- [ ] T2: three square 1 px #C9D0D5 boxes, 32 / 32, inline chevron after the last word.
- [ ] T3: centred H2 + 64 × 4 ochre bar above a full-bleed, text-free img-12; six names as a text list.
- [ ] Parallax ≥ 6 px on §6 (desktop + mobile) via `check-parallax.mjs`; ≥ 3 reveals verified; no transparent leftovers.
- [ ] 16 home images, 18 total, no repeats within a page, 0 cut-outs.
- [ ] Type: H1 4.5rem Schibsted Grotesk 700; body Albert Sans; zh-TW / ja headings in Noto Sans TC / JP (gothic); editor = front end.
- [ ] Price table 100 % of the container at 800 and 1280, "From" column nowrap right-aligned and not cut; stacked at 390.
- [ ] 390 px: no overlap, no vertical labels, no absolute labels over text, no horizontal page scroll; doors row scrolls only inside itself.
- [ ] One top menu (anchors + one CTA pill); the CTA label/href identical everywhere ("Book a site measure" → `/contact/`).
- [ ] ≥ 600 English words; ≥ 3 narrative paragraphs ≥ 20 words; all numbers match §14 (45 min, 3 working days, 10–15 / 20, 1 / 2 days, 12 months, 60 km, 25 km, €1,480 … €140).
- [ ] Newsletter slot in §10 only (not in the first screen, no reveal). First-screen saturation ≤ 6 % (cap 15 %).

---

## 16. Similarity table (target ≈ 80 %, values from `reference-tokens.md`)

| Dimension | Reference value (token) | Makido Shutters |
|---|---|---|
| Ground / pale panel | #FFFFFF ~70 %; #F0F5F7 `tok(a)` | #FFFFFF ~66 %; #EEF1F3 ~10 % |
| Deep band | radial(105% 50% at 50% 50%, #011657 → #005CAA), ~18 % `tok(a)(d)` | same geometry, #18263A → #46607C, ~18 % |
| Links / discs / pills | #005CAA `tok(a)` | #5A6570 |
| Rules / text | #C2CDD1; #333 / #67757A `tok(a)` | #C9D0D5; #25292D / #5F676D |
| First-screen saturation | 21.6 % (CG sky) `tok(a)` | ≤ 6 % (cap 15 %) |
| Header | two tiers, transparent, 100 px, nav 15 / 500 `tok(b)(c)` | two tiers, white, 104 px (32 + 72), nav 15 / 500 |
| Hero | full-bleed CG video; white pill 360 × 60 bottom 48 right 125 + 46 px outline circle; sticky under the next band `tok(e)(f)(g)` | diagonal split photo/panel (plan composition); white booking pill 68 px high bottom 40 + 44 px disc; 46 px outline circle; sticky under the lens band |
| Lens band | pseudo 150 / 180 / 220 / 400 % wide, r 50 %, padding 98 / 104, heading 40 / 600 + 64 × 4 bar, catch 56 px, sub 24 / 600 with dashes `tok(b)(c)(d)` | 150 / 180 / 220 / 400 %, r 50 %, padding 160 / 200, H2 2.5rem / 600 + 64 × 4 bar, statement 3.5rem, sub 1.5rem / 600 with dashes |
| Photo row | 4 abutting, 333 × 209 (1.6 : 1), 0 gap, 0 radius `tok(e)` | 3 abutting, 400 × 250 (1.6 : 1), 0 gap, 0 radius |
| Stats | 72 / 500 + 30 px unit, label above `tok(b)` | 4.5rem / 500 + 1.875rem unit, label above |
| Notice boxes | 1 px #C2CDD1, padding 32, gap 32, r 0, inline chevron `tok(c)(d)(f)` | 1 px #C9D0D5, padding 32, gap 32, r 0, inline chevron |
| About band | centred heading + 64 × 4 bar over full-bleed photo `tok(e)(f)` | same; bar ochre #B8862F; parallax 10 % |
| Pickup row | cards 372 × 215, r 14, caption 20 px + chevron, peeking, autoplay `tok(e)` | cards 372 × 215, r 14, caption 1.25rem + chevron, peeking scroll-snap, no autoplay |
| Tag pills | 20 px high, r 100, #005CAA / #011657, white 12 px `tok(f)` | 20 px, r 100, #5A6570, white 0.75rem (news list) |
| Type | Noto Sans JP + Roboto; body 16 / 1.4 / 500 `tok(b)` | Schibsted Grotesk + Albert Sans (+ Noto Sans TC / JP); body 16 / 1.75 / 400 |
| Spacing | container 1200, photo row 1334, section margin 104 `tok(c)` | 1200 / 1334 / 104 |
| Radius / shadow | pills 100, cards 14, boxes 0; soft shadow on the pill only `tok(d)` | same |
| Imagery | CG hero; install photographs + documentary people `tok(e)` | documentary install photographs throughout (hero included) |
| Motion | fade-up 15 px / 1 s / ease; sticky hero cover; slider autoplay; hover .3 s `tok(g)` | `sp-reveal--up` 15 px / 1 s / ease; CSS sticky cover; `sp-count` on figures; `sp-parallax` 10 %; hover .3 s ease |
