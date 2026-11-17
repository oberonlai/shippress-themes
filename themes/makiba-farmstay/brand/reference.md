# Reference (draft; "Our version" column filled at design stage)

## Sources
- Main: https://kazenoyama.jp/ — a mountain-resort hotel (restaurant, private sauna, seasons, topics). Chosen for: full-bleed photo hero, centred nav, quiet pale paper ground, fixed disc stack and hill-ridge strip, horizontal card row (fits `horizontal-strip` + `full-bleed-photo` + `centered`).
- Secondary: https://satoyama-terrace.com/ — a stay with sauna in managed woodland (split-panel opening that resolves to a full-bleed photo, dotted-rule news line, two-column stacked nav).
Screenshots: `ref/kaze-first.png`, `ref/kaze-canopy.png`, `ref/scroll-kaze-*.png`, `ref/sato-first-split.png`, `ref/scroll-sato-*.png`. Measurements: `reference-tokens.md`.

## IMAGERY: photo
High-key, bright documentary photographs (people, animals, food, landscape). One flat illustrated decoration (leaf canopy and birds) drawn by us in SVG; no illustration elsewhere.

## Palette relationship
Reference: pale grey ground (55%), white cards (20%), mist band (5%), one saturated green for fixed controls (4%), gold accent (4%). Ours (palette Yanagicha (willow tea), willow tea, olive family): base #F4F5F1, white #FFFFFF, ink #3B3A36, willow #A1A46D (ridge strip, discs, rules), deep willow #5F6238, ochre accent #C49B38 for pills, mist #DADDD7. First-screen saturated share target <= 15% (reference 3%).

## Signature candidates (one line each; see stage-a.md for the final choice)
1. Fixed hill-ridge strip with a bird marker on the active label (Kazenoyama).
2. Fixed right-edge stack of round discs with curved-text labels (Kazenoyama).
3. Hanging leaf canopy over a centred, spaced statement on paper grain, with two white birds (Kazenoyama).
4. Split-panel opening that resolves into a full-bleed photo with a bottom-left headline (Satoyama) — supporting.

## Scroll effects observed
See `reference-tokens.md` (g) and the table in stage-a.md.

## Our version (binding detail in design-spec.md)
| Reference element | Source | Makiba Farmstay |
|---|---|---|
| Full-bleed photo slider hero, cross-fade, scale 1.06 -> 1, ridge-cut foot | Kazenoyama | Home hero P01 dawn milking parlour (farmer + cow + child at the gate), slides P02 / P03; 111 vh; `sp-parallax` 8% on the slide layer |
| Fixed hill-ridge strip with labels and bird marker (T1) | Kazenoyama | Fixed 150 px willow/moss two-hump ridge on every page >=1024 px carrying the farm day 05:30 Milking / 07:00 Breakfast / 10:00 Chores / 13:00 Butter / 18:30 Barbecue; white swallow moves with page progress; static times-only ridge on mobile |
| Fixed right disc stack with curved labels (T2) | Kazenoyama | White top disc + moss discs Book (/book/) / Call / Find us, 60 px at y105/190/275; hidden <1024 px |
| Hanging leaf canopy over a centred spaced statement, two white birds (T3) | Kazenoyama | Own SVG walnut and hop leaves on a barn rafter, gold walnuts, two white swallows; home block 4, About, Help, Contact, Newsletter |
| Giant gold Latin section word + sub-title | Kazenoyama | Fraunces 6.25rem gold #C49B38: A FARM DAY, ROOMS, HELP, STAY, JOURNAL |
| White r20 card row overflowing right | Kazenoyama | Home day row: 5 cards (05:30 to 18:30), photos P05-P09 |
| Left-flush r20 photo with text right | Kazenoyama | Home rooms block P10 + ruled rates table; Rooms page alternating pairs |
| r20 tall photo + 1 px ruled list | Kazenoyama | Home help block (P12 + 5 tasks) on the mist band |
| Interval photo parallax | Kazenoyama | Home pasture band P11 (`--sp-par` 10%); Herd page band P16 |
| Dotted-rule news line with circle arrow; bottom-left headline | Satoyama Terrace | Home journal rows; Visit FAQ; inner page H1 bottom-left over the hero |
| Palette pale grey / white / mist / green / gold | Kazenoyama | #F5F5F5 / #FFFFFF / #DADDD7 / willow #A1A46D + moss #6B6F3A (green swap) / gold #C49B38; ink #474143 |
