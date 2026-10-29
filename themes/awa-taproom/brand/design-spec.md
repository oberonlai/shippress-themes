# Awa Taproom: design spec (stage 1, binding for implementation)

Slug `awa-taproom`, small brewery taproom, type `hospitality` (WooCommerce compatible, not required; site works fully without it). Design-plan row b17-4: archetype horizontal-strip, hero framed-window, nav overlay, real photography with film grain, palette black-brown umber `#3B2E28`, fonts Fraunces / Nunito Sans, font_direction **serif**, page_structure **booking-led**.

Main (and only) reference: **AFURI BREWING — https://afuribrewing.com/** (S5-Style, craft beer). Measurements in `reference-tokens.md` (cited below as `tok(a)…tok(g)`), screenshots in `brand/ref/`. We borrow structure, technique, key-visual concept, colour relations and motion. We do not take any photo, copy, logo, can artwork or the isometric illustration.

Fixed brand facts (identical on every page and in all five languages; see section 9): Awa Taproom, founded **2019**, **214 Water Street, Bellingham, WA 98225, USA** (fictional address), **38 seats** (12 at the bar, 26 at 7 tables), **4 taps**, brewhouse of **5 barrels** behind the bar.

---

## 1. Signature techniques (three; each must be obvious at a glance)

### T1. Framed window over a full-bleed ground, caps wordmark crossing the frame's lower edge (AFURI first screen, `ref/afuri-fold.png`)
- Reference: a sharp-cornered photo (can + poured glass) 983×640 at x229 y130 on a 1440×900 fold = **68.3% wide × 71.1% tall, left 15.9%, top 14.4%**, centred; the area around it is a different full-bleed photo (sky + mountain). The caps wordmark "AFURI BREWING" ≈78px white sits bottom-left at x50, baseline ≈y800, so its top half overlaps the frame's bottom edge (frame bottom y770) and its lower half sits on the dark forest band. Radius 0, shadow 0 (`tok(d)`, `tok(e)`).
- Awa (home block 1): frame = photo **H1** (server pulling a pint) at exactly the same box: `left 15.9%; width 68.3%; top 14.4%; height 71.1%` of a `min-height:100svh` (max 900px design height) Cover, `object-fit:cover`, radius 0, no border, no shadow. Ground = Cover background photo **H2** (taproom before opening, tanks, dark umber) with `sp-parallax`. Wordmark "AWA TAPROOM" Fraunces 600, `font-size: var(--wp--preset--font-size--xx-large)` (= 4.875rem = 78px at 1440), uppercase, letter-spacing 0.01em, white, positioned `left:50px`, its baseline at 89% of the fold (≈y800) so the cap height straddles the frame bottom edge (≈40% of the letters above the edge, 60% below). Under it a 1.625rem (26px) Nunito Sans 600 line "Small brewery · Bellingham" white (reference JP sub 26px).
- Inner pages: every page head is a **short T1** (Cover, min-height 560px desktop / auto mobile): umber ground `#3B2E28` (no photo ground, the photo goes in the frame), frame = that page's head photo at width 56%, height 66%, top 16%, right-offset (left 30%), page title caps Fraunces 3.5rem white at left:50px crossing the frame bottom edge exactly like home.
- Must not be diluted: corners stay 0 (not 4, not 8); the frame must be visibly *smaller* than the screen with ground visible on all four sides; the wordmark must cross the frame edge (not sit fully below, not fully inside); the ground must be darker than the frame photo (contrast frame vs ground is the whole point).

### T2. Rule-topped 4-up cards with a cut rule and a Ø24 circle ▸ (AFURI product row and ABOUT cards, `ref/scroll-lead-and-strip.png`, `ref/scroll-late-a.png`)
- Reference: 4 columns 302px wide, gap 44px, at x50/396/742/1088 (`tok(c)`); each card opens with a **4px #1D1D1D top rule cut by a 20px gap**, the short segment being the last ≈ 24px (276 + gap 20 + rest) (`tok(d)`); right under the rule's short segment a **Ø24 outline circle (1px #1D1D1D) with a ▸ glyph**; caps name 26px/700 left (`tok(b)`); a two-line description below at 13–14px bold; a "…." mark at the bottom. Wide variant: same rule over a 2-column span (646px) with a photo below the heading.
- Awa: home block 4 "Pouring tonight" (4 taps, 4 cards) and home block 6 "Hold a seat" (wide variant 646px + 302px). Implementation: card = Group `.awa-card`; rule = `::before` `linear-gradient(to right, #1D1D1D 0 calc(100% - 44px), transparent calc(100% - 44px) calc(100% - 24px), #1D1D1D calc(100% - 24px))`, height 4px; circle = `a.awa-circle` 24×24, `border:1px solid currentColor; border-radius:50%`, ▸ as a 6px CSS triangle, top 16px right 0 under the short segment; name Fraunces 600 1.625rem/1.15 uppercase; style + ABV line Nunito Sans 700 0.8125rem caps letter-spacing 0.06em; description Nunito Sans 600 0.875rem/1.6, two lines; bottom "····" 4 dots 3px `#1D1D1D`, margin-top 32px; price right-aligned on the last line ("$8 / 400 ml").
- Must not be diluted: the rule is 4px (not hairline), it is visibly cut near the right end, the circle is an outline (not filled), names are caps; cards are on white with no box, no radius, no shadow, no background.

### T3. Underlined-phrase lead + rotated grey gutter label (AFURI lead and side label, `ref/scroll-frame-after.png`, `ref/scroll-late-a.png`)
- Reference: a three-line lead at 36px/45px (2.25rem/1.25) where the key phrases carry a **2px solid underline in the text colour** (white on photo, `#1D1D1D` on white), set top-left at x50; and in the left 50px gutter a **rotated (−90°… reads top-to-bottom) grey `#BDBDBD` caps label ≈15px "ABOUT | AFURI BREWING"** with a short vertical separator (`tok(b)`, `tok(f)`).
- Awa: lead on home blocks 2 and 3 and every inner page's first text block; underline = `text-decoration: underline 2px; text-underline-offset: 0.18em; text-decoration-skip-ink: none` on `<u>` / `.awa-u` spans; 2–3 phrases per lead, never a whole line. Rotated label `.awa-side` at `left:50px`, `writing-mode: vertical-rl` (reads top-to-bottom like the reference; no extra rotate), Nunito Sans 600 0.9375rem caps letter-spacing 0.08em `#BDBDBD`, separator = 1px × 12px bar. Text per section: "POURING TONIGHT | AWA TAPROOM", "HOLD A SEAT | AWA TAPROOM", "ON THE TANKS | AWA TAPROOM", "VISIT | AWA TAPROOM".
- Responsive: rotated label shows only at ≥1024px; below 1024 it becomes a horizontal 0.75rem caps label in normal flow above the section heading. **Never on the first screen at 390px.**
- Must not be diluted: underline 2px and same colour as the text (not amber, not 1px); lead ≥2.25rem on desktop; the rotated label stays light grey and in the gutter (not inside the content column).

### Continuation to inner pages (≥4 required; here 9)
| Page | T1 framed head | T2 cut-rule cards | T3 underlined lead + side label |
|---|---|---|---|
| On Tap & Prices | frame F7 (flight) | 4 tap cards (same 4 beers as home) + 3 "next week" cards | yes, "ON TAP" |
| Book a Seat | frame B8 (held table) | 3 cards: Bar seats / Held tables / Back room | yes, "HOLD A SEAT" |
| The Brewery | frame S6 (steam over kettle) | 4 cards: Grain / Hops / Water / Time, each with S4, S5, W16 below | yes, "THE BREWERY" |
| People | frame C9 (Ines at the tank) | 7 person cards (rule, caps name, role) in a horizontal strip | yes, "ON THE TANKS" |
| Visit & Hours | frame X13 (exterior) | 2 cards: Getting here / Hours | yes, "VISIT" |
| Events & Back Room | frame E12 | 3 cards: Brew-day Saturdays / Quiz Tuesday / Private hire | yes, "BACK ROOM" |
| Brew Notes (index, archive, single) | frame = featured image | post cards with cut rule + circle ▸ | single post: lead with underline |
| About | frame R3 | 3 cards: 2019 / 5 barrels / 4 taps | yes, "ABOUT" |
| Contact | frame G14 | 2 cards: Write / Call | yes, "CONTACT" |

---

## 2. Key visual concept

### (1) Reference first screen: concept, story, signature motion
- What it shows (`ref/afuri-fold.png`): a framed product still life (an aluminium can and a poured hazy beer in a stemmed glass on a blue surface) floats inside a sharp frame; around the frame is a real landscape — sky, then a forested mountain at the bottom; the caps wordmark sits bottom-left across the frame edge, a short two-line lead with an underlined phrase sits at the left mid-height overlapping the frame's left edge, "SCROLL DOWN ◉" with a 148×2 bar bottom-right.
- Story: "this beer is made at the foot of this mountain" — the product sits inside its landscape; when you scroll, the frame dissolves and the landscape takes the whole screen (`ref/scroll-frame-after.png`), then a lead line with underlined words appears over the mountain: the place is the brand.
- Signature motion: a scroll-linked mask-gradient wipe removes the framed photo (done by scrollY ≈100px), pinned stage 1681px over a 900px sticky viewport, easeInOutQuart `cubic-bezier(.77,0,.175,1)` (`tok(g)`).

### (2) Our transformed scene (brewery taproom; same composition, same motion idea, same image type = film-grain real photography)
- Inside the frame: **H1**, a server pulling a pint from a plain steel tap into a plain straight glass, foam rising, hand and glass in sharp focus, the bar rail in the foreground — this is our "product still life", but alive.
- Around the frame (the "landscape"): **H2**, the taproom itself before opening — steel fermentation tanks behind the bar, brick wall, unlit pendant bulbs with a warm glow, deep umber shadow. The place where the beer is made is the ground the glass sits in, exactly as the mountain is for AFURI.
- Story: "the beer is made in the room you drink it in." Scroll: the frame gives way and **the room takes over** — block 2 is the full-bleed room at 6 pm (**R3**, the same taproom now filling up), wiping open with the reference's easing, and the underlined lead "Brewed *behind the bar*, poured *a few metres away*." sits bottom-left on it like AFURI's after-state.
- Motion: hero ground H2 drifts with `sp-parallax` (the frame and type stay still → the frame reads as a window floating over the room); block 2's photo opens with `sp-reveal--wipe` (clip-path top→bottom, 1.1s `cubic-bezier(.77,0,.175,1)` = AFURI's easing). The hero itself has no reveal.

### (3) KV checklist (all items implemented and visible on the first screen at 1440×900)
| # | Reference element | Our counterpart | Position | Motion | Image |
|---|---|---|---|---|---|
| 1 | Sharp 983×640 framed photo of can + poured glass | Sharp framed film-grain photo: server pulling a pint from a plain tap into a plain glass, foam rising | x15.9%–84.2%, y14.4%–85.5% of the fold; mobile: 20px gutters, 4:5 | static in hero (the hand-over to the room happens in block 2 with sp-reveal--wipe) | **H1** |
| 2 | Full-bleed mountain/sky ground around the frame | Full-bleed taproom before opening: tanks behind the bar, brick, warm unlit pendants, umber shadow; overlay `rgba(59,46,40,.35)` | Cover background, whole fold | `sp-parallax`, `--sp-par: 8%` desktop / 5% mobile | **H2** |
| 3 | Caps wordmark "AFURI BREWING" ≈78px crossing frame bottom edge + 26px sub | "AWA TAPROOM" Fraunces 600 4.875rem caps white crossing the frame bottom edge + "Small brewery · Bellingham" 1.625rem | left 50px, baseline ≈89% of fold; mobile: in flow under the frame, 2.75rem, no overlap | none | — |
| 4 | Two-line lead at left mid-height, one phrase 2px-underlined, overlapping frame's left edge | "Four taps, *after work*. / A seat *kept for you*." Nunito Sans 600 1.5rem/1.35 white, the two italic phrases 2px underlined | left 50px, top 36% of fold, line box runs ≈160px into the frame; mobile: in flow under the wordmark, 1.125rem | none | — |
| 5 | "SCROLL DOWN ◉" + 148×2 white bar with last 16px detached, bottom-right | "TONIGHT'S TAPS ◉" (links to #pouring) + 148×2 white bar, last 16px detached by a 4px gap | right 50px, top 90% of fold; hidden <782px | none (hover: colour 0.4s `cubic-bezier(.25,.46,.45,.94)`) | — |
| 6 | Header: 32×14 line logo top-left, caps nav with dotted separators, "CART [ 0 ]" right | 32×14 1px line glyph (a glass rim with a foam crest, drawn by us) + "AWA" caps; nav ON TAP ⋮ BOOK A SEAT ⋮ BREWERY ⋮ PEOPLE ⋮ VISIT; right "TONIGHT [ 4 ]" → On Tap | top 57px, left/right 50px, overlay on the hero, white | none | — |

Every image in this table (H1, H2) is in the image list (section 7); R3 (the after-state) is home block 2.

---

## 3. Colour

From AFURI (`tok(a)`); one substitution with reason.

| Role | Hex | Source token | Use | Share |
|---|---|---|---|---|
| Ground (first screen / page heads) | `#3B2E28` umber | **replaces** sky `#00A0E0` | hero overlay tint, inner page head ground, back-room band | first screen ≈40% (as dark photo + tint); ≤12% of a page |
| Deep band | `#0B2A2A` | AFURI forest bottom band, exact | footer ground, the "On the tanks" strip background | ≈8% |
| Base | `#FFFFFF` | AFURI page ground, exact | every section after the hero | ≈70% |
| Ink | `#1D1D1D` | AFURI text on white, exact | text, 4px card rules, circle outline, 2px underline | ≈6% |
| White text | `#FFFFFF` | AFURI text on ground | text on H2/R3/umber/deep | — |
| Hairline | `#CFCFCF` | AFURI 1px block rule, exact | price-list row rules, card bottom rule | — |
| Side label | `#BDBDBD` | AFURI rotated label, exact | T3 rotated gutter label, caption meta | — |
| Accent | `#C98A3C` amber | AFURI colour lives only in the product cans → ours only in the beer itself | the beer in photos; UI: active nav underline and price-list "tonight" dot (6px) only | <1% UI |

- Why the sky changes: AFURI's sky is 42% saturated in the fold, three times our cap (≤15%), and a mountain-blue reads as outdoors/brand-specific, not a taproom; the row's palette black-brown umber `#3B2E28` takes the *same role* (one flat ground behind the frame, white type on it). `#3B2E28` has HSV V = 23% (< the 24% threshold in `check-first-screen.py`), so the ground itself counts as unsaturated.
- **First-screen saturated share ≤ 15% (target 6–12%)**, measured with `scripts/check-first-screen.py --max 15`. Achieve it by grading H1/H2 muted (warm midtones held below HSV S 35% — brick and wood desaturated, film grain), keeping the amber beer only inside the glass (≈4–6% of the fold), and no coloured UI over the cover.
- Not beige-led: base is pure white, umber only at the top of pages and in one band. Contrast: white on `#3B2E28` 13.9:1; ink on white 16.8:1; `#BDBDBD` side label is decorative (duplicates the section heading), fine at low contrast.

## 4. Typography

font_direction **serif**: Latin display = Fraunces (serif), Latin body = Nunito Sans (row fonts); zh-TW / ja headings **and** body = Noto Serif TC / Noto Serif JP (Mincho/Ming serif), never Noto Sans (gothic) — no mixing.

Stacks (theme.json `fontFamilies`, all loaded with `fontFace` from `assets/fonts/`, woff2):
- `display`: `"Fraunces", "Noto Serif TC", "Noto Serif JP", Georgia, serif` — Fraunces 400, 600 (variable opsz ok), normal + italic 400.
- `body`: `"Nunito Sans", "Noto Serif TC", "Noto Serif JP", system-ui, sans-serif` — 400, 600, 700.
- `:lang(zh-TW)` headings and body: `"Noto Serif TC", "Fraunces", serif`; `:lang(ja)`: `"Noto Serif JP", "Fraunces", serif`. Noto Serif TC / JP 400 + 600 as subset woff2 (use the Hokuto / Hada subsetting workaround; the repo subset script is broken). Because style.css uses `:lang(`, copy `shared/inc/editor-lang.php` to `inc/editor-lang.php` and `require_once` it. Editor and front end must show the same faces (check-editor-fonts.mjs, en and zh-TW).

Sizes (theme.json `fontSizes`; source token in brackets):
| Slug | Value | Use | Source |
|---|---|---|---|
| small | 0.8125rem (13px) | card meta, caps labels | AFURI card desc 13–14px bold |
| base | 1.0625rem (17px), line-height 1.75 | body | AFURI footer 17/500/22 → loosened for reading |
| medium | 1.25rem | nav 16px caps uses 1rem; price list | — |
| large | 1.625rem (26px), lh 1.15 | T2 card names, wordmark sub | AFURI h3 26px/30px |
| x-large | 2.25rem (36px), lh 1.25 | T3 leads, section h2 | AFURI lead 36px/45px |
| xx-large | 4.875rem (78px), lh 1.0 | hero wordmark (max size, ≥4.25rem rule met) | AFURI wordmark ≈78px |
Inner page T1 titles 3.5rem (clamp(2.5rem, 4.6vw, 3.5rem)). Mobile: xx-large clamps to `clamp(2.75rem, 11vw, 4.875rem)`. CJK: headings ≈0.75× en, body line-height 1.85, `letter-spacing: 0.04em`; fr/de `hyphens: auto`. Caps (`text-transform: uppercase`) applies to Latin only; zh-TW/ja keep the English wordmark "AWA TAPROOM" and Latin caps labels, translated headings stay normal case.

## 5. Header, footer, global layout
- Gutter **50px** at ≥1200 (content 1340 at 1440), 32px at 782–1199, 20px below (`tok(c)`). 4-column grid: columns 302px, gap 44px at 1440 (CSS grid `repeat(4, 1fr)` with `column-gap: 44px` inside 1340 → 302px each).
- Section padding-top 135px (normal) / 243px (after a photo block) desktop, 80px / 120px mobile (`tok(c)`); gap lead → next row ≈240px desktop, 96px mobile.
- Radius 0 everywhere, no shadows (`tok(d)`).
- Header (nav overlay): absolute over the hero / page-head Cover, white, height 114px (logo top at 57px). Logo: our own 32×14 line glyph (1px white) + "AWA" Fraunces 600 1rem caps. Nav Nunito Sans 700 1rem caps, items separated by a 1px dotted vertical rule 14px tall, 10px margin; right "TONIGHT [ 4 ]". Mobile <960px: glyph + "AWA" left, "MENU" caps text button right opening a full-screen umber `#3B2E28` overlay with the nav at 1.625rem caps white. One top menu only. On pages without a dark head (404, search) the header is ink on white.
- Footer: `#0B2A2A`, white text, padding 120px/80px: left the 32×14 glyph + "AWA TAPROOM" 2.25rem caps; columns: address + hours (exact, section 9), nav repeat, "Book a seat ◉"; bottom line 0.8125rem `#BDBDBD`: "© 2026 Awa Taproom · Please drink responsibly · 21+".

---

## 6. Home page (en; ≥250 words, narrative paragraphs in blocks 2, 3, 6, 7)

### First screen (1440×900) composition
Cover `min-height:100svh` (cap 900px for the layout maths), background H2 + `rgba(59,46,40,.35)` overlay, `sp-parallax` `--sp-par:8%`. Inside: header overlay (KV #6); frame H1 (KV #1); lead (KV #4); wordmark + sub (KV #3); "TONIGHT'S TAPS ◉" + bar (KV #5). Nothing else: no button, no table, form or search box, no centred text, no saturated UI. Layer order: ground < frame < lead < wordmark (the wordmark and lead are above the frame).

Mobile 390×844 (gate: no vertical text, no absolutely positioned label over text): header 64px; frame H1 in flow, full width minus 20px each side, 4:5 (≈350×438), top 96px; below it, in normal flow, wordmark 2.75rem white (on H2 ground) then sub 1.125rem then lead 1.125rem; no rotated label, scroll cue hidden. Parallax kept at `--sp-par:5%`.

### Block order
| # | Pattern slug | Purpose | Layout and photos | Copy |
|---|---|---|---|---|
| 1 | `awa-hero` | KV, first screen | as above: H1 framed over H2 (parallax) | ~25 words |
| 2 | `awa-room` | "the room takes over" (AFURI after-state) | full-bleed photo **R3** (room at 6 pm), min-height 100svh at ≥782px, 80svh mobile; figure child has `sp-reveal--wipe` (outer Group is the observed element, clip on the child). Bottom-left (x50, bottom 140px) the T3 lead white 2.25rem: "Brewed <u>behind the bar</u>, / poured <u>a few metres away</u>, / drunk <u>at the same table</u>." Right at the same height, small caps "AWA TAPROOM" 0.8125rem (AFURI right label). Overlay gradient bottom 45% `rgba(29,29,29,.55)`→0. | 20 words lead + one 55-word paragraph under it (white, 1.0625rem, max 34ch) |
| 3 | `awa-made-here` | how the beer is made here (AFURI lead + 3-photo strip, `ref/scroll-lead-and-strip.png`) | white. Left 5/12: T3 lead ink 2.25rem "Five barrels, <u>four taps</u>, / and <u>no shortcuts</u> / between them." + 90-word paragraph + text link "The brewery ◉". Below the lead at x50 the small 4-triangle glyph (ours: 3 tiny 6px squares, 1px ink, `tok(f)`). Right half (x742–1390 at 1440): **flush 3-photo strip** S4 / S5 / S6, each 1:0.9 (249×223 scaled to 216 tall at 1440), **0 gap, 0 radius**, top aligned 170px below the lead's top (as in the reference). Mobile: the strip becomes a horizontal scroller (scroll-snap, each 72vw), still flush. | 110 words |
| 4 | `awa-pouring` (#pouring) | what is pouring tonight | white; rotated side label "POURING TONIGHT \| AWA TAPROOM" at ≥1024px. Heading h2 2.25rem ink "Pouring tonight". **T2 4-up cards** (the 4 beers, section 9), `sp-stagger` on the row, each card `sp-reveal sp-reveal--up`. Cards text-only (as AFURI's product titles). Under the row, right-aligned text link "Full tap list & prices ◉". Mobile: 1 column, cards stacked 40px apart. | 4 × 22 words |
| 5 | `awa-pours` | pours & prices (price list) | white. **F7** (flight of four) as a content-width 21:9 photo, radius 0, inside a Group with `sp-parallax` `--sp-par:6%` (second parallax; the image moves inside a clipped box). Below: **price list full content width (1340 at 1440)**, 6 rows (section 9): name left (Fraunces 1.25rem), size middle (Nunito Sans 0.9375rem, `#5A5A5A`), price right (Nunito Sans 700 1.25rem, `white-space:nowrap; text-align:right`), 1px `#CFCFCF` rule between rows, row height 64px. No reveal on the list. | 6 rows + 25-word note ("Water is free and always on the bar.") |
| 6 | `awa-hold-a-seat` | booking-led core: how a seat is held | white; side label "HOLD A SEAT \| AWA TAPROOM". **T2 wide variant** (AFURI `ref/scroll-late-a.png`): card A spans columns 2–3 (646px): cut rule, caps heading "HELD TABLES", circle ▸ → Book a Seat, caps meta "7 TABLES · HELD 15 MIN", then photo **B8** 3:2 below (radius 0); card B column 4 (302px): cut rule, "BAR SEATS", meta "12 SEATS · WALK IN", then the hold process as **one paragraph** of four sentences (not a step grid). Under both, a plain ink button "Book a seat" (ink fill `#1D1D1D`, white text, radius 0, 48px tall). | T3 lead 2.25rem "Twelve seats are <u>always walk-in</u>. / The rest we <u>keep for you</u>." + 2 × 60 words |
| 7 | `awa-tanks-strip` | who is on the tanks this week (archetype horizontal strip) | full-bleed deep band `#0B2A2A`, white text. Heading "On the tanks this week" 2.25rem + 50-word paragraph left (4/12). Right/below: **horizontal scroll strip** (overflow-x:auto, scroll-snap-type x mandatory, `scrollbar-width: thin`) of 4 items, each 302px wide, gap 44px: three portrait-at-work photos **C9, C10, C11** (4:5, radius 0) each topped by a white cut rule (T2 in white) with caps name + role, and a fourth text item "AND FOUR MORE ◉" linking to People. At 1440 three items plus half of the fourth are visible (the strip clearly continues). Strip items get **no** sp-reveal. | 50 words + 3 × 18-word captions |
| 8 | `awa-visit` | visit / close (KV echo) | umber `#3B2E28` band, padding 135px. **Small T1**: frame **X13** (exterior at dusk) 56% wide, 3:2, right-offset; caps "VISIT US" Fraunces 3.5rem white crossing the frame's bottom edge at left 50px; left column above the title: address, hours (section 9), "Book a seat ◉", "Directions ◉". Frame gets `sp-reveal--wipe` (on the figure's child, as in block 2). | 45 words |

Home photo positions: H1, H2, R3, S4, S5, S6, F7, B8, C9, C10, C11, X13 = **12** (≥8), no repeats.

### Comparison with the latest home pages (must not repeat)
| # | Kesho College | Eiyo Clinic | Hikari Lighting | Getsuji Payroll | **Awa Taproom** |
|---|---|---|---|---|---|
| 1 | 4-panel 2:3 marquee hero + giant clipped caps word | inset rounded photo + headline under + paper strip | dark curtain-lift hero + stencil wordmark + marquee | framed full-bleed photo with navy panel + white message panel | **sharp window photo floating over a full-bleed parallax room, caps wordmark crossing its edge** |
| 2 | centred concept | scroll text-fill statement | light intro grid | offset dot-grid photo blocks | **full-bleed "room takes over" photo with wipe + underlined lead** |
| 3 | wide photo with overlapping caption | problem block | dark perspective room box, vertical stencil word | boxed tag / hairline labels | **lead left + flush 3-photo strip right** |
| 4 | hours rows | pine block with two hairline arches | — | — | **cut-rule 4-up tap cards** |
| 5 | — | — | — | — | **21:9 parallax photo + full-width price list** |
| 6 | — | — | — | — | **2+1 wide cut-rule booking cards** |
| 7 | — | — | — | — | **deep-green horizontal scroll strip of people at work** |
| 8 | — | — | — | — | **umber close with small framed window** |
Why not alike: no marquee (Kesho/Hikari), no rounded inset photo or text-fill (Eiyo), no curtain or stencil (Hikari), no coloured message panels over the photo (Getsuji — our frame holds a *photo*, not a text panel, and the ground is another photo); signature shapes are the sharp floating window, the 4px cut rule + Ø24 circle, and 2px underlined phrases, none of which appear in those four. No people grid (people are in a horizontal strip of three at work), no step grid, no timeline.

---

## 7. Imagery

**IMAGERY = photo** (stage-a.md: AFURI's main imagery is real photography; its one isometric drawing is ≈5%). Grok via `scripts/grok-image.sh`, one at a time, read each, regenerate on any text, logo, label on glass/tap, broken hand/face, or style drift. 16 images, 0 cutouts, each ≤300 KB and ≤2000px, readme line per image (AI-generated, CC0).

STYLE (exact string, every image):
`documentary photograph shot on 35mm colour film, visible fine film grain, natural light mixed with warm practical bulbs, clean bright highlights, muted umber brick, brushed steel and off-white palette, low saturation except the amber beer, honest candid moment, diverse adults, modern international small brewery taproom, plain unbranded glasses and taps, no text, no logos, no labels, no signage lettering, no Japanese elements`

| ID | Subject / composition | Ratio | Use (page → block); **bold = home** |
|---|---|---|---|
| H1 | server's hand pulling a pint from a plain steel tap into a plain straight glass, foam rising, bar rail foreground, shallow focus, glass right of centre | 3:2 (983×640) | **Home hero frame (KV1)**; On Tap card A image |
| H2 | taproom before opening, wide: steel fermentation tanks behind a long wooden bar, brick wall, warm unlit pendant bulbs, deep umber shadows, no people, upper third calm (frame covers centre) | 16:10 | **Home hero ground (KV2, parallax)**; About second photo |
| R3 | same kind of room at 6 pm filling up, wide from the back, people at tables and bar soft, warm light, lower-left darker for type | 16:9 | **Home block 2 (wipe)**; About head frame |
| S4 | malted barley poured from a hand into a steel scoop, close | 1:0.9 | **Home strip 1**; Brewery card Grain |
| S5 | green whole hops in a steel bowl on a bench, close | 1:0.9 | **Home strip 2**; Brewery card Hops |
| S6 | steam rising from an open brew kettle, brewer's arm with a paddle, side light | 1:0.9 | **Home strip 3**; Brewery head frame |
| F7 | tasting flight: four plain small glasses (pale to dark) on a wooden paddle on the bar, three-quarter top view | 21:9 (crop from 3:2 source) | **Home block 5 (parallax)**; On Tap head frame |
| B8 | window table for two kept free: two empty glasses, a small blank folded paper card, chairs pushed in, evening light | 3:2 | **Home block 6**; Book a Seat head frame |
| C9 | head brewer (woman, 40s) taking a sample from a fermentation tank valve into a small glass | 4:5 | **Home strip**; People head frame |
| C10 | co-founder (man, 40s) connecting a keg in the cold room, breath of cold air | 4:5 | **Home strip**; People card |
| C11 | bar lead (woman, 30s) polishing a glass behind the bar, looking aside | 4:5 | **Home strip**; People card; Book a Seat card |
| X13 | brick building at dusk, roller door half open, warm light spilling on the pavement, a bicycle, no signage | 3:2 | **Home block 8 (wipe)**; Visit head frame |
| E12 | back room long table, group of friends with glasses, candid laughter, warm light | 3:2 | Events head frame; Book a Seat card Back room |
| G14 | swing-top bottle / growler being filled at a counter-pressure filler, hands | 4:5 | Contact head frame; On Tap card Growler |
| N15 | snack board: bread, pickles, cheese, mustard on a wooden board beside a glass | 4:3 | On Tap snacks row; Events card |
| W16 | brewer's hands writing in a notebook on a steel bench, pencil, page blurred (no readable text) | 4:3 | Brew Notes index head; Brewery card Water/Time |

Per page check (no image twice on one page): Home 12 (above). On Tap: F7, H1, G14, N15. Book a Seat: B8, C11, E12. Brewery: S6, S4, S5, W16. People: C9, C10, C11. Visit: X13 (+ map placeholder: none, text directions). Events: E12, N15. Brew Notes: W16 + posts (featured: R3, S6, F7, E12 — 4 posts, each once). About: R3 head, H2. Contact: G14.

---

## 8. Inner pages (≥8)
Each page: short T1 head (umber ground, framed photo, caps title crossing the frame edge) → T3 lead with underlines + rotated side label → T2 cards → body → close line with circle ▸ to Book a Seat. No sidebar.

1. **On Tap & Prices** (`page-on-tap`): head F7, title "ON TAP". 4 tap cards (same beers, ABV, prices as home); the full **price list** (6 rows, full width at ≥782px); snacks paragraph with N15; "Growler fills" card with G14; 3 "next week" cards text-only (Rye Amber, Gose with sea salt, Oat Stout — "coming", no price).
2. **Book a Seat** (`page-book`): head B8. Three T2 cards: Bar seats (12, walk-in only) / Held tables (7 tables, 26 seats, hold up to 18:00 same day, kept 15 minutes) / Back room (groups 8–16, $40 deposit credited to the bill). The four-step hold as paragraphs (section 9). Booking form (core/shortcode or a plain HTML form with name, date, time, party size, email; posts to mailto fallback without a plugin) — forms never on a first screen. Policy: cancel by 16:00 same day.
3. **The Brewery** (`page-brewery`): head S6. Four T2 cards Grain / Hops / Water / Time with S4, S5, W16 (Time = text only). 5-barrel brewhouse, 6 fermenters, brew days Tuesday and Thursday mornings; how a beer goes from kettle to tap in 3–5 weeks, as narrative paragraphs.
4. **People** (`page-people`): head C9. Horizontal strip (same as home block 7) with all 7 people: 3 with photos (C9, C10, C11), 4 as text cards with cut rule, caps name, role, one sentence. Not a grid.
5. **Visit & Hours** (`page-visit`): head X13. Two cards: Getting here (bus line 14 Water St stop, bike racks, step-free entrance) / Hours (exact). Hours list as a 2-column definition list (day left, time right nowrap; stacked on mobile). 21+ after 20:00, families welcome before.
6. **Events & Back Room** (`page-events`): head E12. Three cards: Brew-day Saturdays (first Saturday monthly, 13:00, $25 incl. flight), Quiz Tuesday (19:30, free), Private hire (back room, 8–16 guests, $40 deposit). N15 with the snacks menu note.
7. **Brew Notes** (`home.html`, `archive.html`, `single.html`): head W16 on index; posts as T2 cards (cut rule, caps title, date, circle ▸), first post wide (cols 1–2 with image), others 302px. Single: T1 head with the featured image, lead with underlines, text column 680px.
8. **About** (`page-about`): head R3; three cards 2019 / 5 barrels / 4 taps (`sp-count` NOT used — keep to 3 effect types); founding story, why only four taps, H2 as full-width photo between sections.
9. **Contact** (`page-contact`): head G14; cards Write (hello@awataproom.example) / Call (+1 360 555 0142); address, hours. No form required.
10. **404 / search**: ink-on-white header, T3 lead + circle ▸ home.

Brew Notes posts (4): "Why we only run four taps" (R3), "A Tuesday brew day, hour by hour" (S6), "How to read a tasting flight" (F7), "Hosting sixteen in the back room" (E12).

---

## 9. Fixed facts and numbers (Home, inner pages, footer and all five languages identical)
- Founded **2019** by **Ines Halvorsen** and **Tomas Achebe**; 214 Water Street, Bellingham, WA 98225, USA. Currency **USD** in every language.
- **4 taps** tonight (the home/On Tap cards):
  1. FOAM LINE PALE — Pale ale · 4.6% — citrus peel, soft bitterness — **$8 / 400 ml**
  2. TIDEWATER LAGER — Helles lager · 4.8% — bread crust, clean finish — **$7 / 400 ml**
  3. ORCHARD SAISON — Saison · 5.9% — pear, pepper, dry — **$8 / 400 ml**
  4. NIGHT SHIFT PORTER — Porter · 5.4% — cocoa, roast, smooth — **$8 / 400 ml**
- **Price list (6 rows)**: Half pour 200 ml — $5 · Full pour 400 ml — from $7 (lager $7, others $8, as on the tap cards) · Tasting flight, four × 120 ml — $14 · Growler fill 1 L — $16 · Snack board for two — $18 · Back-room deposit (groups 8–16) — $40, credited to the bill.
- **Seats**: 38 = 12 bar seats (walk-in only) + 26 at 7 tables (holdable). Back room 8–16 guests.
- **Hours**: Mon closed · Tue–Thu 16:00–23:00 · Fri 16:00–24:00 · Sat 13:00–24:00 · Sun 13:00–21:00. Kitchen (snacks) until 21:00.
- **Hold process (4 sentences, never a step grid)**: choose a day and time online or by phone → pick a table for 2, 4 or 6 → we email a confirmation within the hour → we keep the table 15 minutes past your time. Same-day holds until 18:00; cancel by 16:00.
- **People (7)**: Ines Halvorsen — head brewer & co-founder (C9); Tomas Achebe — cellar & kegs, co-founder (C10); Mireille Dufort — bar lead (C11); Priya Raman — assistant brewer; Owen Castellanos — snacks & kitchen; Hanna Weiss — bookings & events; Sami Okonkwo — weekend bar.
- **Brew notes**: 4 posts (section 8). Brew days Tuesday and Thursday; 5-barrel brewhouse; 6 fermenters.
- No awards, no media names, no health claims; "Please drink responsibly · 21+".

---

## 10. Scroll effects (3 types; from stage-a "scroll-technique candidates")
| sp-* class | Where | Source on afuribrewing.com | Trigger / time / easing |
|---|---|---|---|
| `sp-parallax` | home block 1 hero (Cover background H2, `--sp-par: 8%`, mobile 5%); home block 5 F7 (`--sp-par: 6%`, mobile 4%) | pinned stage: the mountain stays while the frame and page move (`tok(g)`) | CSS scroll-driven `view()`; IO+translate3d fallback from sp-scroll.js |
| `sp-reveal sp-reveal--wipe` (clip on child) | home block 2 R3 figure; home block 8 X13 frame; inner page bodies: the first full-width photo on Brewery and About | hero frame mask wipe, easeInOutQuart | IO enter, 1.1s, `cubic-bezier(.77,0,.175,1)` (exact AFURI easing; sp-scroll default) |
| `sp-stagger` + `sp-reveal sp-reveal--up` | home block 4 tap cards; On Tap tap cards; Book a Seat cards; Brewery cards | AFURI dominant easeOutQuart `cubic-bezier(.165,.84,.44,1)` (×98 in main.css); cards themselves are static on AFURI, so this is our light addition | IO enter, `--sp-dist: 24px`, `--sp-dur: .8s`, set `--sp-ease: cubic-bezier(.165,.84,.44,1)` if the CSS exposes it, step 0.12s |
- Hero: no reveal. Price list, booking form, hours list, footer: no effect. Horizontal strip items: no reveal. Hover: links/circles colour 0.4s `cubic-bezier(.25,.46,.45,.94)` (AFURI); circle hover fills ink, ▸ turns white.
- Parallax (required) details: hero = outer Cover `.awa-hero.sp-parallax`, moving layer = `.wp-block-cover__image-background` (H2), foreground = header, H1 frame, lead, wordmark, scroll cue — **none of them inside the moving layer**. The H1 frame is a `figure.wp-block-image` inside `.wp-block-cover__inner-container` (not a direct child of the sp-parallax element), so sp-scroll's `figure>img` rule must not catch it — verify in check-parallax that the frame's rect moves with the container (diff <1px) while H2 moves ≥6px. Reference counterpart: AFURI's sticky 900px stage over a 1681px section, where the mountain holds while the rest scrolls. Kept on mobile at 5%. Reduced-motion / `?sp-static` / editor: no movement, no scale.

---

## 11. Responsive requirements
- 390px first screen: no vertical text, no absolutely positioned label overlapping text; wordmark, sub and lead in normal flow under the frame; rotated side labels exist only ≥1024px; scroll cue hidden <782px.
- Price list (and the hours list): at ≥782px **full content width**, price column `white-space: nowrap; text-align: right`, never cut or overflowing at 800 and 1280; implement as a 3-column CSS grid `1fr auto auto` (or table with `width:100%`, `table-layout:auto`). Below 782px each row stacks: name on line 1, size left + price right on line 2.
- Any table on any page stacks on mobile (`display:block` rows with label/value pairs).
- No horizontal overflow at 390 and 1280 (the tanks strip scrolls inside its own container; `overflow-x: clip` on html/body).
- 4-up cards: 4 → 2 (782–1199) → 1 (<782). Booking cards: 2+1 → stacked.

---

## 12. Similarity to the reference (target 80%)
| Dimension | AFURI (token) | Awa Taproom |
|---|---|---|
| Ground behind hero frame | sky `#00A0E0` photo, 42% saturated `tok(a)` | taproom photo H2 + `#3B2E28` tint, ≤15% saturated (reason §3) |
| Deep band | `#0B2A2A` `tok(a)` | `#0B2A2A` (exact) footer + tanks strip |
| Page ground / ink | `#FFFFFF` / `#1D1D1D` `tok(a)` | same, exact |
| Hairline / side label | `#CFCFCF` / `#BDBDBD` `tok(d,f)` | same, exact |
| Accent | none, colour from cans only | amber only in the beer + 6px dot (<1%) |
| Hero frame box | 983×640 at x229 y130 of 1440×900 `tok(e)` | 68.3% × 71.1%, left 15.9%, top 14.4% (same) |
| Frame radius / shadow | 0 / none `tok(d)` | 0 / none |
| Wordmark | ≈78px caps white, x50, baseline ≈y800, crosses frame edge `tok(b)` | 4.875rem (78px) caps white, left 50px, baseline 89%, crosses edge |
| Wordmark sub | 26px `tok(b)` | 1.625rem (26px) |
| Lead | 36px/45px, 2px underline `tok(b)` | 2.25rem/1.25, 2px underline |
| Card names | 26px/700 caps `tok(b)` | 1.625rem/600 caps Fraunces |
| Card rule | 4px #1D1D1D cut by 20px gap near the right `tok(d)` | identical |
| Circle button | Ø24 1px outline ▸ `tok(f)` | identical |
| Grid | gutter 50px, 4 × 302, gap 44 `tok(c)` | identical at 1440 |
| Section spacing | 135 / 243px `tok(c)` | 135 / 243px |
| 3-photo strip | 3 × 249×223 flush, x742–1390 `tok(e)` | 3 × 1:0.9 flush, x742–1390 |
| Rotated label | `#BDBDBD` ≈15px caps, x50 `tok(f)` | `#BDBDBD` 0.9375rem caps, left 50px, ≥1024px |
| Scroll cue | "SCROLL DOWN ◉" + 148×2 bar, last 16px detached `tok(f)` | "TONIGHT'S TAPS ◉" + 148×2 bar, last 16px detached |
| Header | 32×14 line logo, caps nav 16–18px, dotted separators, "CART [ 0 ]" `tok(f,b)` | own 32×14 glyph, caps nav 1rem, dotted separators, "TONIGHT [ 4 ]" |
| Hero motion | mask wipe 0→100px, easeInOutQuart `tok(g)` | block 2 / 8 `sp-reveal--wipe` 1.1s `cubic-bezier(.77,0,.175,1)` |
| Pinned ground | sticky stage `tok(g)` | `sp-parallax` 8% (hero), 6% (F7) |
| Hover | colour 0.4s `cubic-bezier(.25,.46,.45,.94)` `tok(g)` | identical |
| Imagery | real photos, no radius, product + landscape | film-grain real photos, no radius, pour + room |

---

## 13. Home acceptance checklist
1. First screen at 1440×900 shows all six KV items: sharp frame H1 at the stated box, H2 ground visible on four sides, "AWA TAPROOM" 78px caps crossing the frame bottom edge, underlined two-line lead at the left overlapping the frame edge, "TONIGHT'S TAPS ◉" + bar bottom-right, overlay header with glyph, dotted nav and "TONIGHT [ 4 ]". No button, table, form, search box or centred giant text.
2. `check-first-screen.py --max 15` passes (target 6–12%).
3. 390px: frame then wordmark/sub/lead in flow, no overlap, no vertical text; auto-gates mobile text overlap passes.
4. Block order exactly as section 6 (8 blocks); 12 photo positions, no repeat; ≥250 English words; narrative paragraphs in blocks 2, 3, 6, 7.
5. T2 cut rule (4px, visible gap near the right end) + Ø24 outline circle ▸ on the 4 tap cards and the 2 booking cards; T3 2px underlines in blocks 1, 2, 3, 6; rotated `#BDBDBD` labels at ≥1024 on blocks 4, 6, 7, 8.
6. 3-photo strip is flush (0 gap), radius 0, right half; tanks strip scrolls horizontally inside its band and shows a partial fourth item.
7. Price list full width at 800 and 1280, prices nowrap right, never cut; stacks at 390.
8. Parallax: `check-parallax.mjs` desktop and mobile — hero H2 moves ≥6px relative to the Cover, the H1 frame does not; F7 moves; reduced-motion 0. Wipe on blocks 2 and 8, stagger on block 4; no reveal in the hero; nothing left transparent after scrolling to the bottom.
9. Colours: white base, ink `#1D1D1D`, umber `#3B2E28` hero/close, `#0B2A2A` strip/footer, amber only in the beer and tiny UI; radius 0 everywhere.
10. Fonts: Fraunces headings, Nunito Sans body, loaded via theme.json fontFace; editor equals front end; max size 4.875rem.
11. Numbers on home (4 beers and prices, 38 seats / 12 walk-in / 7 tables / 15 minutes, hours, address, 2019) match section 9 exactly.
