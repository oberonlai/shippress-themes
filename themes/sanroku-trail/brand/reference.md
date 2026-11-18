# Reference (our counterpart filled from design-spec.md)
Main: https://camp.muji.com/ (S5-Style sports-outdoor collection). Secondary: https://50th.runners.co.jp/ (wobbly rounded photo frame only; its saturated mascot colour is NOT borrowed).
Screens: ref/muji-first.png, ref/scroll-muji-*.png, ref/50th-first.png. Tokens: reference-tokens.md.

| # | Reference element | Our counterpart (our implementation) |
|---|---|---|
| 1 | Full-bleed landscape photo with vertical headline in the sky at right | Home H1: flush P01 beech ridge (marshal tying ribbon, runners small), 1440x600; vertical-rl H1 "Marked by hand. / Left as it is." right 100px top 150px; sp-parallax 8%. Inner heads: Races, Course Guides, Enter, Kit, Safety, Volunteer. |
| 2 | Site names bottom-left of the photo | Two-line white caption "Four races · Hollin Village / Spring snowmelt to the autumn ridge", left 24px bottom 32px (static under H1 on mobile). |
| 3 | Ruled notice rows under the photo (chip, date, title, chevron) | Four race rows + "All dates and cut-offs" row directly under P01: #715C1F chip (distance) · date · name · cut-off · chevron, 50px, 1px hairlines; reused on Races and Enter (steps). |
| 4 | Dark green band with hairline map + accordion with dotted leaders | Home H4 and Course Guides/Safety/Enter FAQ: #3A4F44 band, own white 1px course outline with one 10px dot at Hollin Village, details accordion with aid stations and 2px dotted leaders. |
| 5 | Inset 1312px photo with vertical caption, then split title / text / spec cells | Home H5 "Mandatory kit": inset P07 1312x730 with vertical caption, split 4.25rem title / body at 43%, 6-cell kit table; reused on Races, Mandatory Kit, Volunteer, About. |
