# Reference
Reference: https://www.keycoffee.co.jp/ (Key Coffee corporate site, Japanese coffee company; task row's reference). Tokens: reference-tokens.md. No secondary reference (the row names one reference; none added).
Browser capture was impossible in this sandbox, so `ref/` holds no screenshots; analysis comes from the site's HTML, CSS and JS.

| Signature candidate | Ref evidence | Ours (planned) | Result (as built, per design-spec.md) |
|---|---|---|---|
| C1 Lifted centre card on a curved pale band, emblem on the band's top edge | top-coffee: active card 480×320 vs 360×240 neighbours, −44px lift, white caption plate, emblem at top −87px | "Which offices it suits": three cards, middle one larger and lifted, on a soft curved band with a round cup mark on the edge | **T1**, home block 4 `#suits` (P05 centre 480×320 lifted 44px, P04/P06 360×240, white plates r 0 0 8 8, curved #F0EFE7 band, Ø72 cup disc at top −36); also The Service, Plans & Pricing, Offices We Serve |
| C2 Hanging utility tab + 2px underline current item + outline pill | header_footer.css: #F0EFE7 tab, radius 0 0 8 8, 40px | split header: hanging warm-grey tab (language, phone) + outline pill CTA | **T2**, every page: 100px #F8F7F3 header, 32px #F0EFE7 tab r 0 0 8 8 (language + hours/phone), 2px #005BAC current underline, outline pill "Book a tasting visit" |
| C3 Pill tabs + ruled dated rows with tiny chips | top-info: #F0EFE7 pills, active #005BAC; 1px #D3D0C8 rows; 10px chips | "Tasting visit calendar": size tabs + dated slot rows | **T3**, home block 7 `#visits` (4 pill tabs, 8 rows, 12px caps dates, 10px chips); also Tasting Visit (12 rows), FAQ, Journal, About milestones |
| C4 2×2 slab-caps label tiles + tinted notice strip | top-stacic-bnr, top-importance | four anchor tiles under the hero; one notice strip | Supporting / KV items 5–6: notice strip rgba(106,86,72,.06) under the hero info bar + 2×2 tiles SUITS/SERVICE/VISITS/PLANS (PJS 800 24px ls 3px #5D2F0C), staggered reveal |
| Main visual: rounded banner, dash bars, round arrows, 9s autoplay | main-visual (Swiper 9000/300) | single documentary photo stage | KV: inset r 8 2.4:1 photo, P01↔P02 crossfade 9s, Ø40 arrows, 10×14 dash bars, `sp-parallax --sp-par:8%` |
| Rejected: peeking-neighbour banner carousel (Swiper 1.5 slides) | main-visual | already used by Kensa Laboratory | not used |

Scroll effects on the reference: none (Swiper only). Ours: `sp-parallax` (hero 8%, story band 10%), `sp-stagger` + `sp-reveal--up` (tiles, cards, service items); see design-spec.md §10.
