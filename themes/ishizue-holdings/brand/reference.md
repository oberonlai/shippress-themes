# Reference (our columns = design-spec.md, stage B)
Source: S5-Style https://www.s5-style.com/ -> corporate / group-company category.
- R1 https://motoya-united.co.jp/ (main) | R2 https://www.tsg-jpn.co.jp/ (secondary)
Screens: brand/ref/*.png. Measurements: brand/reference-tokens.md.
## Signature candidates
| # | Ref | Technique | Ours |
|---|-----|-----------|------|
| A | R1 | Stacked rounded business cards (sticky, slight tilt settling to 0), one flat tint per group company, 3:2 photo + title + round arrow, rotated 01-05 index | **T2 (used)**: home `front-companies` six sticky cards 993x370 r10, 3:2 412x275 inset 48, six low-chroma tints, 48 px ink arrow, -0.9deg -> 0 tilt (sp-reveal--up + theme CSS), 01-06 arc; continued on Group companies, History, Governance, Sustainability, Owners, News, Contact |
| B | R1 | Hero: large rounded photo bleeding off right edge with neighbour slivers at left; sticky 600vh stage | **T1 (used)**: home hero P01 915x660 r10-left bleeding right, P02 30 px sliver, white Topics pill (latest IR notice), plus R1 curve-ended 1 px line as the dated timeline-line; sticky stage replaced by sp-parallax 8%; small-T1 head on every inner page |
| C | R1 | Giant wordmark letters filling the viewport that the page zooms through (scroll scrub) | Not used (no sp-* equivalent; would need custom scroll code) |
| D | R1 | Bracket "( )" motif with colour highlight behind phrases in marquee rows | **T3 (used)**: home `front-ethos` four sp-marquee rows of bracket phrases on tint highlights (30 px); also card headings, governance principles, inner-page lead lines, notice tags |
| E | R2 | Alternating white / black / stone-blue-grey (#BEC8CE) full bands, vertical text columns | Supporting: band rhythm ground / photo / #BEC8CE / white r30 panel / ink / ground, 98 px padding; vertical text not used |
## Colour
| Role | R1 | R2 | Ours |
|------|----|----|------|
| Ground | #FFFFFF 80% | #FFFFFF | #FAFBFB ~60% (+ #FFFFFF panels 4%) |
| Ink | #000000 10% | #000000 | #0B0D0E ~14% (text, ink band, footer) |
| Photo | ~10% | - | ~12% |
| Band | - | #BEC8CE | #BEC8CE ~7% (governance band) |
| Accent | pastel fills per card | - | six low-chroma tints #E3DFD3 #D5DEE5 #E2D6D7 #D6E0D5 #D3E1E0 #C9D1D5 (~10%) + row accent #7D8C94 <=3% |
First-screen saturated: R1 1.0%, R2 22.5% (not borrowed). Ours: cap 15%, target <= 5%.
