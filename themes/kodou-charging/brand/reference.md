# Reference (draft): Kodou Charging
Main reference: https://www.nichicon.co.jp/products/v2h/ (Nichicon V2H / EV power station page; the charger unit mounted on a pale exterior wall, then one path to an enquiry). Measured tokens: `reference-tokens.md`. Screens: `ref/nichicon-first.png`, `ref/nichicon-v2h-first.png`, `ref/nichicon-v2h-full.png`, `ref/scroll-nichicon-fade-before.png`, `ref/scroll-nichicon-fade-after.png`.

## Colour relation (reference to ours)
| Role | Nichicon | Kodou Charging | Share |
|---|---|---|---|
| Ground | #FFFFFF | #FFFFFF | ~70 % |
| Panel | #F6F6F6 | #F2F5F4 | ~15 % |
| Ink | #111111 | #15201E | text |
| Accent (thin use) | blue #1450E1 | rust-teal #5A7E78, deep #2F4A45 | <8 % |
| Spark | none | amber #C8873A, under 1 % | <1 % |

## Signature candidates
1. Wide outlined notice banner with pictogram left, emphasised phrase, outbound arrow right (the single repeated CTA).
2. Flush two-cell tab switch in a soft-shadowed 8 px box on a pale band.
3. Centred bold statement with one accent-coloured phrase + two 110 px line-icon feature columns.
4. (support) Product-in-situ KV on a pale wall, shadow tiles with caption strip.

## Our equivalents (filled at design stage, see design-spec.md)
| Reference element | Kodou Charging result | Where |
|---|---|---|
| Outlined notice banner (1 px accent, r8, pictogram, accent phrase, arrow) | T1 "Request a site assessment" banner, the single repeated CTA; also the hero booking bar | Home hero foot, after pricing, closing; every inner page |
| Flush two-cell tab, active cell filled accent, soft-shadow r8 box, pale panel | T2 "Staff car parks / Visitor & fleet bays" CSS-only tabs | Home #sites; Services; Sites |
| Centred bold statement + accent phrase + two 110 px line-pictogram columns | T3 "Charging where people already park" | Home #why; About; Site assessment |
| Product-in-situ tiles | T4 four assessment tiles (4:3 photo + caption strip) | Home #assessment; Site assessment; Services |
| KV: pale leaf-shadow wall, charger + coiled cable, car cropped left, text right | Split hero: fitter at half-mounted unit on concrete column, coiled cable, bumper cropped left, text beside photo | Home hero (img-01) |
| Colours #FFFFFF / #F6F6F6 / #111111 / blue #1450E1 | #FFFFFF / #F2F5F4 / #15201E / teal #5A7E78, deep #2F4A45 | Site-wide |
| Fade-up 30 px, 0.8 s ease-in-out | sp-reveal--up (30 px, 0.8 s, ease-in-out) + sp-stagger + sp-count; sp-parallax on hero and wide band | Below the hero |
