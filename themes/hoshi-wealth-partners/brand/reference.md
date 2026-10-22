# Hoshi Wealth Partners: reference (Ours column filled in stage 1 spec, see design-spec.md)
Source: S5-Style (https://www.s5-style.com/) category neighbours (professional firms / financial). Neither URL is in any earlier theme's reference.md.
| # | URL | Why | Role |
| R1 | https://naito-otsuka.com/ | people-led professional firm, monochrome grain photography, serif/sans display headline overlapping framed photos, dark band, red dot accent | main (80% similarity target) |
| R2 | https://crea-lp.com/ | financial-planning firm: flat colour panel sitting on a full-bleed photo, logo marquee strip, fixed side contact tab | secondary, structure only |
## Signature candidates
| ID | Reference move (shape, composition, position) | Ours (成品對應) |
| C1 | R1 hero: 3-line uppercase headline mixing high-contrast serif and grotesque words, overlapping the top edge of a 2:1 landscape photo (x13%) and a 450px square portrait that bleeds off the right edge (x69%->100%), captions 12px caps || Used = **T1** home hero + every inner page head: EB Garamond/Heebo caps h1 `STEADYING THE / MONEY. PLANNING / THE DECADES.` 8.6vw (max 8.25rem), P01 2:1 at 12.6vw + P02 square bleeding right, line 3 overlaps by 60 px in flow |
| C2 | R1 service rows: 1px rule + red-dot label "SERVICE 01", 3 columns (title / centred 405px square grain photo / hairline-arrow link list), MORE button with 2px top + 1px bottom rule and small arrow chip || Used = **T2** partner rows: olive-tint dot `PARTNER 01`, 292 \| 405 \| 292 columns (name / square portrait / families link list), R1 button 2 px top + 1 px bottom + stone chip; also People, Approach, Services, Meeting process |
| C3 | R1 dark band #40403D full-bleed holding the rows, with sticky chapter card, 02\|02 counter chip on a full-bleed strip || Used with T2: `#40403D` full-bleed band + sticky 405×120 chapter card `PARTNERS / CHAPTER: 01`; strip = P08 1440×420 with olive 174×74 chip `02 \| 03` and sp-parallax 10% |
| C4 | R1 portrait frame: thin rule frame, tiny red block overlapping the face crop, sprocket dots || Used = **T3** families: rail word `FAMILIES` 5rem + 1 px rules, P09 framed, olive 116×150 block with 3 sprocket dots, one olive letter; also About, Fees, Stories, Contact, single post |
| C5 | R2 flat panel (50% wide, 700x540) overlapping a full-bleed photo, centred label + 1px short rule + pill button || Used (supporting) for the meeting close: 700×540 ground panel on full-bleed P10 with sp-parallax 8%, label + 40 px rule; R1 ruled button instead of R2 pill |
| C6 | R2 vertical fixed contact tab at right edge (60px wide, icon + vertical text) || Not used (fixed side tab would sit over text on mobile) |
## Colour (R1 relationships) and ours
Ground #F2F2E9 ~55% / ink #212836 ~10% / dark band #40403D ~15% / stone #B7B7B1 ~5% / accent #D3030F <1%; photos monochrome grain ~20%. First-screen saturated 1.5%.
Ours: keep ground-ink-dark-stone ratios; replace red accent with row hex #6B6A3E (small areas only), with a lighter tint for dots on dark. Saturated first screen must stay <=15% (R1 shows ~1.5%).
## Scroll effects
See stage-a.md table. Tokens: reference-tokens.md. Screenshots: ref/*.png.
