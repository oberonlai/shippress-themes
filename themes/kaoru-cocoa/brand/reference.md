# Reference study (draft, stage 1) — Kaoru Cocoa

Reference: https://recit-tokyo.studio.site/ (main; patisserie-chocolaterie one-pager, found via S5-Style)
Secondary: https://parade.kyoto/ (structure of the menu cards only)
Planning note had named a different chocolatier shop; its top page is a dated catalogue shop with no layout or motion worth transferring, so it was dropped after a screenshot check.
Screens in `ref/`. Measured values in `reference-tokens.md`.

## What the main reference does
Half the viewport is a fixed full-height photograph (overhead glazed cakes on a white table, cropped by the frame); the other half is a 600 px text column on pure white. A centred top menu in a serif, a hand-drawn loop mark over a script wordmark, three tall dotted-edged vertical phrases hanging from the menu line, then plain sections: a 72 px page word, dotted-ruled rows, a pale closed-days panel, an accordion menu with black round chevrons. The photo swaps as sections pass. Quiet, high-key, 10.5% saturated pixels on the first screen.

## Signature candidates
| # | Candidate | Source | Shape / composition / position |
|---|---|---|---|
| C1 | Hour-keyed fixed photo plate | Recit fixed left plate | 50% viewport wide, full height, flush left; photo swaps when the matching making-schedule row passes mid-screen; caption lower-left gives the hour |
| C2 | Tagged outline menu cards in a staggered three-column wall | Parade line-up cards | 1 px outline cards with a tag chip above, a title cell, a ruled price row, photo inset below; columns offset 0 / 170 / 350 px |
| C3 | Dotted vertical phrase strips hanging from the nav line | Recit vertical tagline columns | three 60 px columns, 1 px dotted edges, different heights, tops staggered |
| C4 (support) | Month-numeral schedule panel | Recit closed-days panel | pale radius-4 panel, small year over a 24 px month numeral, hairline rows |
| C5 (support) | Dotted accordion with round chevrons | Recit menu list | 36 px serif title, sub-line, black 24 px disc chevron |

## Palette (from the reference)
Ground white #FFFFFF; panel #F5F5F4; ink #333333; muted #777777; photo plate cast #E0E0E0 family; accent only as one thin rust line (#B5472A) and inside photographs. Our row colour #6B5A4E (smoked-bamboo brown) takes the ink role for headings and rules, keeping the reference's white ground and pale panel; saturated share stays far under 15%.

## Our counterpart (filled at stage 1 spec; see design-spec.md)
| Reference element | Our version | Where | Status |
|---|---|---|---|
| Recit fixed half-viewport photo plate that swaps by section (C1) | T1 hour-keyed plate: 50/50 section, sticky flush-left plate per hour row (08:00 roasting, 10:00 tempering, 12:00 moulding, 15:00 glazing), white hour tag lower-left, 0.5 s fade | Home #today; About, Making days, Cake orders, Visit | specified |
| Parade staggered outline card wall (C2) | T2 cards: 3 x 384 px, gutter 20, offsets 0/170/350, 1 px #6B5A4E border r5, chip + italic category above, ruled nowrap price row, 16 px inset photo; never Parade red | Home #counter; Tasting, Cake orders, Bars & bonbons, Prices, Journal | specified |
| Recit three dotted vertical phrases (C3) | T3 strips: 60 px, dotted edges, 260/240/185, Fraunces italic 20 px vertical; "Temper at ten / Mould at noon / Glaze at three"; horizontal dotted lines below 1200 px | Home hero (right flank of the window); every inner head | specified |
| Recit closed-days panel (C4) | T4 panel #F5F5F4 r4, small "Day" label over 24 px weekday, hairline rows | Home #days, #visit hours; Making days, Cake orders, Tasting, Visit | specified |
| Recit accordion with black disc chevrons (C5) | T5 dotted accordion, 36 px titles, 24 px #6B5A4E disc chevron | Home #cakes; Cake orders, Tasting, Visit questions | specified |
| Recit first-screen still-life + orbit mark + hours | Framed window 672 px (ribbon of dark chocolate on marble beside moulds), own scribble mark with one rust loop, H1 below, hours "Closed on Mondays", logo row of five invented growers | Home first screen (framed-window/below-photo/logo-row) | specified |
| Recit centred serif menu + circle cart | One centred Fraunces nav, 36 px circle order button | Header, all pages | specified |
| Recit News rows with 100 px hairline thumbnails | Three story rows with 100 x 100 thumbnails, dotted rules | Home #stories; About stories; archives | specified |
| Recit "appear" fade-up 0.3 s cubic-bezier(.4,.4,0,1) | sp-reveal--up 12 px, .3 s, same curve; parallax added on hero window (6%) and slab band (10%) | Home and inner rows | specified |
