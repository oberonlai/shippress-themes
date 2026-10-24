# Reference ("our counterpart" filled from design-spec.md, stage 1)
| Role | Site | Why |
|---|---|---|
| Main | https://www.deandeluca.co.jp/catering/ | catering service page: full-bleed photo hero, centred serif title, vertical-caps course labels, wide photos, 5-step order flow, white ground |
| Second | https://kitao-chef.com/ | private chef / catering: huge serif-caps titles, quiet greige ground, boxed STEP 1–4 flow joined by hairlines |
(s5-style.com could not be reached from this box on 2026-10-24; sites chosen from catering search results, not previously used in any reference.md.)

## Signature technique candidates
| # | Technique (shape / composition / position) | Source | Our counterpart |
|---|---|---|---|
| A | Full-bleed photo hero, 640px high at 1440, white centred serif title 70px + small caps sub-line + outlined pill button (1px white, 999px radius, translucent fill) at the lower centre | D&D | Home H1 hero (T1): 100vw×720 film-grain banquet-hall photo, EB Garamond 4.5rem centred white, same pill values, info bar on photo bottom; inner-page 480px heroes |
| B | Vertical-caps course label (writing-mode vertical-rl, EN caps 44px serif + JP 20px) in the left gutter with a thin rule, wide 2.3:1 photo to its right, text + price + chip tags below | D&D | Home H4 (T2): OFFICE / CELEBRATIONS / BANQUETS rows, 44px vertical-rl caps + rule, 2.31:1 photos, chips, prices; Engagement, Office, Celebrations, Banquets, Menus, Stories |
| C | Fixed contact box bottom-right (260×158, black, phone + white button) | D&D | Not used as a fixed box; its role moves into the hero info bar (lead time / guests / area + enquiry link) |
| D | Boxed STEP 1–4 labels in hairline frames, joined by diagonal hairlines, alternating left/right with photos | Kitao | Home H3 (T3): 5 hairline STEP boxes, horizontal zig-zag, diagonal 1px #999 joins, overlapping STEP label; Engagement, Office, Celebrations, Team |
| E | Very large light serif caps page title (140px/126px) over greige ground, portrait photo overlapping the title row | Kitao | Inner-page titles EB Garamond caps clamp(4.25rem, 8vw, 8.75rem)/0.9 on greige; home section caps titles 5.5rem |
| F | Circular photo thumbnails in 3×2 category grid | Kitao | Home H8 + Team: 6 circular portraits 176px in 3×2 |

## Colour relationship (reference → ours)
D&D: white ground / black ink / photo supplies all colour. Kitao: greige #F5F3EE ground / #333 ink / gold #D0A050 small accent / red ring in logo. Ours: ground #F4F2EE, ink #2B2626, accent #7A5E5E (small areas only), secondary muted gold #B59A63 for hairline details ≤3%.
See reference-tokens.md for measurements; ref/ for screenshots (ref-dd-*, ref-kt-*, scroll-*).

## Scroll effects found
| Site | Effect | Trigger | Timing | Easing | Distance |
|---|---|---|---|---|---|
| D&D | none on content; fixed contact box fades/slides | CSS transition on class toggle | .5s | default | −15.8px |
| D&D | hero autoplay video | page load | loop | – | – |
| Kitao | fadeInDownBig / slideInDown on 2 blocks | WPBakery waypoint (jQuery), fires when "almost visible" | ≈1s, delay 0 | ease | from above (animate.css) |
Screenshots: ref/scroll-dd-before/after.png, ref/scroll-kitao-before/mid/after.png (Kitao before/after shows the section pair around the animated element).
