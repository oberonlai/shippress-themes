# Reference tokens: R1 Inoue Surveying (https://inoue-surveying.co.jp/, S5-Style #11535)
Measured with getComputedStyle at 1440×900 headless Chrome (2026-10-24). Values only; no assets, copy or logo copied. Screens in `ref/`. Site is a Studio.design / Nuxt build, all sections `.sd` boxes.

## (a) Colour
| role | hex | area | where |
|---|---|---|---|
| ground (main) | #EDEDED | ~45 % of page | hero-2 band, Case band, Strength header zone, with faint 1px grid overlay |
| white | #FFFFFF | ~25 % | header, Strength card, News |
| dark band | #33312A (51,49,42) | ~12 % | Service band (789 px tall), buttons, footer text-on-dark |
| text ink | #26231D | | headings, body on light |
| muted text | #5E5749 | | footer links, dates |
| label olive | #7F7000 | tiny | "Strength / Case" eyebrow + tick icon, sub-labels 14–16 px |
| rules | #D9D3C7 (list rules 1 px), #9E9989 (header bottom 1 px), #5E5749 (arrow-box 1 px) | | |
| accent yellow | #FFEA00 | header CTA 180×80 (1.2 % of first screen), recruit band 1440×854 (full-bleed; we do NOT copy this), button dot 5 px | |
First screen saturated pixels (s>0.5): ≈4 % (photo sky + yellow CTA). Roles: main = ground grey + white; sub = warm ink band; accent = yellow on ≤2 % area.

## (b) Type
- Headings: Zen Old Mincho 400 (serif). H1 56/95.2 (lh 1.7), white; H2 40/68 and 48/81.6 (lh 1.7), ink; H3 32/54.4 white; vertical headline (hero-2) ≈ 46 px vertical-rl.
- Body / nav: Zen Kaku Gothic New 400 16/30.4 (lh 1.9) ; compact 14/26.6; lead 18/34.2; Latin eyebrow Zen Kaku Gothic Antique 400 14–16, olive. letter-spacing normal in CSS (tracking looks wide on JP). No uppercase.
- Big watermark word: outline Latin caps, ~170 px, 1 px stroke, bottom of hero, partly cropped by fold.
- (Ours is sans: Instrument Sans headings 400/500, Atkinson Hyperlegible body; keep the ratio 56:40:16, lh 1.7 headings / 1.9 body.)

## (c) Spacing
- Header 80 px tall, bottom border 1px #9E9989; logo block 316 px wide; CTA 180×80; mail box 80×80 #EDEDED.
- Container: content left 149–150, right edge ≈1291 (≈1140 wide); Strength card 1384 wide inset 24 px from the right; page has a 24 px left ruler strip.
- Section padding: Strength 96 top / 120 bottom; Service band 120 top; Case 120 top / 168 bottom; News 88 / 136; hero-2 136 / 80.
- Column gap: Service cards 370 wide, gap 16; Strength split text col x 725–1233, image col x 150–626.
- Rows (link list): 106 px tall, 1px rule, 14 px eyebrow + 28 px title.

## (d) Radius, border, shadow
- Radius: buttons 4 px; photos 0; scope circle 50 % (diameter ≈ 476 px) with 3 px ink stroke. Boxed arrow 46×46, 1 px #5E5749, radius 0. No shadows (none found).

## (e) Imagery
- **IMAGERY = photo.** Main images (hero, Strength, 3 Service cards, Case pair) are documentary colour photographs of staff at work outdoors/in office: natural daylight, slightly desaturated, sky-blue; one secondary graphite pencil drawing of a hand (hero-2) which is a minority (1 of ~8 image slots), so photo wins. Pencil drawing: soft grey graphite, cross-hatched shading, no colour, fades into the grey ground with a white gradient.
- Hero: full-bleed 1440×820 photo, subject (person + tripod instrument) right of centre, ~40 % width, headline over bottom-left blurred foreground leaves (foreground blur).
- Strength: photo in a circle mask 476 px, cross-hair lines (2 × 3 px, ink) drawn through the centre like a scope, with an arc arrow and "8" mark; left 33 % of container; a second small cut-out sits at bottom-left (we do not use cut-outs).
- Service: 3 cards 370×~280 (≈4:3), radius 0, bottom-to-top dark gradient scrim, title bottom-left white 32 px Mincho, white 46×46 arrow box bottom-right.
- Case: two photos overlapped: A 270×180 (3:2) top-left, B 466×308 (≈3:2) offset +16 px right/+57 px down; each framed by a hairline rectangle with crop-mark ticks extending 8 px beyond the corners (olive-grey #9E9989).
- Shares: Service row 3 × 26 %; Case pair ≈ 50 % of the container; hero 100 %.

## (f) Decoration
- Left ruler strip: fixed, 24 px wide × full height, ticks 12–24 px long, 1 px, olive-grey, every ~6 px with longer ticks every 5th.
- Faint square grid overlay on grey zones: 1 px lines at 8 % opacity, 24 px cells.
- Eyebrow: 5 short vertical ticks (heights 6/10/14/10/6) + Latin word.
- Boxed word in headline: 1 px frame around ""to measure"" with 12 px crop-mark extensions top-left and bottom-right.
- Crop-mark frames around photos (see e). Hero watermark outline word. Button dot 5 px yellow at right end of the dark button (260×64, radius 4).
- Scroll indicator: none.

## (g) Motion
- Engine: Studio runtime. Every `.sd` block starts with class `appear` (hidden state); an IntersectionObserver (default threshold 0, one-shot, unobserve after hit) removes it and adds `appear-active` for one frame; the CSS transition then plays. No GSAP, ScrollTrigger, Lenis, AOS, no scroll listener.
- Per-element presets (7 distinct): fade 500 ms delay 300 ms; fade + translate 0→10 px up 1000 ms delay 500 ms; scale from 0 → 1 1000 ms delay 1500 ms; fade 2000 ms delay 2000 ms ease-in-out; blur 84 px → 0 backdrop 1500 ms delay 900 ms; scale 1200 ms delay 1800 ms cubic-bezier(1,0,0.48,1). Default easing cubic-bezier(0.4,0.4,0,1), default duration 300 ms (hover 400–500 ms).
- Photo frames (hairline + crop marks) are drawn immediately; the photos fade in later inside them (`ref/scroll-inoue-case-before.png` → `-after.png`). Service cards show the brown scrim flat before the photo fades in.
- Hero: headline lines appear on load; sticky hero-2 text (position: sticky; top: 0). No parallax found.
