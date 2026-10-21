# Hada Dermatology reference (draft, stage A)

## Reference sites (S5-Style, school/education/medical/welfare and beauty/health categories)
1. DAILY SKIN CLINIC https://dailyskinclinic.jp/ (S5 entry 10881) - dermatology / aesthetic clinic
2. La Viora Clinical https://laviora-clinical.jp/ (S5 entry 11546) - herbal-peeling skin clinic

Not used (already used by Sukoyaka): Kuwakuwa, Koba Clinic, Inui Dental, Suzuki Ladies Clinic.
Screenshots (1440x900 first screen + 1440x4200 full, headless Chrome): ref/dsc-first.png, ref/dsc-full.png, ref/lav-first.png, ref/lav-full.png. The La Viora full capture is a stretched viewport-height hero, so only its first screen is useful.

## Signature technique candidates
DAILY SKIN CLINIC
- D1: hero photo is an inset rectangle (not full-bleed): it starts about 210px from the left and stops about 100px before the right edge, with a warm-grey page band showing above, below and to the left, so the image reads as a framed print on a tinted page.
- D2: oversized thin-weight Latin line ("daily skin new standard", about 90px, black) that runs across the lower edge of the photo and overlaps out of it onto the page band; a small bold price line sits right above it. A short two-line Japanese headline floats on the left, staggered (second line indented).
- D3: fine concentric hairline arcs (an arch and a half-ring) drawn over the top and right edges of the hero, plus three parallel hairlines entering from the left. Quiet line ornament, not fills.
- D4: narrow solid black vertical rail on the far left (100px) holding social icons, a MENU label with two short bars, and vertical copyright; the main nav is a plain text row, and a black pill reservation button sits at the right.
- D5: lower sections: huge light uppercase serif-ish heading ("MEDICAL SKIN") centred, then two-column lists where the left column holds a heading, a small English label and a round black "list" button, and the right column holds a hairline-ruled list of concerns with arrows on a pale gradient (lavender/mint/blush) panel. Items numbered 01-27 in small grey type.
La Viora Clinical
- V1: full-bleed hero with the headline at the lower left in a light serif (two sizes: small line above, larger line below, wide tracking), a vertical "PLAY" label with a thin vertical rule and an outlined circle play button at the left of the copy.
- V2: tiny olive-brown pill buttons (store search, reserve) plus a hamburger of two thin lines at the top right; logo in white at the top left, nothing else in the header.
- V3: slow, soft-focus macro image of a single botanical object carries the whole first screen; no boxes.

## Palette
DAILY (first screen measured at 1440x900; saturated pixels, S>0.35, are about 0.1%)
| role | colour | share |
|---|---|---|
| base white | #FCFCFC | about 39% |
| tinted page band (warm grey) | #F6F3F0 / #E4E4E4 | about 10% |
| photo mid-tone (pale sage-grey) | #9CB49C / #B4B4B4 | about 10% |
| ink / rail | #0C0C0C | about 8% |
| accent (pale gradients in lower panels) | lavender #E6E3F2 to mint #E4F5EA to blush #F8E4E4 | panels only, low saturation |
La Viora (not used for palette: first screen about 53% saturated olive-yellow #CCCC84 / #B4B46C, far over the 15% limit). Borrow structure only.

Chosen mapping for Hada (first-screen saturated area target at most 5%, limit 15%):
- base #FAFAF8 (white-leaning, not cream) ~40%; band #F3F1EE ~12%; ink #14171A ~8% (rail/pill); photo ~35%; accent muted sage #8FA896 with a pale sage-mint tint #E7EFE9 <5%.

## Mapping to Hada (成品對應)
| reference technique | Hada implementation | where it continues on inner pages |
|---|---|---|
| D1 inset hero on tinted band | T1: hard-edged inset photo (left edge 15% of viewport, 96 px from right) on an L-shaped band #F3F1EE (left 36% + 120 px strip below); repeated as alternating chapter bands and the mid-page band | every inner page head (Conditions, Skin Checks, Children, Cosmetic, Fees, First Visit, Contact); doctor portraits on Our Doctors; journal featured images |
| D2 thin oversized Latin line over photo edge + small price line | T2: "skin, seen clearly" Figtree 300 5.5rem crossing the photo's bottom-right edge; fact line "$185 / $160" above; echoed mid-page "unhurried, on purpose" | page lines at 4.25rem on each inner head ("conditions, plainly", "fees, in writing"...); doctor names on Our Doctors |
| D3 hairline arcs and parallel lines | T3: arch over photo top, half ring cut by right edge, three lines entering photo, ink at 45% opacity | one motif per inner page head; arch in the home and contact close |
| D5 numbered list on pastel gradient panel | supporting: conditions index (10 rows) and fee rows | Conditions full index, Fees & Insurance list, Skin Checks/Cosmetic price rows |
| D4 black rail | not used (side rails forbidden); its black pill becomes the ink "Book a visit" pill in a top header | all pages |
| V1 two-size light serif headline + vertical label/rule | hero headline in Crimson Pro 300 at two sizes, second line indented; vertical "Scroll" + rule | inner heads keep two-size Crimson title |
