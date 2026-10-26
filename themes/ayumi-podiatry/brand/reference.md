# reference (stage 1 draft; the finished-counterpart column was filled by the stage 1 spec, matching design-spec.md)
- Primary reference: https://fukushi.gifu.jp/ (S5-Style #11715, welfare / care category; the same "people caring for people" field as a foot clinic; not listed in an earlier reference.md).
- One reference site only (tential.jp timed out, so the research stayed on this single site).
- Measured values: reference-tokens.md. Screenshots: brand/ref/ (ref-fold, scroll-*, ref-service-list, ref-recruit, ref-cta).

## IMAGERY: photo
The reference's main images are colour documentary photographs (people, hands, work scenes). Flat colour shapes are decoration (under 15%) and are not illustration.

## Signature-technique candidates (shape / composition / position)
| # | Technique | Description | Finished counterpart |
|---|---|---|---|
| H1 | Colour shapes fly into the first screen | 16 flat pieces (squares, quarter-circles, semicircles, triangles, rings) scatter around a centred headline, fly in from the edges with rotation and scale over 1.4s, then keep a slow float | **T1 (used)**: home hero, 14 foot-shaped colour pieces (insole ovals, arch quarter-circles, heel semicircles, rounded squares, triangles, rings, two-tone circles, small squares) plus 4 blurred light spots plus a toe-dot mark after the H1; 1.4s / 107ms stagger fly-in, then a resident float; every inner page head uses a 6-piece mini set. design-spec section 1 T1, section 2, section 6 |
| H2 | Small square photo grows to full bleed | One 485x485 square photo sits centred and scales linearly to 100vw x 100vh on scroll, with a yellow blurred light behind it | **KV second beat**: home block 2, A02 square photo (440x440) with sp-reveal--zoom plus a light spot, then block 3, A03 full-bleed photo band with sp-parallax 10% (the main parallax). design-spec section 6, section 10 |
| H3 | Tilted photo wall | A full-bleed photo wall rotated about -8 degrees, 24px gold diagonal strips between photos, white type centred, 0.45 darkening overlay | **T2 (used)**: home block 4 "The usual complaints", 6 working-feet photos W1-W6, -8 degrees, 24px gold #C9A04A strips, 0.45 olive-ink tint, white type centred, sp-parallax 8%; continued on Conditions (3-photo strip) and Stories (full wall). design-spec section 1 T2 |
| H4 | Saturated full card plus a circle photo | A single saturated colour, large radius (4rem), a translucent white panel on the left (SERVICE 01 numeral plus a pill label plus a title), a circle photo on the right, type on an arc | **T3 (used)**: home block 6 Method, three 4rem-radius solid cards (#5F6348 / #8E9877 / #A8AF8B), white 90% panel plus a 5.5rem "01" plus a pill, a 480px circle photo on the right (M1-M3) plus a dashed ring plus a toe dot; continued on About, Treatments, Orthotics, Fees, Team, Visit. design-spec section 1 T3 |
| H5 | Pill marquee | 44px-tall pills, a colour dot on the left, an infinite horizontal loop, placed between the photo wall and the service area | Home block 5, complaint pill marquee (12 items, 44px, 1px #D6D9C8, colour dots), sp-marquee 40s; also the foot of Conditions. design-spec section 6, section 9 |
| H6 | Ring entering from the corner | A large orange ring (outer diameter about 700px) enters the block from the top right | A soft clay ring #F0B48C (outer diameter 700, thickness 90) enters the Method block from the top right, behind the cards. design-spec section 1 T3 supporting |

## Colour and share
Ground #FAF9F5 / #F5F2E9 about 80%; text #2D2D2D about 2%; main blocks #F2526A #5DC276 #5AC2DD about 9%; secondary #9B71A2 #F9C250 #F4EE67 about 6%; accent #F7B98A, #FFEAB7 (CTA band), button #2D2D2D. First-screen saturated share about 16%.

## Scroll-motion summary
GSAP and ScrollTrigger load, but the home page is mostly custom WAAPI (hero fly-in) plus an rAF scroll scrub (photo zoom, photo-wall scale). The service area enters at scrollY + 0.5vh. Other data-js-scroll items use ScrollTrigger once, toggleClass. See reference-tokens.md (g) and the scroll-technique table in stage-a.md.
