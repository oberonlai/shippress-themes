# Reference tokens — https://www.e-chubu.jp/ (S5-Style, school / driving-school course site)
Measured 2026-10-26 with headless Chromium 1440×900 (getComputedStyle + CSS/JS read). Values only; no asset, text or logo is copied. Root font-size is fluid (11.076px at 1440, 1rem ≈ 11px), so rem below are converted to px.

## (a) Colour
| Role | Hex | Share of first screen / page | Where |
|---|---|---|---|
| Ground (page) | #FFFFFF with a soft pink→mint→cream gradient wash (#FBF9E3 / #F6F6F6 / pale pink) | ≈ 45 % | body, big rounded panels |
| Photo (non-UI) | green foliage, mint car, skin | ≈ 40 % | hero photo |
| Main / point | #FF1626 red | ≈ 3 % (title English words, side tab, "01" numbers) | Emblema One headings |
| Sub accent | #49EBD2 mint · #40D9FF cyan · #FBFF27 yellow · #9D92FF violet | ≈ 4 % | side tab, hashtag letters, buttons |
| Text | #000000 | ≈ 4 % | nav, body |
| Line / grey | #929292, #DBDADA-ish | < 1 % | |
First-screen saturated share (S>0.5, V>0.35) measured on the PNG: **11.1 %**. Ours must stay ≤ 15 % (target ≈ 8 %).

## (b) Type
| Item | Value |
|---|---|
| Families | Zen Kaku Gothic New (body, JP headings, 500/700); Emblema One (English display words, numbers) |
| Body | 16.6px / line-height 33.2px (2.0) / weight 500 / ls normal / colour #000 |
| Section English title (.lcl-sec__ttl) | Emblema One 55.4px / 58.1px / ls −2.77px (−0.05em) / red #FF1626; large "About" word ≈ 160px at the hero→about seam |
| JP section title (.lcl-title__txt) | 33.2px / 53.2px (1.6) / 700 / ls +1.66px (0.05em) |
| Number "01" | Emblema One 88.6px / red |
| Lead copy in rows | 19.9px bold; red 28px two-line headline |
| Nav | 16.6px / 500, "+" glyph before each item, 12.2px / 700 header pill button |
| Case | none (mixed) |

## (c) Spacing
Section vertical padding: 0 top, 99.7px bottom on the white panel; sections stacked with ≈ 120–180px gaps (about rows 687px pitch, img 581×685). Content column ≈ 1107px in news/pickup, 1329px white panel (inset 55px each side), full-bleed 1440 for hero, gallery, reason. Column gap about rows: image x=152–733, text x=803 → 70px gap. Card row: 3 × 355px with 22px gaps (≈ 1108px).

## (d) Radius / border / shadow
Radius: hero photo bottom corners 88.6px (5rem at 1.1px root, 2rem on mobile); white panel (.lcl-license) 88.6px; photo cards 33px; small link cards 22px with 1px #E5E5E5 border; header buttons pill (999px) with 1px #000 border; header logo tab and nav tab are white blocks with 55px-rounded inner corners. Shadow: one soft glow `0 0 55px rgba(223,212,159,.3)` (cream). Borders otherwise 1px.

## (e) Imagery
**IMAGERY = photo.** Photos fill the main image positions (hero, 3 vehicle cards, about rows, gallery strip, reason slides); illustrations are limited to small hand-drawn character stickers (≈ 12 % of image slots: two jumping figures next to "01", a girl bottom-left and a small bus bottom-right of the hero) → photo wins. Illustration style (for reference only, not reproduced): flat vector, thick-ish dark outline 2–3px, bright fills (pink, blue, red), cut out and floating on the ground.
| Image | Ratio | Radius / mask | Placement |
|---|---|---|---|
| Hero | 1440×~690 (≈ 2.1:1) full-bleed | bottom corners 88px, overflow hidden, img scale 1.4→1 on load | under the header, top 100px |
| Vehicle cards | 355×320 (1.1:1) | 33px | 3 across inside a white 88px-radius panel |
| About rows | 581×685 (0.85:1) | 88px, rotate −5° (enter −3°, scale 1.1 → 1) | left 40 % of the row, text 50 % on the right, row pitch 687px |
| Gallery strip | 5 tilted square-ish slides, ±5° alternating | 33px | Splide auto-scroll marquee, full-bleed |
| Reason slides | cards rotate −5° / 5° / −5° | 33px | Splide, 3 visible |

## (f) Decoration
Fixed side tabs, right edge: red 78×218 and mint 78×238 blocks, radius 22px on the left only, vertical text (writing-mode vertical), small icon on top, y=217 and y=447. Pagination dots at left of hero (3 dots, 10px, first red). Hashtag band at the hero foot: "#LICENSE #DRIVE" in Emblema/serif ≈ 100px, white outline + yellow fill + cyan fill, on a pastel-pink strip. Sticker illustrations 28rem wide, overhanging the hero bottom by 67px. "+" glyph (12px, light yellow-green) before nav items. Numbers 01/02/03 in red Emblema 88px with a pair of figure stickers beside.

## (g) Motion
| Effect | Trigger | Values |
|---|---|---|
| Fade-in family `.fadein`, `-right` (translateX 3rem ≈ 33px), `-left`, `-top`, `-bottom` | GSAP ScrollTrigger `once`, start `top 70%` (PC) / `top 80%` (SP), adds `.scroll-fade` | opacity 0→1, 0.8s ease (default), no stagger |
| Title English chars | `.scr-anin` ScrollTrigger once, SplitText chars | from scaleY .4, yPercent 10, alpha 0, duration .8s, `elastic.out(1.2,0.6)`, stagger .025s (title05: amount .08 from centre) |
| Hero load | `.js-load--on` after window load | photo wrapper scale .9→1 .8s `cubic-bezier(.83,0,.17,1)`; img scale 1.4→1 + opacity .8s same easing; side stick opacity+translateY 1.5rem delay .65–.75s; illustration scale .6 rotate −5°→0 .45s `cubic-bezier(.34,1.56,.64,1)` delay .95s; hero "EN" chars delay .9s stagger .025s |
| About row | `.scr-anin--on` | img rotate −3°→−5°, scale 1.1→1, opacity .35s, .5s `cubic-bezier(.34,1.56,.64,1)`; copy delay .15 s, text .2 s; figure sticker scale .6→1 delay .25s |
| Reason / gallery slides | ScrollTrigger once, start `top center+=25%` | from opacity 0, yPercent 10, stagger .1s, 1.6s `elastic.out(1.1,.9)`; Splide auto-scroll runs only while in view |
| Header | ScrollTrigger at 50vh | adds `header--scroll` (compact), removed on leave back |
| Hover | cards/buttons | scale .25s ease; bounce `cubic-bezier(.34,1.56,.64,1)` .3–.45s |
Library: GSAP + ScrollTrigger + SplitText + ScrollTo, Splide (+AutoScroll, Intersection).
