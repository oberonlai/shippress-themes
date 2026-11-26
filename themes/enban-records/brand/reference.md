# Reference (draft; "our version" column is filled at design time)

Primary: https://diskunion.net/ (Disk Union online shop, record / CD retail, shopping category). Chosen by the plan row. The live site geo-blocks the build machine, so it was studied through an Internet Archive render of 2026-10-08 (see `reference-tokens.md`).
S5-Style: no separate S5 site was used as secondary — the S5 candidates from the unused list (hair-care, fashion EC, design studios) did not match a quiet record shop. Searched and discarded without adoption.

## Block order of the reference home
1. Black keyword bar (sticky) 2. Slide strip with neighbours cut at both edges, arrows and dots 3. Urgent notice lines with red marks 4. News and features list 5. Pre-orders: 5-up sleeve cards 6. New arrivals 7. Staff picks 8. Outlet 9. Ranking band on pale warm ground 10. News

## Signature candidates (what to borrow)
| # | Reference form | Our conversion |
|---|---|---|
| S1 | Sticky black keyword bar with a label cell and slash-separated links | "On the desk this week" bar: label + slash-separated artists/genres on the shop's ink colour, docked under the header |
| S2 | Square sleeve cards with a format disc, bold price, outline status box | Crate cards: sleeve 1:1, round format glyph, price, outline box "Hold for a listen" |
| S3 | Centred two-language heads between full-width hairlines + wide outline box button with chevron | Centred serif head + grey caps sub-label, 1 px separators, wide outline "See the whole crate" box |
| S4 (support) | Slide strip, centre card plus cut neighbours | Hero photo card with the next sleeve peeking at the viewport edge; square arrows and dots |

## Our version (finished mapping, from design-spec.md)
| # | Reference form | Our version in Enban Records | Where |
|---|---|---|---|
| S1 | Sticky black keyword bar, label cell + slash list (40 px, 14 px white) | T1 `.eb-bar`: `#0E0C0F`, 40 px, sticky, "On the desk this week" + 7 genre links separated by " / " | every page (header part); page-local variants on The crate, First records, Selling, Journal |
| S2 | 5-up 1:1 sleeve cards: format disc, bold price + tax suffix, full-width outline status box | T2 crate cards: 5 × 184 px, gap 20, own disc glyph, Newsreader 24 px price + "incl. VAT", 1 px ink "Hold for a listen" box | home crate; The crate (WooCommerce loop); First records; Selling; Listening slot cards; Journal / post cards |
| S3 | Centred 28 px head + grey caps sub-label after a full-width 1 px rule; 330 x 55 outline box with chevron | T3: full-width `#C0BCC3` rule, 100 px, Newsreader 28 px head + Literata 14 px caps sub-label; 330 x 55 ink outline box | every home section from block 2; every inner page |
| S4 | Centre slide with cut neighbours, black square arrows, square dots | Hero inset photo card (3:2) with the next photo peeking 120 px at the right viewport edge, 44 px ink arrow tabs, 8 px square dots; click-only, 500 ms ease | home hero only |
| Pager strip | Grey strip with dots under the stage | Timeline band `#ECE8EE` with the four shop-day stops and a plum listening-desk segment (hero_footer = timeline) | home hero; Listening and Visit pages |
| Colour | white / #4B4B4B / black / #BFBFBF / #F4F1E7 / red | #FBFAFB / #4B4750 / #0E0C0F / #C0BCC3 / #ECE8EE / #B4473A, plus plan plum #65586A | site-wide |
