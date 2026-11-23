# Reference

Main: https://www.kokuyo.com/ (S5-Style gallery entry; workplace stationery, furniture and space maker). Screens in ref/: kokuyo-first.png, scroll-kokuyo-900.png (slide 2), scroll-kokuyo-1150-early.png / -after.png (grid sheet + first tile), scroll-kokuyo-1800.png (tile directory), scroll-kokuyo-2700.png (notice rows + footer start), scroll-kokuyo-3600.png (footer stripes).
Secondary: none (single reference; tokens in reference-tokens.md).

## Structure observed
1. Thin notice strip over the hero (lime), logo + slogan left, triple-slash menu right.
2. Two full-height hero slides: slide 1 flat-vector pop-up office scene with a headline bottom-left and a circle-arrow link; slide 2 white sheet with a tilted thick grid and a diagonal band, headline lower-left, "2 / 2" counter.
3. Grey strip, then a directory of tiles: one wide documentary photo tile, four flat colour tiles (title left, one-liner right, circle-arrow | plus at the foot), a grey strip tile, a right column of an illustrated card, a magazine card and six link rows.
4. Two-column dated news lists with parallelogram label markers, grey notice accordion rows.
5. Footer in a saturated field with link columns left and a diagonal stripe field + wordmark right.

## Signature technique candidates (we use three, no cut corners / chamfers, which another theme already took)
- A. Tilted thick grid sheet: a rotated grid of heavy lines on a white panel with a few cells tinted (slide 2).
- B. Action-pair tiles: flat tint tiles, title left + one-liner right, foot "circle arrow | plus" and a small status-swatch pair under the edge.
- C. Half-field diagonal stripe close: stripes only on the right half of the closing band, link columns with tick-topped rules on the left.

## Our counterpart (planned in design-spec.md; build fills exact selectors)
| Reference element | Ours | Where |
|---|---|---|
| Lime notice strip (50 px) over the hero | Clay #E9DAD3 notice strip, 50 px, batch-1 closing date | All pages, above the top bar |
| Logo + slogan left, triple-slash menu | Wordmark "ZASEKI" + slogan left, anchor menu centre, Pre-order button right; own triple-slash SVG as the mobile menu button | Header |
| Hero slide 1: pop-up office diorama, people at several levels | Photo collage: receptionist touching the wall panel (H1) and a waiting visitor (H2), parallax at two speeds | Home hero col 1 and col 3 |
| Hero slide 2: white sheet with thick tilted grid (A) | Solid clay panel with a russet 10 px grid at -9 deg, free / held / taken cells, headline below (T1) | Home hero col 2; small version in 9 inner page heads |
| "n / 2" counter + 52 x 3 edge ticks | Info bar with three pre-order facts, 52 x 3 russet tick, static "01 / 03" | Home hero foot |
| Wide photo tile + flat colour tiles, circle-arrow / plus foot, swatch pairs (B) | T2 directory: X1 wide tile, russet / sage / clay / sand tiles, #CCCCCC strip, right photo card + tick-ruled link rows | Home #box; Panel, Install, Pricing, Pre-order pages |
| Parallelogram label markers, two-column dated news lists | Section label lockup on every section; "Pilot notes" / "From the workshop" lists | Home #pilots, Journal, archives |
| Grey notice accordion rows | Grey question rows (details) | Home #questions, Questions page |
| Half-field diagonal stripe footer with wordmark, tick-topped link columns (C) | Russet closing band: CTA + link columns left, 190 px / 58 deg russet / pale stripes right, wordmark bottom-right (T3) | Footer on every page |
| autostepin fade / showslash line draw | sp-reveal--up + sp-stagger (0.7 s, 12 px); sp-reveal--wipe tuned to 1.2 s cubic-bezier(.3,0,.3,1); hero grid draw keyframe | Home rows and tiles, inner heads |
