# Reference (stage 1; "finished counterpart" columns filled from design-spec.md)

Reference: https://earthboat.jp/  (outdoor hotel with private saunas; chosen for the full-bleed photo hero, quiet pale-olive ground, serif display, frosted header)
Secondary: https://www.hana-mura.com/  (onsen inn; chosen for the tall inset portrait on white, outline circle labels, vertical micro text)
Both found through the S5-Style gallery (stay / sauna / retreat category) and checked against used-refs.txt: neither domain is used.
Rejected after a first-screen capture: a villa site with a fully terracotta first screen and a left menu rail (87% saturated, side rail).

## Imagery
IMAGERY: photo. Film-grain documentary photographs, soft morning light, muted greens and timber browns.

## Palette (ratios on the reference first screens and pages)
| Role | Reference hex | Finished counterpart (design-spec §5) | Share |
|---|---|---|---|
| Ground | #E5E4D5 | `stone` #E5E4D5 (exact) | 35% |
| Light band | #EDECE2 | `mist` #EDECE2 (exact) | 30% |
| Ink | #212227 | `ink` #212227 (exact) | text, pills, hairlines |
| Dark overlay | #1C1D1F | `night` #1C1D1F (exact): hero gradient, newsletter panel | 3% |
| Hero glow | #1C3537 @ 50% | `glow` #1C3537 @ 50%, blur 105px, 380px (exact) | local |
| White | #FFFFFF | `white` #FFFFFF: footer, lodge band, H1 at 88% | 15% |
| Accent | none on reference | `ochre` #B98C46 (row hex): day-line fill, dots, one underline | <= 5% |
First-screen saturated share on the reference: 0%. Target for ours: <= 12% (cap 15%).

## Signature techniques and finished counterparts
| # | Reference (site, screenshot) | Finished counterpart (design-spec) | Where |
|---|---|---|---|
| T1 | Frosted 67px header strip (blur 10.5px) over a full-bleed photo; serif headline lower-left at x 124 on a #1C3537 glow (Earthboat, `ref/scroll-eb-hero.png`) | Fixed 67px frosted header (blur 10.5px, tint .35) with centred nav and ink pill "Reserve a place"; full-bleed P01 (teacher unrolling mats on the deck, two guests carrying tea); H1 "Three quiet days, one slow morning." Newsreader 4.5rem at x 124 on the same glow | Home hero + every inner page opener (560px) |
| T2 | Dusk photo clipped to a ridgeline rising from the right into the closing band, closing lines left, white back-to-top tab (Earthboat footer, `ref/scroll-eb-ridge-foot.png`) | P12 (lodge at blue hour) clipped to a ridge polygon over x 480-1440 of a 420px #EDECE2 band, 3-line closing sentence at x 124, white 164x44 "Back to top" tab; sp-parallax 10% | Footer part: every page |
| T3 | 3 x 369px square photo cards, 24px outline-circle chevron top-right, four-dot pager, hashtag micro-labels, name + tick + region label above (Earthboat locations, `ref/eb-2700.png`) | Retreat cards (First Light, Forest, Quiet, Weekend Walking) with name + "3 days" label, circle chevron link, decorative dots, hashtags, two dates and price | Home calendar + journal; Calendar, Rooms, Kitchen, Journal |
| S1 | Tall 0.57:1 portrait, outline circle label, vertical micro text (Hana-mura, `ref/hm-0.png`, `ref/scroll-hm-circle-label.png`) | P02 456x800 portrait, 156px outline circle "THE RETREAT", vertical "Larch Hill - Fernhollow Valley - since 2014" (>=1100px only) | Home H2, About, Teachers; circle "ROOMS" on home lodge block |
| S2 | "(Navigate)" parenthesised heading and hairline link rows with chevrons (Earthboat footer) | Parenthesised section labels on every home block; hairline rows for people, steps, footer nav | Site-wide |
| S3 | 2px strip progress line, 150px filled (Earthboat stay strip) | Day-line across the hero foot: 7 ticks 05:45-21:00, 150px ochre fill; static | Home hero; Retreat Day rows |

## Scroll effects observed and finished counterparts
| Reference motion | Finished counterpart |
|---|---|
| Earthboat hero: muted looping film under the frosted header | `sp-parallax` 8% (mobile 6%) on P01; header always frosted (CSS only) |
| Earthboat strip: progress bar driven by the strip's own scroll | not reproduced as motion; static day-line in the hero |
| Earthboat menu: clip-path overlay (gsap) | not reproduced; core/navigation overlay on mobile |
| Earthboat / Hana-mura: no card reveal | our quiet `sp-reveal--up` + `sp-stagger` (0.8s, 24px) on cards, day stops, people rows; `sp-reveal--mask` on the tall portrait |
| Earthboat footer ridge photo (static) | `sp-parallax` 10% on P12 inside the ridge clip |

## Screenshots
ref/eb-*.png (Earthboat at scroll 0 to 6300), ref/hm-*.png (Hana-mura 0 to 3600), ref/scroll-*.png (named picks).
