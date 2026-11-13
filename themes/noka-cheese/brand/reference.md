# Reference (counterparts filled in at design stage; binding detail in design-spec.md)
Main reference: https://cheesetart.com/ — S5-Style gallery entry, cheese confectionery brand. Measurements: reference-tokens.md. Screenshots: brand/ref/ct-first.png (loading blur), ct-s900.png, ct-s2700.png, ct-s6300.png, ct-s8100.png, ct-s10000.png, ct-s12000.png, ct-s14000.png.

IMAGERY: photo (real studio photography of the product on pale sculptural props, high-key).

## Signature candidates
| # | Reference technique | Shape / composition | Our counterpart |
|---|---|---|---|
| C1 | Double-rim pebble photo | Asymmetric rounded mask with a second pebble offset behind it so a warm rim shows as a crescent; photo at left 4/12, text 4/12 on the right | **T1**: 535 px pebble, three asymmetric radii, rind rim `#EBCB94` 14/12 px via offset box-shadow; home hero (H1 monger wire-cutting a washed rind), #3 sticky (H2), #4 sticky beside the cards (S0), #7 (M1); 420 px pebble on every inner page head |
| C2 | Dotted three-guide page | Three full-height 1px dotted vertical guides at 10%, 50%, 90%, with text sitting between them and a fixed double-line menu glyph | **T2**: white dotted guides at 10.3 / 50 / 89.7 % on `.wp-site-blocks` (every page), eyebrows on the left guide, text column x 794 w 447, double-line glyph in the sticky header (menu toggle on mobile), dotted row rules in spec/price tables |
| C3 | Blur-to-focus first screen | Pale ground, white outline line-drawing glyph, stacked wordmark, everything resolves from blur | **T4** (supporting): pale willow `#DDE3D3`, our own white washed-rind wedge glyph, stacked H1 "Named. / Cut. / Wrapped." 4.5rem; blur 14 px → 0 over 1.4 s, off under reduced motion / `?sp-static` |
| C4 | Arch panel closing band | Warm paper band with a big arch holding the outline glyph, two wide white pill links under it | **T3**: paper `#FAF5EA` band 640 px, arch 580 × 760 in ground colour with 8 px white rim, cropped by the floor, our glyph inside; two full-width white pills "Reserve a board" / "Visit the counter"; closes home, Cheeses, Boards, Tastings, About, Visit |

## Scroll effects (reverse-engineered)
Chosen (design-spec §7): sp-reveal--up + sp-stagger (statement lines, cards, steps, journal; 0.8 s, 24 px, cubic-bezier(.22,1,.36,1)) from `.e-step`; sp-reveal--zoom (inline pebbles, 1.2 s) from the pebble morph-in; sp-parallax on the home counter band (P1, 10%) and inside the hero pebble (H1, 6%).
