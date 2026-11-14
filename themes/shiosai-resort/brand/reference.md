# Reference (counterpart column filled by the design spec, brand/design-spec.md)

Reference: https://www.carpediemsantorini.com/  (S5-Style hotel / ryokan category)
Secondary: https://mangrovehotel.com.au/  (S5-Style hotel category; bayside family resort, wide room photography)

Screenshots: brand/ref/cdm-first.png, brand/ref/scroll-cdm-900.png, -1800, -2700, -3600; brand/ref/mgv-first.png, brand/ref/scroll-mgv-900 ... -3600.

## What the reference does
Carpe Diem: full-bleed sea photograph with two people at the water's edge, a very thin lowercase headline, a booking bar docked at the foot, a fixed chapter pager at the left, and calm paper-coloured chapters with roman-numeral facts and a circle-masked photo.
Mangrove: bayside resort with a long white page, wide 2:1 room photos in a slider, small uppercase labels.

## Signature candidates (picked: A, B, C)
| Id | Reference move | Shiosai counterpart | Built counterpart (design-spec) |
|---|---|---|---|
| A | Booking bar docked at the hero foot | White "beach-flag" bar cutting into the hero foot: green-flag dot, today's tide, sea temperature, kids' club hours, one "Check dates" cell | S1 `ss-flagbar`: white 1100x100 bar, -50px over the hero foot, 4 cells split by 1px #D5E2E7 (beach flag / tide and sea / kids' club / ink #23414D "check dates" cell); page flag bars on Rooms, Packages, Beach, Families, Dining, About; in flow 2x2 on mobile |
| B | Fixed left chapter pager with rotated label | Tide-gauge pager: 6 dots on a hairline, rotated chapter name, desktop only | S2 `ss-pager`: fixed x 24, y 280-620, rotated 11px uppercase label, 6 dots every 41px on a 1px hairline with 4px tide ticks, active dot #84B9CB via CSS view timelines (static fallback); >=1280px only; home + Rooms, Packages, Beach, Families, About |
| C | Roman-numeral 2x2 facts with highlighter phrases | "What a summer week holds" 2x2 hairline grid, sea-tint marker behind phrases | S3 `ss-week`: P08 4:5 + 136px apricot #F2C9B4 disc over its corner; 2x2 grid (gap 40/64), hanging Figtree 300 numerals I-IV, lowercase titles, one sea-tint `ss-mark` per cell, hairline under the top row; home + Packages, Beach, Families, Dining, About |
| D | Scale 1.08 -> 1 settle on wide photos | `sp-reveal--zoom` on wide letterbox photos | `sp-reveal--zoom` (1.06 -> 1, 1.7s, cubic-bezier(.16,.01,.77,1)) on 2.5:1 `ss-wide` photos starting at x 74 and bleeding right; hero settle 1.08 -> 1 on load; `sp-parallax` 8% hero / 10% band |

## Colour relationship
Photo-led saturation, quiet paper ground, black/ink text, one tiny pastel disc. Ours: muted film-grain sea, ground #F4F8F9, primary #84B9CB for lines only. See reference-tokens.md.

## Key visual (built)
Reference: two figures at the infinity-pool edge seen from behind, a white towel, thin lowercase "escape the ordinary", white booking bar, fixed pager. Ours: P01 film-grain tide line at 07:30 (lifeguard with a folded flag walking away, child with a bucket, white terrace above), thin lowercase "by the water, all week" at 78px, the beach-flag bar, the tide-gauge pager. Full checklist: design-spec.md "Key visual concept".

## Secondary (Mangrove) built counterpart
Room showcase with prev / next names and a View | Book pair -> the home and Rooms sticky-media list (pinned P03, entries P04-P07, PREV / NEXT row, VIEW | BOOK); 2:1 centred photo + centred title (home chapter iv, P10).
