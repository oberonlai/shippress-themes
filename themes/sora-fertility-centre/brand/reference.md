# Reference — Sora Fertility Centre (research draft, stage 1)

Source: S5-Style (https://www.s5-style.com/) category 美容･健康･サロン (id 30). Only one site used: other candidates were blocked (WAF) or too saturated / illustrative (3D character hero) / e-commerce, so they were dropped.

| Site | URL | Why |
|---|---|---|
| sumire (bridal styling salon) | https://sumire-totalbeauty.jp/ | Close in mood to a calm care brand: low-chroma grey-green ground, one full-bleed photo cover, quiet serif, personal "letter" tone. Not previously used in any theme reference.md. |

Screenshots (1440x900, own headless Chrome): `ref/sumire-first.png` (first screen), `ref/sumire-part1.png` (arch band), `ref/sumire-part2.png` (full-bleed interlude photo).
Scroll before/after: `ref/scroll-concept-before.png`/`-after.png`, `ref/scroll-dress-before.png`/`-after.png`.

## Structure (measured)
- Home height 9687px at 1440. Blocks: full-bleed hero (3 crossfading slides, 900px) → "letter" concept (1200px: text left in two offset columns, tilted paper + photo right) → three service bands (costume / dress / hair&make, each ~1150px: arch-shaped lighter ground, small centred title + English subtitle, ONE 427x651 portrait photo offset right of centre, vertical text beside it) → interlude full-bleed photo band (900px) → photo plan (664) → salon slider (1214) → FAQ / contact.
- Image-to-text roughly 60/40; one photo per block, big margins (block padding ~330px top). Body 13.9px / line-height 2.3; section title 15.9px with 0.1em tracking, so headings are tiny and photos carry the page.
- Nav: logo left (thin custom script), items right, (lowercase English labels, 20px, +/- toggles), outline button "reserve" at far right; transparent over the hero.
- Fonts: Shippori Mincho (JP serif), TT Commons; English accents italic script.

## Signature candidates (shape / composition / position)
1. Arch band: a very large lighter circle (about 1440px wide, top at 290px inside the section) rising from the page ground behind each service block; it is one tone lighter than the ground, no border.
2. Offset single portrait photo (427x651, ~2:3) placed at ~55% of the width with the vertical text column to its left and a "view more" link with a small leaf mark under the text.
3. Tilted paper sheet behind a photo (rotated ~6-10 degrees, scrubbed on scroll), with pressed-flower sprigs overlapping the photo edge.
4. Full-bleed photo cover with a tiny italic quote ("Dear, family") low left and a ghost-outline nav button top right; film-grain overlay across the whole page.

## Colour (measured on screenshots / CSS)
| Role | Reference hex | Share | Our mapping (draft, to be set in design-spec) |
|---|---|---|---|
| Ground | #D0D6D0 (grey-green), lighter arch #DEE2E6 / #E2E6E5 | ~60% | low-chroma warm stone-grey ground (not cream), arch one tone lighter |
| Ink | #3E4D43 (body), #232827 (photo shadows) | ~25% | deep warm ink |
| Accent | #34603E (small links / marks) | <2% | 桜鼠 #B39A9A on small areas only |
| Photo | #768078, #555851, #A3ADA8 mid greys | rest | high-key film-grain photography |

First-screen saturated pixel share (sat>0.5, value>0.2): 0.0%. The whole first screen is greys with slight green.

## Scroll effects (observed from HTML/JS; reverse-engineer method: observe, fetch HTML/CSS/JS, find triggers, verify)
Library: GSAP + ScrollTrigger, Lenis smooth scroll (lerp 0.1), Splide (fade slider). Observation only; no code copied.
| Effect | Trigger | Where | Time / ease | Distance |
|---|---|---|---|---|
| Tilted paper sheet rotates | ScrollTrigger scrub, start "top bottom", end "bottom bottom" | concept letter (paper, sumire mark, top layer) | scrubbed to scroll, ease none | rotate 0 → 6 / 8 / 10 deg, origin right centre |
| Service band image stretches and drifts | ScrollTrigger scrub, same start/end | costume / dress / hair bands | scrubbed, ease none | scaleX 1 → 1.15, yPercent 0 → -10, origin 50% 0 |
| Hero slide change | timed (CSS animation + Splide) | hero 3 slides | slideIn 1s expo-out, scaleIn .8s `cubic-bezier(.215,.61,.355,1)` delay .4s | slide + scale |
| FAQ / accordion open | click, GSAP height tween | faq | expo.out | height 0 → auto |
| Link hover swap | hover | nav / buttons | .4–.6s, expo in-out, text moves 105% | y or x 105% |
| Smooth scroll | Lenis wheel | whole page | lerp 0.1 | n/a |
Site-wide easing tokens in CSS: `cubic-bezier(.215,.61,.355,1)` (39 uses), `(.19,1,.22,1)` (15), `(.165,.84,.44,1)` (14). Scroll before/after: see the `scroll-*.png` files above.

## Where it lands in our theme (成品對應 — to be filled after build)
| Reference move | Our implementation | Pages |
|---|---|---|
|  |  |  |
