# Reference (the "Our version" column follows design-spec.md)

Primary: https://abemamoru-shouten.com/ (S5-Style gallery entry, food and drink maker/shop, Shiogama). Food, seafood retail: the closest category to an independent fishmonger. Single reference.

## Why this site
A fish shop whose first screen shows hand-brushed fish dropping through an empty pale page onto a full-bleed dark photograph of the product on a table; quiet, neutral, almost no saturated colour; one red accent.

## Signature technique candidates
| # | Technique | Reference location | Our version |
|---|---|---|---|
| T1 | Hanging fish: tall narrow fish figures dropping from the top edge at different heights and different scroll speeds over an empty pale ground, then a dark full-bleed photo slides up under them | first screen, `ref/abemamoru-first.png`, `ref/scroll-abemamoru-900.png` |  Home `kaimon/catch`: five dark film-grain whole-fish photo strips (P01–P05, 0.26–0.36:1, radius 0) hanging at five heights on a pale grain page, P01 cut left, P03 cut top, P04 cut right, each its own `sp-parallax__layer` (6–12%); dark full-bleed H01 (owner lifting a bream off the ice, cook pointing at the board) visible in the bottom 115px, parallax 8%. Small three-strip catch head + dark head photo on every inner page. |
| T2 | Ruled index rows whose small thumbnails stack flush against the right viewport edge, thumbnail nudges on hover | recipe section, `ref/scroll-abemamoru-3600.png` |  Home `kaimon/landings`: five ruled rows Tue–Sat (one day boat each), 141px pitch, thumbnails L1–L5 202×141 flush to the right viewport edge with 0 gap, hover translateX(−12px) .4s ease-in-out. Reused on About, The Boats, Cut to Order, Kitchens, People, Journal archive. |
| T3 | Fixed corner furniture: seal logo top-left, small text stack bottom-left (Cart / My page / Contact), vertical section titles at the right edge | all screens |  Our own brick-red hook-and-fish stamp fixed at left 60 / top 56; corner stack (Menu / Order / Visit / The Landing List, + Basket with WooCommerce) fixed bottom-left; 173×346 1px-ink plate touching the top edge at right 4% (home "Day boats, / Quay Row.", inner pages their kicker); vertical section titles alternating left/right at ≥1024. All horizontal / in the bar below 1024. |
| T4 (supporting) | White tab with the headline hanging from the lower edge of the dark photo; speckled paper ground | `ref/scroll-abemamoru-900.png` |  White `paper` tab (420 wide) hanging off H01's lower edge with the h2; grain.svg dot speckle on `ground` #F0F2F1; 1px #BDBDBD hairlines with + tick; 28px #AA0813 circle arrows. |

## Scroll effects (see reference-tokens.md (g))
Hero photo parallax, fish layers at faster speeds, section-title reveal, hover nudge, cross-fading pair.

Our scroll effects: `sp-parallax` (catch strips 12/10/6/8/10%, H01 8%, footer F1 8%; mobile 4–6%), `sp-reveal--up` + `sp-stagger` (.6s, 24px, cubic-bezier(.22,.61,.36,1)), `sp-reveal--zoom` on C1 / K1 in place of the cross-fade. Hover nudge in theme CSS. Not used: wave hairlines, torn-paper edge, cross-fading slideshow.
