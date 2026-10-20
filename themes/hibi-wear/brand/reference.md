# Hibi Wear: reference notes (draft, stage A)

Only structure, technique and colour relationships are borrowed. No copy, photos, logos or whole-page layouts are copied.

## References (S5-Style, apparel / lifestyle / EC)
1. ReWEAR official site, https://rewear-official.jp/ (S5-Style 11668): a fabric-care label for clothes. Screenshots: ref/rewear-first.png, ref/rewear-full.png (1440 wide, top 9000 px).
2. Kaneko Optical "Sabae to the World", https://www.kaneko-optical.co.jp/sabae-world/index.html (S5-Style 12039): a maker's brand site. Screenshots: ref/kaneko-first.png (first screen). The page is a scroll-driven single screen, so no full-page capture.

## Signature technique candidates
ReWEAR
- A. Dot label + big display heading: a tiny gold dot and a spaced uppercase label ("CONCEPT", "AWARD", "LINE UP"), then a large two-line heading. Every section opens this way. Hibi use: every home section and every inner page head.
- B. Portrait photo with rounded corners (about 8 px radius) set in the left-centre of a section, short stacked statements on the right bottom-aligned with the photo; below them an outline circle (110 px) holding an arrow plus a plain text link. Hibi use: home "our idea" block, About, Makers.
- C. A warm light band (#EDEAE2) that starts mid-section and passes behind the photo, so the photo straddles white and band. Hibi use: home concept, product pages, Journal heads.
- D. BEFORE / AFTER split photo: one picture cut in half by a vertical line, a flat tab at the top of each half (BEFORE on the neutral half, AFTER on the green half), a big serif number overlaid at the bottom ("20 washes"). Hibi use: fabric-care / "how it wears after 20 washes" block, Fabrics page, single-product care panel.
- E. Pill tags above each product column in a 4-column line-up, one product colour per column, centred two-line copy. Hibi use: home collection row, shop archive cards.
- F. Header with logo left, uppercase text nav, a two-line (double rule) menu icon far right; hamburger only on scroll.
Kaneko Optical
- G. Near-monochrome fog photograph full bleed, with very small serif captions placed at left third and right third on one baseline and a thin vertical rule at the bottom centre as a scroll cue. Hibi use: first screen (city morning haze instead of snow).
- H. Header reduced to a language label and a two-line menu icon at the top right, no nav bar over the photo.
Do not use: vertical Japanese type (English never vertical), laurel award badges with percentages (invented claims), the staggered overlapping small-photo field (Nami used it).

## Colour (measured / sampled from screenshots, hex)
| Role | Hex | Where in the reference | Share of the page |
|---|---|---|---|
| Base | #FFFFFF | page ground | about 60% |
| Soft band | #EDEAE2 | concept band behind photo | about 25% |
| Ink | #181818 | headings, nav, body | about 8% |
| Main (saturated) | #0090A0 teal | opening hero only (full bleed) | 86% of the first 1440x900 |
| Sub | #8FBF9A green | AFTER half, product colour | under 3% |
| Accent | #C9A24A gold | dot labels, laurels | under 1% |
| Product accents | rose #E07A78, lime #A8C94A | line-up bottles | under 2% |
Kaneko first screen: pale fog blue-grey (#E0E0F0, #D0D0E0, #B0C0D0), saturated pixels about 0.9%; ink #2B3340 type.

## First-screen saturated area
- ReWEAR hero: 86% saturated (teal, full bleed). Over the 30% cap, so Hibi must NOT copy the teal field. Keep the relationship: one hue held to a small area, white and #EDEAE2 bands, near-black type, gold dot accent.
- ReWEAR concept screen (what a visitor sees after the hero, bare 1440x900): 4.2% saturated.
- Kaneko first screen: 0.9%.
- Gate value for Hibi: min(30%, reference) per the common rules; propose a target of 12-20% (a muted sage / teal photo grade plus one small accent), decided by the design spec.

## Mapping to the product (decided in design-spec.md)
| Technique | Hibi element | Pages |
|---|---|---|
| A (ReWEAR) → T1 | gold `#C9A24A` 6 px dot + spaced uppercase label + two-line Playfair heading (home 4.5rem, inner heads 4.25rem), left-aligned | every home section; every inner page head (Shop, Single product title label, About, Makers & Fabrics, Sizing, Shipping & Returns, Journal, Contact, Cart/Checkout/Account) |
| B + C (ReWEAR) → T2 | 4:5 photo, 8 px corners, `#EDEAE2` full-bleed band starting at 55% of the photo; stacked lines bottom-aligned right; 110 px outline circle arrow | Home idea + close (mirrored); Shop head; Single product (band under gallery and summary); About; Makers; Sizing; Shipping & Returns; Journal single; Contact |
| D (ReWEAR) → T3 | split photo S3 (two tees), flat 32 px tabs NEW (stone `#E4E0D6`) / AFTER 20 WASHES (teal `#2F8C93`), 1 px centre line, Playfair 5.5rem "20" over the image | Home "Care" block; Makers & Fabrics centre; Single-product care panel; number style reused for $120 / 30 / $8 on Shipping & Returns and home promise band |
| E (ReWEAR) | stone pill category tags above a 4-column product line-up | Home line-up; Shop category pills and card labels |
| F (ReWEAR) + H (Kaneko) | wordmark left, uppercase text nav, double-rule menu icon right; transparent header over the cover | all pages (one top menu only) |
| G (Kaneko) | hazy full-bleed morning street photo, small serif captions at left/right thirds on one baseline, 64 px vertical rule scroll cue | Home first screen only (not a signature) |
| Colour | white 60% / band `#EDEAE2` 25% / ink `#181818` 8% / teal `#2F8C93` (from `#0090A0`) ≤4% / sage `#9DBFA5` (from `#8FBF9A`) ≤2% / gold `#C9A24A` <1% | site-wide; first-screen gate 20% (hard cap min(30%, 86%) = 30%) |
