# Reference (our-implementation column filled at design stage; binding detail in design-spec.md)

Primary: https://morethan-kobe.jp/ — a home-care and care-planning provider's recruiting site (health / welfare category on S5-Style). No secondary reference: the second candidate looked at was a brand-studio site with no clinical imagery and was dropped.

## Signature candidates
| # | Reference move | Where | Our implementation |
|---|---|---|---|
| 1 | White head band, then a full-bleed documentary photo; a flat ink square CTA block hangs from the header's top-right corner (180x90) | first screen | **T1** home `front-hero`: white 90px header with ink 180×90 "Book a visit ↗" block flush top-right (site-wide), white band with two-line H1 at x 184, full-bleed P01 echo-room photo (`sp-parallax` 8%), ink 56px info bar fused to the photo foot; page-head variant on Clinics, First visit, Follow-up, Tests & fees, About, Contact |
| 2 | Tall photo with a same-width ink caption tile fused beneath it, beside a very large title and two underlined "(01) / (02)" arrow rows | Work block | **T2** home `front-clinics` (photo left, tile "Mon – Fri", five weekday rows) and `front-first-visit` (mirrored, tile "90 min", proportional timing bar); 4:5 photo 638px + same-width 168px ink tile, 5.5rem title, "(01)" underlined ↗ rows; inner: Clinics, First visit, Follow-up, Tests & fees, About, Stories, Contact |
| 3 | Slate band with a three-line statement stepped to the right, a 240px hairline leader before line 1 and a small landscape photo top-right | Staff Interview band | **T3** home `front-proof`: full-bleed slate-green `#5F6F68` band, "In their words" 5.5rem, P08 260×170 top-right, 240px leader + three stepped white lines, P09 500px bleeding left, three patient-story rows; inner: First visit, Follow-up, About, News, Contact |
| 4 | Three-lane ticker of huge light/bold words with small square photos (supporting; not a signature) | between blocks | Supporting: home `front-ticker`, three lanes of weekday clinic names (Inter Tight 300/700, 6rem) with 180×180 squares P04–P06, `sp-marquee` 40s, lane 2 reversed |

## Palette
Ink #131414 / white / slate #686E74 / ghost grey #E7E7E8; first-screen saturated share 5.9%.
Ours: ink #131414 (exact) ~30%, white ~45%, slate-green #5F6F68 ~15% (slate tilted green: design row "aonibi" slate-green and Kanjo College already used blue slate), mist #EEF0EF ~9%, ghost #E7E7E8 hairlines, heart red #B4574F ≤1% dots only; first-screen target ≤8%.

## Scroll effects
Statement colour fill scrubbed on scroll; 1s expo.out reveal with 0.08s stagger; opposite-direction ticker rows; Lenis smooth scroll.
Ours: statement lines `sp-stagger` > `sp-reveal--up` (1s, cubic-bezier(.16,1,.3,1), 24px); block reveals the same; `sp-marquee` 40s with lane 2 reversed; `sp-parallax` on hero P01 (8%) and follow-up strip P10 (10%) in place of Lenis; no libraries.
