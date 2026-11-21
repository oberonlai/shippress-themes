# Reference (draft, stage 1)
Reference: https://amana.jp/ (amana; visual-production company; the site opens on the work and leads to one enquiry). Measured tokens: `reference-tokens.md`. Screenshots: `ref/`.
No secondary reference.

## What is borrowed (shape and relationship, never assets or copy)
1. Mist-gradient first screen with film grain, one dark headline and a polygon-clipped photo cluster tucked against its last word.
2. Dark works band of chamfered (diagonal-cut) photo tiles in mixed ratios that settle from a 5 degree tilt.
3. Grid-ruled white sheet with grouped, dotted-heading outline chips (each ending in three dots) listing what the studio does.
4. Quiet palette: grey ground, near-black band, white sheets, colour only in tiny tags.

## Colour mapping (draft)
| Role | amana | Ours |
|---|---|---|
| Hero mist left | #B2D3CC | #BFC9BD (stone-sage) |
| Hero mist right | #CBBEBA | #CFC4B4 (stone-blush) |
| Ground | #EEEEEE | #EDEDEA |
| Dark band | #131313 | #151614 |
| Primary stone (brand) | n/a | #A69E89 |

## Product-to-ours mapping (finished theme; binding values in `design-spec.md`)
| amana element (token) | Kirinuki Studio (where) | Kept | Changed and why |
|---|---|---|---|
| Mist gradient hero with grain, ~90% empty (RT(a)(f)) | Home hero ground `#BFC9BD` -> `#CFC4B4` + SVG grain; inner page heads (8 pages); closing "Book a shoot" band | two-hue gradient, grain, empty air | hue moved from mint/blush to stone-sage/stone-blush (row stone palette), same lightness |
| "Co-Creation" 88 px dark headline + light "with" (RT(b)) | "We shoot your whole range" 5.5rem `#47393F` + light "in a day" | size, weight, plum-grey colour, tucked light word | left-aligned beside the photos (row hero_text beside-photo) |
| Three-photo chamfered polygon cluster (RT(e)) | T1 product-grid triptych H1/H2/H3, 584 x 460, polygon 25% cuts | three equal columns, same polygon | enlarged to the product grid the row asks for; studio scene instead of street portraits |
| Floating white r16 header bar, icon cells, menu cell (RT(d)) | Overlay header: white r16 bar inset 8, 64 px, language cell + dark "Book a shoot" cell | geometry, inset, separate cells | menu cell replaced by the single CTA cell (landing track) |
| Pinned hero collapse into a rising white sheet (RT(g)) | `sp-parallax` 8% on the triptych columns + statement sheet overlapping the hero foot by 48 px | the sheet rises over the hero, photos drift | no pinning script (sp-scroll only) |
| Ghost text wall behind the about sheet (RT(f)) | Statement sheet `#studio`, 10 lines at ~4% contrast, one `sp-marquee` line | low-contrast repeated words | words are kinds of shoot |
| Dark works band of chamfered mixed-ratio tiles, tilt-settle, white pill (RT(a)(c)(e)(g)) | T2 home `#work` (6 tiles) + Work, Shoots, About, Booking pages | `#151614`, 160/96 padding, 1248 grid, gap 16, polygon, 5 deg tilt, 1.5 s easing, scrim captions, white pill | translate 40 -> 30 px (sp-scroll cap) |
| Grid-ruled white sheet with dotted-heading outline chips (RT(c)(d)(f)) | T3 home `#shoots` (kinds of shoot) + Shoots, Rates, Booking, FAQ, Journal | r16 sheet, 1 px grid ~128 px, two-dot headings, r4 outline chips with trailing dots, 4 colours | chip colours muted (plum, ochre, rose, green) |
| Section title: dot cluster + 24 px title + 12 px sub-label (RT(b)(f)) | Every section title, site-wide | sizes and order | none |
| White pill button r1000 with dot icon (RT(d)) | "Book a shoot" pill everywhere (dark on light, white on dark) | geometry, shadow, dot icon | dark variant added for light grounds |
| Not used | insights, events, downloads, cookie card, amana photos, copy and logo | | not part of a shoot-booking landing page / never copied |
