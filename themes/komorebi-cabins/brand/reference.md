# Reference (draft)
Main reference: https://kajimanomori.co.jp/ (S5-Style, hotel category, photography). Screenshots: ref/kaj-first.png, ref/scroll-kaj-full.png.
Secondary: none (second candidate only showed a loading screen).
Imagery: photo, dark film-like natural light. Palette: greige ground, forest green photos, one brown button, ink text.
Signature candidates:
- T1 Photo flush to the left edge at ~86% width on a greige ground, with a vertical two-line serif tagline and a two-cell season toggle in the right gutter.
- T2 Overlapping mixed-size photo mosaic over one full-bleed blurred green photograph with a small vertical text column.
- T3 Split header: terracotta reserve button plus a white boxed "Menu" button with three dots, thin vertical divider.
Mapping to our theme (finished mapping, see design-spec.md §1 and §12):
| Reference technique | Komorebi Cabins counterpart (finished) | Where |
|---|---|---|
| T1 photo flush left 86% + vertical serif tagline, season chip, "Scroll" + dot in the right gutter | S1 Gutter tagline: P01 cabin porch (host stacking firewood, family unloading a car) x0–1232; vertical "Twelve cabins, / one forest."; Summer / Autumn chip; notice chip "Weekend dates open" | Home hero; every inner page head (photo flush left 86%, vertical kicker) |
| T2 overlapping mixed-size photos over a full-bleed blurred green photo + small vertical text | S2 Mosaic over canopy: four cabin sizes (P03–P06) overlapping over blurred P02 with parallax 12% | Home §3; Cabins, The Forest, About |
| T3 split header: terracotta reserve button + white boxed Menu with dots + divider | S3 Split header: "Hold a weekend" `#8B5A44` 166×50 + white "Menu ···" 143×50 (link to the footer page index) | Every page |
| Facilities row: large photo + edge peek + serif title with bracket label + 3 small portraits | Inside row: P07 + P08 peek + "Inside [ the same in every cabin ]" + P09–P11 | Home §5; Inside, About, People |
| Colours greige / ink / deep green / terracotta | `#E6E3E0` / `#343434` / `#222F25` / `#8B5A44` exact; row hue `#3B7960` small accents | Site-wide |
| Per-line text fade .8s ease; photo fades | `sp-stagger` + `sp-reveal--up` .8s ease; `sp-reveal--zoom` on mosaic photos; parallax hero 8%, mosaic 12%, band 10% | Home and inner pages |
