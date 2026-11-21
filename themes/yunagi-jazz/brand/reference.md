# Reference notes: Yunagi Jazz

IMAGERY: photo (the reference shows night-festival photography; ours is low-key photography of a harbour lawn at dusk).

## Sources
- Primary: https://fes.common-s.org/ (screens: ref/commons-first.png, ref/scroll-commons-900.png, -1800, -3600).
- Secondary: https://chillin-vibes.com/ (ref/chillin-first.png): slanted dark side panel with date block and a tilted ticket-stub "buy" tab; arrow-dot menu list. Structure only; its illustration is not reproduced.

## Signature candidates
| # | Technique | Source | Counterpart (finished theme, see design-spec.md) |
|---|---|---|---|
| T1 | Three equal rounded photo columns, centre raised, headline overlay at bottom of the cards | commons first screen | Home hero: ink r48 mat (1360 wide) with three EQUAL r40 low-key photos (bassist tuning P01, sound engineer at the monitor P02, lantern string over the lawn P03), centre column 32px higher, H1 "One summer weekend, played out on the harbour lawn" overlaid at the bottom of columns 1-2 (product-grid / overlay-bottom / card-row). T1-mini page header (320px) on every inner page. |
| T2 | Fixed corner quarter-disc date badge, bottom right | commons badge | Fixed plum #460E44 quarter disc 216x272 bottom-right on every page (desktop): "2027 / 21-22 / August" + dotted rule + "Harbour Lawn" pill, links to /tickets/; hidden under 782px (dates move into the hero eyebrow). |
| T3 | Pinned drifting thumbnail strip with a rounded white sheet rising over it, strip peeking at both sheet edges | commons scroll | Home: the hero set-card row (6 musicians with time chips, sp-marquee ~22px/s) pins at top 360px while the white r56 sheets "The weekend", "Saturday", "Sunday" (x 76-1364) rise over it. Repeated on Lineup, Schedule, Tickets and The lawn. |
| T4 (support) | Tilted ticket-stub CTA tab | chillin-vibes | The only buy button site-wide: white stub tilted -3deg with a dashed perforation, two notches and an ink arrow disc, "Buy tickets" -> /tickets/ (header, hero, ticket sheet, Tickets page). |

## Scroll effects
See stage-a.md "Scroll candidates". Adopted: sp-marquee (set-card strip), CSS sticky pin (strip under rising sheets), sp-parallax (hero centre photo 8%, lawn band 10%), sp-reveal--up + sp-stagger (hour rows, crew rows); hover .3s cubic-bezier(0.4,0.4,0,1) from the reference.

## Tokens
See reference-tokens.md.
