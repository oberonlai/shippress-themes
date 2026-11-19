# Reference
Category: S5-Style, Commercial facilities / restaurants / cafes (restaurant-cafe, Good Web Design set).
- Reference (primary): https://kintan.restaurant/ (yakiniku restaurant group; quiet blush ground, candid table photography)
- Secondary: http://www.smokeman.restaurant/ (smoke restaurant and bar; borrowed only for the fixed vertical edge links and the single gold reservation button)

Screens: brand/ref/kintan-first.png, scroll-kintan-message.png (+ scroll-kintan-band-before.png), scroll-kintan-portrait.png, scroll-kintan-tabs.png, scroll-kintan-cards.png, smokeman-first.png, scroll-smokeman-1000.png. Measured values: reference-tokens.md.

## Palette (colour relationships, not assets)
| Role | Reference | Ours (to fill) |
|---|---|---|
| Ground | #F3EDE6 | #F3EDE6 blush (exact) |
| Band | #E7DED3 | #E7DED3 tan (exact): tab strip, reserve band |
| Surface | #FFFFFF | #FFFFFF: plates, card and price area |
| Text | #000000 | #1B1512 charcoal (warmed, +8.8% L) |
| Quiet label | #A78A6D | #8C6F57 (darkened for AA contrast) |
| Accent | (none; photographs carry the colour) | #852E19 chestnut, <=5% (Reserve buttons, price numerals) |

## Hallmark candidates
1. Blush-to-dark photo band: a low-key photograph emerges from the blush ground, left edge on a 180px gutter, bleeding off the right viewport edge, one white statement line on it, a rotated micro-label in the gutter, brightness drops on entry.
2. Docked square plate: a white 90px square flush at a photograph's lower-left corner holding one number or mark (reference: shop logo; ours: price / headcount / hour).
3. Tab strip over 3-up cards: a pale-tan band of equal tabs with a white active tab, then cards with outline pill tags (reference: shop filter; ours: course filter).
4. (supporting) Smokeman fixed vertical edge links "MAIL TO / TO MAP" with a 1px bar, gold reserve button.

## Our counterpart (see design-spec.md for exact values)
| Reference element | Ours | Where |
|---|---|---|
| Hero: 180px blush margin + 1181-wide candid table photo window + 79px strip with rotated label | Same frame; low-key photo of a server laying beef over glowing charcoal while a guest lifts tongs; window bottom cut at 6 deg (diagonal split), H1 "Coals lit at five." in the blush lower half | Home H1 |
| 4-slide cross-fade, 5000ms / 850ms, white dots | Same timing in CSS keyframes, 4 moments of one evening (P01-P04), 4 dots | Home H1 |
| White logo plate with swoosh at the photo's lower-left; 90px logo plates on shop cards | T2: white square plate holding one number (17:00 coals lit, course price, guest count, 2012, 17:30) with a 6 deg cut top on the hero | Home H1, H4, H6; Courses, Groups and Rooms, Our Story, People, Visit |
| Dark MESSAGE band from x 180 bleeding right, rotated gutter label | T1: "five o'clock" band, P05 at 1260x500, one white line, sp-parallax 10% | Home H3; every inner page opener (1260x420) |
| Tan tab strip (60px #E7DED3, white active tab) over 3-up shop cards with outline pills | T3: tab strip linking Courses / Cuts and Drinks / Groups and Rooms / Reserve over 3 course cards with price plates and pills | Home H4; Courses, Cuts and Drinks, Groups and Rooms, Reserve |
| Offset portrait 451x520 straddling a white strip | Morning-cut butcher portrait over a 74px white strip | Home H2; Our Story |
| Rotated section labels rising in the gutters | vertical-rl 12px #8C6F57 labels with sp-reveal--up | Home, inner pages |
| Smokeman: fixed vertical edge links with 1px bar, single gold reserve button | Fixed "RESERVE" / "MAP" edge links (>=1100px), one chestnut Reserve button in the header | All pages |
| Shop cards fade in with 100ms stagger | sp-stagger on course cards and room rows | Home H4, H6; Courses |
