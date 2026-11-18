# Reference (draft): Seseragi House
Main reference: https://koti-okinawa.com/ (S5-Style listing, family-run old-house tea and sweets shop that also rents the house; closest in mood to a small riverside house with breakfast: timber house, daylight, trays on low tables, quiet pale ground). No secondary reference.
Tokens: brand/reference-tokens.md. Screens: brand/ref/.

## What we borrow (shape, composition, contrast; no asset or text is copied)
1. Full-bleed daylight photograph of the house exterior as the first screen, wordmark top-left, a vertical headline hung at the right edge, a two-column vertical lede beside it.
2. The "hung page": a text column at about 31% and photographs of two different ratios stacked at about 65%, hung at different heights, section title set vertically in the right margin.
3. A full-bleed dim photograph with a 150%-tall parallax layer and light text on it, directly after pale sections.
4. A slow-drifting strip of small 3:2 tray photographs under a paragraph.
5. Character-by-character rise of headings; blocks that fade up 30 px; photographs that settle from scale 1.2.
6. Quiet palette: warm white ground, near-black ink, mist-stone hairlines, colour only from photographs.

## Palette (ours)
| Role | Hex | Share |
|---|---|---|
| Ground | #F7F7F3 | ~55% |
| Ink | #212529 | ~8% |
| Mist stone (hairlines, panels) | #E5E4DF | ~6% |
| White tea accent (row hex) | #C0A48A | ~3% |
| Deep river grey-green (dim band, footer) | #3C4743 | ~8% |
| Photographs | n/a | ~20% |

## Mapping table (reference element -> our version -> where; design-spec.md is binding)
| Reference element | Ours (finished counterpart) | Position | Built in |
|---|---|---|---|
| Full-bleed daylight house photo, leaves in front | P01: the house from the river bank, Marta setting bread and jam at the window table, a guest pouring coffee, reeds in front, inside a 24 px frame | home first screen x24-1416, y24-876 | patterns/hero (KV 1), sp-parallax 8% |
| Wordmark + tracked label top-left over the roof | "Seseragi House" Spectral 500 white + "Bed and breakfast · four rooms" label | header x72, y64 | parts/header (overlay) |
| Tall vertical headline at the right | H1 "Breakfast / above the water", vertical-rl, Spectral 4.5rem white (horizontal below 1024 px) | x1236-1320, y132-700 | patterns/hero (KV 3) |
| Two-column vertical lede | "Four rooms, one table. / Bread, jam and coffee at eight." vertical, 16 px / 2.0 | x1140-1200 | patterns/hero (KV 4) |
| Link list lower-left | in-page anchor stack (Rooms, Breakfast, The river, Ask about dates), 47 px pitch; real menu = overlay sheet #212529cc with #C0A48A dot | x72, y600-800 | patterns/hero, parts/header |
| Pale calm strip | centred 480 px #F7F7F3 sheet on the window's bottom edge (row centered-narrow-column) | x480-960, y704-876 | patterns/hero (KV 6) |
| Hung page (31 % text, 3:2 + 4:5 at 65.5 %, left-bleed 753x502, vertical margin title) | T1: the couple (P02, P03, P04), vertical title "Marta and Jonas" | home block 2; About, Breakfast, The river, The stay | patterns/couple + inner pages |
| Dim full-bleed timber photo, 150 % layer, white text | T3: river at dusk P12 + #3C4743 40 %, vertical title, white column x500 | home block 5; About and The river (P16) | patterns/river, sp-parallax 12% |
| Slow strip of 280x186 tray photos, 28 px/s | T2: P08-P11 breakfast trays, sp-marquee 44 s/set from x448 off the right edge | home block 4; Breakfast, Rooms | patterns/table |
| 796x531 photo in the text column | P06 breakfast table | home block 4 | patterns/table |
| 378x252 photo beside text | P05 arrival tea, hung at x1040 by the "Arrive" row | home block 3 | patterns/stay |
| Block fade-up 30 px .95 s | sp-reveal--up, --sp-dist 30px, --sp-dur .95s, sp-stagger on rows | home blocks 2-8, inner sections | all patterns below the hero |
| Quiet palette, colour only from photos | #F7F7F3 / #212529 / #E5E4DF / #C0A48A / #3C4743 | site-wide | theme.json |
