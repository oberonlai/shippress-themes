# Reference (product mapping filled from design-spec.md)

Reference: https://www.boo-ster.co.jp/ (a regional insurance agency; S5-Style category finance-insurance, photographic).
The plan names a Japanese appraisal body as the topical reference, but its site does not answer from this box (TLS closes), so the topical match is the finance-insurance entries on S5-Style and the photographic one with the closest story was chosen: people at work in documentary photographs, one conversion button.

Candidates looked at and dropped: an illustrated trust company and an illustrated tax office (illustration IMAGERY, wrong for a documentary theme), a bank-recruit style hero with mostly type, a black-screen financial firm.

| Reference trait | Value (see reference-tokens.md) | Our equivalent |
|---|---|---|
| Full-bleed film still first screen | 16:9, blur-to-sharp | T1 / KV: full-bleed H01 (valuer reading a tape on a shopfront, owner's shoulder and lease plan in the foreground), blur 14 px to 0 in 1.2 s, sp-parallax 8 % (spec §2, §5 #1) |
| White logo tile and white nav slab | 169 px tile, slab with pill | T1: white 169 px tile at 19/19, fixed white 64 px slab top-right with 5 anchors and the one accent pill "Request an appraisal" (spec §5 header) |
| Bottom-left headline with short rule | 52 px bold, 20 px rule | T1: H1 "A value you can / sign a loan on." 4.25rem 700 bottom-left at x 75, 20 x 2 px white rule, two sub-lines; lines rise 0.6 s with colour settling 1.4 s; plus 175 px orbit ring "Instruct" and white three-cell info bar (spec §2) |
| Two full-photo panels | 682 x 675 each | T2: "Lender instruction" / "Owner or seller instruction" panels H03 / H04, 645 + 720 x 675, gap 0, lead band behind the upper 55 %, 44 px circle arrows; continued on About, Instructions, Site hour, Report, Fees, Contact, Rent Notes (spec §1, §5 #4) |
| Contact band with photo strip | navy band, strip overlaps up | T3: lead band 440 px, strip H11-H13 flush to the window's left edge rising 40 px, phone figure 1.75rem, accent pill, page-top disc; closes Home and every inner page except Thanks/Privacy/Terms (spec §5 #9) |
| Accent | single pill colour | #C05700 (Booster #EC6C00 darkened for AA white text) on the pill and small labels; #EC6C00 kept for non-text marks; main band lead #4E555C instead of navy per the plan palette (spec §3) |

Screenshots: ref/booster-first.png, ref/scroll-booster-900.png ... 4500.png, ref/booster-sheet.png.

Also mapped: Booster news rows (black chip, 100 px rows, 855 px) -> report rows with page-range chips and the News page rows; outline pill with long arrow -> secondary links; -fadein on enter -> sp-reveal--up 0.6 s ease.
