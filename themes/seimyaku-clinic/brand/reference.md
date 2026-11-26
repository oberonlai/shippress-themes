# Reference

Reference: https://www.takedahp.or.jp/ (S5-Style, education-healthcare category; hospital group, photo direction + scroll effects)
Secondary: https://www.naganonaika.com/ (S5-Style, same category; clinic)

IMAGERY: photo (clinical documentary photography in even light; no illustration)

| Borrowed from reference | Reference evidence | Ours (as built, see design-spec.md) |
|---|---|---|
| Full-bleed photo that is the whole first screen, a physician in even light, foreground focus-pull blur on one side | ref/takedahp.or.jp-first.png | Home hero: full-bleed img-01 (physician + patient at a renal scan monitor, blurred tea cup and results envelope across the left 30 %), 46vh tall, parallax 6 %; headline below the photo per plan (full-bleed/below-photo/card-row). Inner page heads: 320 px full-bleed photo band. |
| Pale veil rising over the photo while the headline shrinks and docks top-left (scroll-driven) | ref/scroll-td-700.png, scroll-td-1500.png | T1: wave-edged veil #BFD0D6 as an sp-parallax layer (--sp-par -14 %) rising over the hero photo; home Message cover with the same veil over a street photo (img-02) and a sticky docked title at 0.75 x H1 (3.375rem) left, message in the right half. Inner heads keep a static veil wave. |
| Sticky scale-back stack: the pinned photo shrinks to 0.8 and dims as the next chapter slides over it | philosophy page logic in page.js, ref/scroll-td-2600.png | T2: three CSS-sticky chapter sheets (tops 96/160/224 px) with width steps 1180/1260/1340 px and tone steps #D5E0E2/#E2EAEB/#EEF3F3; 16:9 photos with 10 % parallax. Home "How care is paced"; also First visit, Monitoring (4 sheets), About. |
| Cards row under the first screen (white r4 cards, date + chip + arrow disc) | ref/scroll-td-2600.png | Hero foot card row: 4 white r4 cards (First visit, Monitoring, Who we see, Hours) in the 1108 px column from x 280, 24 x 2 dash, pill chip, dashed 40 px arrow square. Reused for home Notes and the News list. |
| Facilities rows with index, chips and right-edge stacked photos | ref/scroll-td-3800.png | Home "What we watch" (4 rows #01-#04, 1 px rule + dash, chips) with 3 photos stacked flush to the right viewport edge (wipe reveal); Conditions page rows. |
| Dot + chip + giant light tracked word | ref/scroll-td-2600.png ("FACILITIES") | T4 heads: FOLLOW-UP, FOLLOWED, FEES on home; THE FIRST VISIT, PACING, WHO WE SEE, THE TEAM, VISIT on inner pages (Outfit 300, .08em, #51686B). |
| Slashed link row split by a round medallion docked on the photo foot (secondary) | ref/naganonaika-first.png | T3: single top menu 3 links / 72 px #51686B medallion / 3 links with diagonal slashes; the medallion docks onto the hero photo's top edge. Slashes reused in cards, team list, breadcrumbs, footer. |
| Quiet ground + single accent, saturated share well below 30 % | reference-tokens.md (a) | Ground #F3F6F6, mist #E6EDEE, main #51686B on labels and giant words, Takeda brand-700 #8A4940 kept for arrows only; first-screen saturation target 10 % or less (cap 15 %). |
Screens: ref/takedahp.or.jp-first.png, ref/scroll-td-{700,1500,2600,3800,5200}.png, ref/naganonaika-first.png, ref/scroll-ng-{900,1800,2800,3800}.png
