# Fukubi Clinic — reference notes (counterparts filled from design-spec.md)

IMAGERY: photo (high-key real photography, no illustration).

## Sources (S5-Style gallery, category education-healthcare)
- Main: https://shinagawa-asada.jp/ — a specialist women's clinic. Quiet pale-wash first screen, three circular photos, hours card.
- Secondary: https://taizankai.org/ — a care group site. Used only for its white label strips on the photo and the sweeping foot curve under the hero, and for the white facility cards with a coloured top edge; its saturated multicolour blobs are NOT used.

## Signature candidates
1. Circle triptych: one large circular physician photo flanked by two smaller circles that are cut by the viewport edges, on a pale wash, with a soft blurred halo disc behind (Asada first screen, ref/asada-first.png).
2. Dot-matrix hours card docked over the lower right of the centre circle (Asada hours card, ref/asada-first.png).
3. Bowl-topped white cards: tinted arc on top holding a line icon, two-line label below, small square chevron box bottom right (Asada "for whom" cards, ref/scroll-asada-900.png).
4. News as white radius-10 rows: date with big day number, pill tag, one line of text, chevron (Asada news, ref/scroll-asada-1800.png).

## Scroll effects seen
- Asada: Swiper autoplay circles (2 s delay, 1.5 s speed); jQuery inview reveal (opacity + transform, 1 s, per-element delay); fixed halo disc that moves behind content after the hero.
- Taizankai: scroll fade-up of cards (ani.js), sweeping line drawn across the hero.

## Screenshots
ref/asada-first.png, ref/scroll-asada-900.png, -1800, -2700; ref/taizan-first.png, ref/scroll-taizan-900 to -5400.

## Counterpart table
| Reference element | Our counterpart (design-spec.md) |
|---|---|
| Pale green wash first screen `#E8EDE6` (~55%) | Pale slate wash `#E4EAED` (~55%), same lightness, hue from the row palette |
| Centre circle ~560 px, smiling physician at a desk | P01 circle 560 px: physician turning a printed scope report toward a patient, nurse behind |
| Flanking circles ~316 px (interiors) + edge-cut circles | P02 nurse writing the fasting window, P03 daylight consulting room; edge-cut P04 reception, P05 corridor |
| Swiper autoplay (2000 ms delay, 1500 ms slide, centre grows) | CSS-only circle cycle: 2.5 s hold, 1.5 s glide, 316 to 560 px; static under reduced motion, `?sp-static`, editor, below 1024 px |
| Blurred glowing halo disc (38.8vw, 20% + 60% layer, 30 px blur) | Same geometry in a slate-mist gradient with a faint warm rim; moves with `sp-parallax` `--sp-par:10%` |
| Light headline with oversized quote marks, lower left | "“Understand it” / before a test is booked." Figtree 300 3rem, slate + ink |
| Dot-matrix hours card 505 x 190 docked over the centre circle | Week card: Mon-Hol x 2 bands, dot = open, ring = scope morning (fasting), slash = closed; reused on First visit, Tests, Preparation, Contact, close block |
| Floating white header, outline FAQ pill, orange booking pill | Sticky white bar with 20 px bottom radius, outline FAQ pill, `#FF9D00` to `#F2B230` booking pill with ink label |
| Bowl-topped "for whom" cards (3 + 4, radius 10, chevron box) | Symptoms index "Which complaint brings you in?": 7 bowl cards 3 + 4; also Tests, About, Fees, FAQ |
| News as white radius-10 rows with big day number and pill | News rows on home and archives; same row form with minute markers for the first visit and the Preparation page |
| Big rounded green "Feature" panel with tilted tiles behind a photo | Rounded wash panel (radius 40) "Who reads the result" with P09 and two tilted tiles, three readers with circle portraits |
| White buttons, min-height 70, square chevron box right | Same button spec, slate gradient chevron box |
| inview reveal (opacity + transform 1 s ease) | `sp-reveal--up` + `sp-stagger` on symptom cards, visit rows, story cards |
| Taizankai sweeping line under the hero | 2 px `#D9B98C` curve in a separator after the hero, `sp-reveal--wipe` |
| Taizankai coloured blobs, Asada vertical hours tab, chatbot | Not used |
