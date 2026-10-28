# Reference (Implementation mapping, filled from design-spec.md, stage 1 spec)
| Site | URL | Why | Used |
|---|---|---|---|
| Coral Capital (main) | https://coralcap.co/ | S5-Style #11295, finance/investment, quiet editorial type + documentary photography | key visual, section system, motion |
| ALEX Accounting Office (secondary) | https://alex-group.co.jp/ | S5-Style #12145, accounting for small companies, photo + overlay box | hero overlay card, appear motion |
Screenshots: brand/ref/{coral,alex}-{first,part1,part2,part3}.png; scroll before/after: brand/ref/scroll-*.png. Measurements: reference-tokens.md.

## Signature techniques (implementation mapping = design-spec.md; T1–T3 chosen: #1+#2 → T1, #3 → T2, #4 → T3; #5 supporting)
| # | Site | Technique (shape/composition/position) | Implementation |
|---|---|---|---|
| 1 | Coral | Oversized serif H1 (72px, tight −0.06em) on pale ground with ONE word in accent, top-left, above a documentary mosaic | T1 `az-hero`: Onest 4.5rem/.91 ls −0.05em H1 "Paid *Today* For Last Week's Invoice", accent #FF6D48 on one word; inner page heads 4.25rem (design-spec §1 T1) |
| 2 | Coral | Photo mosaic of 1.4:1 tiles (297×212 small, 603×431 large) in a 4-column grid bleeding off the right edge, bottom edge bowed; monochrome warm tone | T1 mosaic: H01 603×431 + H02 341×401 from x=471/y≈500 bleeding right, row 2 H03–H05 297×212; SVG bow mask ≈58px; sage-grey monochrome baked into all photos; `sp-parallax` 8%; bowed 2-tile strips on inner page heads |
| 3 | Coral | Sticky 600px sand panel on the left with a 3-item chapter list + dot; right column scrolls: numeral "01", 96px serif title, hairline, giant stat numeral, text + 3-photo thumb stack | T2 `az-chapters` (#how): sticky #D6DBD6 panel 41.6vw + list/dot; column at 51.5vw: coral 01–03, 6rem titles, hairline, 4rem figures (30 days / 90% / 1.4%), text 340 + 2 touching 228×163 thumbs; also How it works, Who it's for, About, FAQ, Privacy/Terms |
| 4 | Coral | Fixed dark vertical tab "FEATURED" at right edge (60×330, rotated label, + chip) | T3 fixed "Apply · 3 min" tab 60×330, #2E322F, r8, + chip, right 27px, ≥1024px on all pages except Apply/Thanks; the single CTA |
| 5 | ALEX | Navy overlay box flush bottom-left of a full-bleed candid photo with script tagline | `az-gap`: #2E322F box 51.8vw×323 flush left over full-bleed H06 (parallax 10%), Onest 300 tagline; also Pricing (H13) and Contact (H13) |
| 6 | ALEX | Data-appear slide-up 40px / zoom .88 with ms delays, one IntersectionObserver | E2 `sp-reveal--up` + `sp-stagger`, 24px .9s cubic-bezier(.16,1,.3,1) on chapter blocks, ALEX box, story cards; Coral mask wipe → E1 `sp-reveal--mask` 1.6s on 6rem titles |
## Palette relationship
Coral: pale base 70% / sand panel 10% / near-black ink 6% / accent coral <2% (one word, numerals). Ours: map to sage — see stage-a.md.
## Scroll effects (detail in stage-a.md table)
