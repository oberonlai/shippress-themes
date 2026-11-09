# Reference tokens: Booster insurance agency home (https://www.boo-ster.co.jp/), measured at 1440x900 with computed styles. Values only; no assets copied.

## (a) Colour
| Role | Hex | Area |
|---|---|---|
| Ink / text | #0F1821 | body text on white |
| Ground | #FFFFFF | news and footer bands, header slab, logo tile |
| Deep navy band | about #0C2760 to #0A1E4C | contact band, group-photo foot |
| Accent | #EC6C00 | CTA pills, small labels, hover character colour only; the mission band is a full orange gradient (we do not borrow it) |
| First screen | grey and brown photo midtones; saturated pixels (S>0.5, V>0.35) measured 17% of the first screen, mostly the blue jacket and the orange panel behind the subject | |

## (b) Type
- Family: YakuHanJP + Noto Sans JP (JP), Roboto (Latin labels). Body 16 px / 32 px line height / 0.4 px tracking, weight 400. Bold 700 for headings.
- Hero H2 52.5 px / 65.6 px line height / 2.6 px tracking, 700, white. Section H2 29-33 px, 700, 1.45-1.65 px tracking. Title sub-label (EN) 12-14 px, 700, 1.2 px tracking, uppercase, accent coloured on white grounds. Nav 14 px 700. Pill label 13 px 700. Mission lead 55.5 px / 69 px.
- Giant ghost typography 232 px Roboto 400, white on navy (not borrowed).

## (c) Spacing
- Container 1260-1365 px. Section padding top about 112-135 px. Insurance panels 682 x 675 px each, no gap between them (4 px frame inset). News rows 855 px wide, 100 px tall, 24 px padding. Header slab 169 px logo tile at 19 px from the edges.

## (d) Radius, border, shadow
- Logo tile radius 3.75 px, white. Contact pill radius 52 px (full). Outline pill radius 30 px with 1 px white border. News rows have a 1 px grey bottom rule. Panels radius 3.75 px on the outer corner only. No shadows seen.

## (e) Imagery
IMAGERY: photo. Documentary people photographs (faces, desks, a group on a riverside), warm natural light, saturated brand-tinted grade. The hero is a full-bleed 16:9 film still. Panels 682 x 675 (about 1:1) with a dark scrim. Triple photo strip 3 x about 3:4 flush at the left of the contact band, overlapping its top edge by about 40 px. Scattered small photos (our lead scatter is not borrowed).

## (f) Decoration
- Short 20 px white rule between the headline and the sub-line. Round 175 px orbit ring badge at the bottom right of the hero (thin 1 px circle, two travelling dots, centred 2-character label). Circle outline arrow 44 px at the bottom-left of each panel. Dated news rows with a small black chip. Page-top disc.

## (g) Motion
- Opening: logo opening layer then the film; headline split per character: opacity 0 to 1 and translate3d(2rem,0,0) in 0.6 s, colour from accent to white over 1.4 s, staggered per character. Blur-to-sharp resolve on the key visual (js-top-fv-blur).
- Text blocks: class -fadein, opacity and transform 0.5 s on entering the viewport (js-enter toggle).
- Links: hover text replace, two stacked labels sliding 0.3 s.
- Library: custom scripts (plugins.js, script.min.js), Barba page transitions, Swiper CSS present; no GSAP found.
