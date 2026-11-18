# Tabidachi Study Tours

School excursion and study-trip organiser WordPress theme for educational travel agencies, schools, and teachers. Built with an editorial split hero, timed story rails, audience gateway cards, and term-by-term planning timelines. Features clean typography with Source Serif 4 and Nunito Sans, structured itinerary layouts, and calm, accessible design.

## Design notes
- White page, near-black ink (#101214), three pale audience tints (gold, celadon, rose-grey) and one mulberry-gold accent (#B79B5B).
- Signature techniques: editorial lead photo with a five-entry timed rail and a hairline day-line; tinted audience gateway cards ("For schools / teachers / parents") with a notched photo foot and an arrow disc; a headcount speech bubble and a docked "On the road" card on the photo.
- Supporting: tall chip cards, an inset gold duotone parallax quote band carrying the newsletter slot, an inset black request band, a horizontal term-by-term line.
- Type: Source Serif 4 for headings, Nunito Sans for text; Noto Serif TC / JP subsets for zh-TW and ja headings.
- Motion: sp-scroll (assets/sp-scroll.css, .js): parallax on the hero photo and the quote band, reveal-up and stagger, count-up figures, a marquee ticker. Everything is in its final state without JS, with reduced motion and in the editor.

## Patterns
header-main, hero, gateways, story, term-line, trips, quote-band, on-the-road, prices-glance, request, journal-list, footer-main, and the template bodies tpl-home / tpl-archive / tpl-search / tpl-404 / tpl-single.

## Stage 2 fixes (home)
- Lead photo regenerated: tighter documentary framing, warm sunny light, subjects in the right half so the headline sits on open sky (hero-safe gate passes at 1440, 1280 and 1100).
- Mobile: lead photo is square and cropped to the leader, teacher and line; the headcount bubble sits directly under the photo and points up at it; rail rows are top-aligned.
- Docked card is wider; the audience-card photo notch is larger; the top menu links to real pages (schools, teachers, parents, trips, how we plan, about).
