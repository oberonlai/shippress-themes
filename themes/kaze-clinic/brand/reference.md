# Reference ("our counterpart" filled at stage 1 spec; details in design-spec.md)
Main: https://evidencecare.jp/ (S5-Style listed, B2C corporate; a home-visit nursing provider). Imagery: photo, high-key. Details: `reference-tokens.md`. Screenshot: `ref/iec-first.png`.
| Observed | Our counterpart |
|---|---|
| Washed high-key full-bleed photo of two clinicians facing each other | Home hero T1: washed 100svh photo H01 (physician facing a patient at a spirometer, nurse marking the curve), cross-fade to H02/H03, brightness 1.6 -> 1 over 1.6s; same treatment on every inner page head |
| Photo insets into a padded frame over the first 400px of scroll | Hero and page-head photo clip-path inset 0 -> 40px over 0-400px scroll (CSS scroll timeline) + sp-parallax 8% (6% inner) |
| Lead statement flips grey -> white as a photo fades in behind it | Home section 3 "How a plan is agreed" T2: 35px/1.95 statement, #787878 -> #FFFFFF as H04 fades in (sp-reveal--zoom .8s easeOutSine); also About, First visit, Stories |
| Three-column care list: photo, bold title + small second-language subtitle, short text, arrow link | Home section 4 T3: Breathlessness / Dyspnoea, Persistent cough / Chronic cough, Wheeze / Asthma review (H05-H07), 1070 container, 40px gap, #00A561 arrow discs; pairs reused for tests, fees, people |
| White card with photo right, accent label | Home section 6 "Who stays with the case": white 1120 card on #E1E9D9, H09 600px right, label #007A47, plus 3 composite stories |
| Palette: pale green-grey ground #F5F8F1, mist bands #E1E9D9/#D9E9E2, text #242424/#787878, accent #00A561 (tiny) | Same hexes: ground #F5F8F1, bands #E1E9D9/#E9F1E3/#D9E9E2, text #242424/#787878, accent #00A561 <=3% (text in #007A47 for AA); footer only in row patina #3F5654 |
| Floating white header slab (inset, radius 8) + two faint vertical hairlines | Same slab 68px, radius 8, inset 72/52px, 6 links + green marker + 2 icon links; hairlines at 35% / 92% of the hero |
Rejected: a skin-clinic LP with an illustrated animal intro (illustration imagery does not fit the brief).
