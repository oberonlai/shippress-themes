# Reference tokens — Southern Hills Kodomo-en (https://southern-hills.ed.jp/), measured 2026-10-24 at 1440×900 with getComputedStyle
Measurement only; no copy, photos or logo reused. Root font-size scales with the viewport (15.5676px at 1440 = 1rem; values below give px and rem).
Source: S5-Style entry 12142. Companion (same template, other palette): https://yanokuchi.ed.jp/ (entry 12141) — used for a second look at the hero and palette swap only.

## (a) Colour and area share
| role | ref hex | where | area |
|---|---|---|---|
| ground | #FBFAF3 (title stripes) / ~#FAF7EF (body) | body, lead, policy, news | ~52% of page height |
| band | #FFD89D peach | `.u-section-dark` bands (point 1688px, facility 1642px) | ~25% |
| light card | #FFFBE2 cream | `.u-frame` facility cards, access band | ~12% |
| accent | #EC7600 orange | h2 text, logo blob, numerals | <3% |
| spot | #E4E959 yellow-green | round CTA badge | <1% |
| text | #372828 | body, buttons | — |
First screen: saturated pixels (S>0.5,V>0.2) = 3.3% (logo blob + CTA badge); photo is high-key and desaturated by a white veil.
Ours (stone-walnut swap, same relations): ground #F5F2EC · band #E4DBCF · light card #FAF7F1 · accent walnut #7A6858 (text ≥18px, badge, numerals) · spot #D2C3B1 · text #2B2521.

## (b) Type
- Body: Nunito Sans / Noto Sans JP, 15.57px (1rem), 400, lh 31.1px (2.0), ls 0.78px (0.05em). Lead text 17.5px (1.125rem) 500.
- h1 (hero): 67.1px (4.3125rem), 500, lh 104.7px (1.56), ls normal, white, split into chars.
- h2 section: 35.0px (2.25rem) 500 lh 63px (1.8) ls 0.05em colour accent; smaller h2 31.1px (2rem) lh 43.6; 27.2px (1.75rem) on CTA band; 24.3px (1.5rem) card titles lh 48.6.
- Ghost word "MINNADE" 57.4px (3.7rem) 500 ls 4.0px (0.07em) colour #726B53.
- Nav 14.6px (0.9375rem) 400. Eyebrow labels 15.57px with a white label box (padding ≈ 0.5rem 1rem, bg #FFF, ink text) overlapping photos.
- Case: none (CJK). Weight never above 500: soft, rounded feel.

## (c) Spacing
- Hero frame: inset 27px (sides) / 86px (top) / 27px bottom; frame 1386×787 (aspect 1.76).
- Section padding: point 78px top & bottom; policy 204 top / 156 bottom; CTA band 156 / 139; access 39 / 117; news 217 / 234. Between tinted bands: margin 6.625rem (103px) plus wobbly edge pseudo-elements 103px tall.
- Containers: items 1284px (78px side margin); facility card 1255px (margin 2.75rem 3.4375rem = 43/54px); card frame edges 53.5px tall wobbly top/bottom.
- Column gaps: policy 58px; facility info 78px; slider gap 3rem (47px) desktop, 2.5rem lead.

## (d) Radius, border, shadow
- Photos in cards 1.25rem = 19.5px; hero frame, band edges, CTA badge and some photos use irregular mask shapes (webp mask images: hand-torn edge, 3–6px wobble on a 28px corner; band edge amplitude ≈ 8px over the full width).
- Borders none; buttons are text links with a dotted underline; no box-shadow except the CTA badge (hard offset shadow ≈ 4px 4px 0 rgba(0,0,0,.12)).

## (e) Imagery
| image | ratio | size @1440 | radius / mask | position |
|---|---|---|---|---|
| hero | 1.76 (16:9) | 1386×787 | wobbly torn-edge mask, fade slider (5s) with 1→1.08 zoom | full width minus 27px |
| lead cluster (4) | mixed (portrait, landscape, small texture tile 1.09) | 258–440 wide | 19.5px, one blob-shaped | scattered over a 734px area right of a 384px text column, offset vertically ±100px, overlapping a blob colour shape |
| policy card photos | 3:2 | 444–592 × 296–394 | 19.5px | beside text, 8/12 vs 4/12 split |
| policy blob photo | ~1.09 | 258×236 | organic blob mask (≈ egg shape) | overlaps section edge, label box under it |
| slider strip | 3:2 | 449×300 | 19.5px | full-bleed auto-scroll, 3 per view, centred |
| facility photo | 16:9 | full card width | frame wobble | inside cream card |

## (f) Decoration
- Round CTA badge: 132px circle (fixed bottom-right, 68px from the right edge, ~68px above the bottom), yellow-green fill, book icon 20px, 2-line label 15px with dotted underline, small arrow; hidden near the footer via IntersectionObserver.
- Logo blob: 195×130 organic shape stuck to the top-left corner, accent fill, white text.
- Numerals 01–03: 85×85 box, 44.8px weight 200, accent, in a yellow blob, rotated −25° before reveal.
- Title stripes: each line of an h2 sits on its own #FBFAF3 stripe (padding ≈ 0.2em 0.4em), 47px high.
- Label tab: white rectangle 286×63 with 20px text, overlapping the lower-left of a photo.
- Wobbly section edge: mask image, 103px tall, repeats left→right; colour inherits the band.

## (g) Motion (all GSAP 3.15 + ScrollTrigger + SplitText + Splide 4.1 AutoScroll)
| effect | trigger | duration | stagger / delay | easing | distance |
|---|---|---|---|---|---|
| hero title chars drop in | window load | 0.6s | 0.05s stagger, 0.3s delay | bounce.out | y −40 → 0, opacity 0→1 |
| hero photo zoom | slide active | 7s | — | linear | scale 1→1.08 |
| hero slides | autoplay | fade, 5s interval | — | — | — |
| lead images pop in (≥769px) | ScrollTrigger start "top 60%" | 0.7s | 0.2s stagger | back.out(1.2) | scale 0→1, opacity |
| lead/section title chars | start "top 80%" (section titles "top 95%") | 0.5s | 0.03s stagger | back.out(3) | rotate random 0–25° → 0 |
| rotate-scale-in (numerals −25°, policy/news photos −6°) | start "top 80%" | 0.9s | — | back.out(1.4) | scale 0.6→1, opacity |
| title-line wipe | start "top 85%" | 0.8s | — | power2.out | clip-path inset(0 100% 0 0)→0 |
| marquee photo strips | continuous | autoScroll speed 1 | — | linear | loop |
| hover buttons | mouseenter | 0.4s | — | cubic-bezier(0, .95, .51, 1.37) | hop |
| CSS reveal | toggled class | 0.6s | — | ease-out | translateY 1.25rem + opacity |
