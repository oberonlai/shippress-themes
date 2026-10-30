# Reference — Shimamura Music (draft)
Main reference: https://www.shimamura.co.jp/ (Japanese musical-instrument retailer). Tokens in `reference-tokens.md`; screenshots in `ref/` (`shim-first.png`, `scroll-shim-900/1800/2700.png`).
## Structure seen
1. White header, logo left, 5 centred-right text links, search icon. 2. Four-panel full-bleed portrait strip with vertical headline on the seam + accent label bar. 3. Three dated news rows with chevrons. 4. Swiper banner row. 5. CATEGORY band (#F6F6F6). 6. 4-up promo cards. 7. SERVICE: 3-up then 4-up photo tiles + outline "all services" button. 8. Store finder, staff blog, original brands, related business, footer.
## Signature candidates adopted
- T1 Seam headline: unequal full-height photo panels edge to edge, one vertical headline crossing the seam, a flat label bar across the foot of the strip.
- T2 3-then-4 plain tile rhythm: caption-under-image tiles on a pale band, row of 3 wide then row of 4 narrower, 0 radius, closed by a wide hairline outline button.
- T3 Quiet label system: small letter-spaced Latin caps centred label over alternating white / pale bands; dated hairline rows with right chevron.
## Our mapping (as built) — per design-spec.md
| Ref element | Our counterpart | Where |
|---|---|---|
| Four abutting portrait panels (1425×590) | `.hz-seam` 4 panels P01–P04, 2 px seams, 590 px, `sp-parallax` 8% | Home hero; 2–4 panel mini strips on Floor guide, Trial, Care, Rentals, Visit, About |
| Vertical white headline on seam 2\|3 | "Find the one that fits." Manrope 700 38 px, vertical (desktop), horizontal h1 on mobile | Home hero |
| Orange 26 px Brand Promise bar | Steel #5C6A78 26 px bar "Fit · Trial · Care" | Home hero foot; mini strips carry their own bar text |
| Dated news rows + chevron | Floor-notes rows (140 px date · title · ›) | Home under hero; Floor notes index; row grammar reused for prices, staff, hours, history |
| Centred Latin caps label, 58 px gap, white/#F6F6F6 bands | `p.hz-label` 1rem caps .06em centred | Every home section and inner page |
| SERVICE 3-then-4 tiles, 4:3, caption under, 408×80 outline button | FLOORS 3+4 tiles P06–P12 + "See the floor guide" button | Home; Floor guide, Care, Staff, Shop grid |
| Swiper autoplay hero | Static strip + parallax drift; TRIAL full-bleed P13 parallax 10% | Home hero, TRIAL band |
| Fixed header on scroll | Sticky white centred header | All pages |
