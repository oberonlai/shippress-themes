# Reference (draft) — Hozue Food Festival

- Main reference: https://fujirockfestival.com/ (a large outdoor festival; crowd photography, dates, one ticket call).
- Screens: ref/fuji-first.png (first screen), ref/fuji-full.png (top 2600px).
- Tokens: reference-tokens.md. IMAGERY: photo.
- Colour mapping: orange bar #E64219 -> olive #938B4B; taupe panel -> pale olive-grey; blue -> wine #5B2A38 (small).

## Finished counterpart (binding detail in design-spec.md)
| Reference element (fujirockfestival.com) | Hozue Food Festival counterpart |
|---|---|
| Orange 68 px header bar with dates + venue (#E64219) | Olive 68 px header strip #938B4B, ink caps date line "11–12 SEPTEMBER 2027 · HOZUE RIVERSIDE PARK", language pill, wine CTA |
| Framed 2:1 crowd photo slideshow, 800 ms fade / 3.6 s | Framed 2.9:1 strip window, r24, inset 20 px: H1 pour → H2 plating → H3 entrance under bunting, 800 ms fade / 3.6 s hold |
| Round dot pager | 3 round dots inside the window bottom, active wine |
| Floating 72 px icon strip, r24 ends, shadow | Floating 72 px card-row of 5 tiles below the H1 (hero_footer card-row); inner pages use it as in-page anchors |
| Fixed blue "Buy Tickets" tab | Wine #5B2A38 filled last tile "Early-bird tickets" + header button (one repeated CTA) |
| Taupe r24 NEWS panel with r12 cells, 3:2 thumbs | Olive-grey #DDDDCB r24 programme panel, #EBEBDE r12 cells, Sat / Sun columns; journal, FAQ, stallholders, getting here |
| Centred caps section words + flat corner chips | Work Sans 600 caps 2rem centred + 3 overlapping discs and gradient bar at section corners |
| Ground #F7F6F5 / panels #D9CFC5 #E3DBD4 / blue accent | Ground #F7F6F5 / panels #DDDDCB #EBEBDE / wine accent #5B2A38 |
| No scroll reveal; header hides on scroll (JS listener) | sp-stagger + sp-reveal--up on cells, sp-count on figures, sp-parallax (10%) riverbank band; no header hide |
