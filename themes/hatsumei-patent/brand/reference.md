# Hatsumei Patent Attorneys: S5-Style design references

Studied on 2026-10-20 from the S5-Style gallery (Japanese web design collection), corporate / BtoB entries. Only structure, techniques and colour relations are borrowed; no copy, photographs, logos or whole-page layouts. The home page mixes three references with the firm's own content.

| Site | URL | S5-Style entry | What was studied |
|---|---|---|---|
| Positive dream persons | https://www.positive.co.jp/ | https://www.s5-style.com/12026/ | Photo-led first screen, centred logo over a centred menu with outlined mini buttons, three stacked headline lines at the lower left, a solid deep-blue band (87 px) along the bottom with a "2 - 5" counter and "Scroll". Colour source A. |
| Bottle Works | https://bottleworks.jp/ | https://www.s5-style.com/11919/ | Photographs cut into irregular chamfered polygons (every corner cut at a different angle), overlapping the text column, product pairs set at different heights with bracketed numerals "(001)" on the lower corner. |
| Daico | https://www.daico.co.jp/ | https://www.s5-style.com/11954/ | A pale-blue band with one row bleeding off both edges: chamfered photos alternating with white text tokens in slanted, house (pentagon) and capsule shapes. Colour source B (pale strip ground). |
| Kobe University Cardiology | https://kobe-u-cardio.jp/ | https://www.s5-style.com/11973/ | Studied as a negative example only (88% saturated first screen). |

## Signature techniques used

1. **Chamfered polygon photographs with bracketed numerals** (Bottle Works).
   - In the reference: a 746 x 562 photo with each corner cut at a different angle (10-28 % bites, one slightly off-axis edge), overlapping the text column by about 40 px; in product pairs the right item sits lower and carries "(001)", "(002)" on its lower corner.
   - In Hatsumei: home `front-cover` (the prototype photograph is a 13-point polygon overlapping the headline column, captioned "(001)"), `front-chapters` (six photographed chapters on an uneven two-column shelf, the right column set 6.5 rem lower, each photo a different polygon with "(01)" to "(06)" on its lower corner), and the story and founder portraits in `front-story` and `front-attorneys`.
2. **Shape strip** (Daico).
   - In the reference: one 232 px row on a pale-blue band, bleeding off both edges, chamfered photos alternating with white text tokens in slanted, house and capsule shapes, deep-blue 15 px text.
   - In Hatsumei: home `front-ways` ("How we work"): a mist-blue band, a 248 px row bleeding off both edges, four chamfered photographs alternating with four white notes (slanted, house, capsule, reverse slant) in patent-blue text.
3. **Deep colour band under the photograph, centred brand over a centred menu** (Positive dream persons).
   - In the reference: a solid #00337B band 87 px tall across the bottom of the first screen with a counter and "Scroll"; logo centred above a centred menu; an outlined mini button at the side; three stacked white headline lines at the lower left of a full-bleed photo with a dark left gradient.
   - In Hatsumei: the header on every page (brand centred, the one menu centred below, one outlined mini button at the right); home `front-cover` ends in a 76 px patent-blue band with "01 - 06", the chapter line and "Scroll"; home `front-close` is a full-bleed studio photograph with a dark left gradient, three stacked white lines at the lower left and the same band below it holding the address, hours and telephone.

## Palette

Source sites: Positive dream persons (one deep blue band, shadow ink, stone greys, olive grey) and Daico (pale blue strip ground). The deep blue is shifted slightly towards the grey-navy of the brand.

| Role | Reference hex and share | Hatsumei hex and share |
|---|---|---|
| Deep band / saturated colour | Positive #00337B, band about 9.7 % of the first screen; 15.2 % saturated pixels in the 1440 x 900 first screen (scripts/check-first-screen.py) | #0D3770 patent blue, band about 8.4 % of the first screen; 10.9 % saturated pixels (en) |
| Ink | Positive deep shadow #1A1A1A (~14 %) | #1E2321 ink (text, primary button, footer) |
| Ground | Positive stone / wood greys (~17 %) | #EEEDE9 stone white (cover, attorneys, chapters, notes) and #FFFFFF |
| Secondary | Positive olive grey #6C6C54 (~5 %) | #6C6C54 olive grey (labels, numerals, rules) |
| Pale strip ground | Daico #E6EEFB | #E3E9F0 mist blue (the shape-strip band) |

First-screen limit (rules.palette_from_reference): min(30 %, Positive 15.2 %) = 15.2 %. Per-language values are in gate.md in the run folder.
