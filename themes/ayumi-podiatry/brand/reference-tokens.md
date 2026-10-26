# reference-tokens — fukushi.gifu.jp (Hotaru Group, S5-Style #11715), home page, measured at 1440x900
Source: Playwright getComputedStyle plus a reading of the CSS and JS. Numbers and descriptions only. No copied assets, copy, or logo.

## (a) Colour
| Role | hex | Share (first screen 1440x900) | Notes |
|---|---|---|---|
| Ground | #FAF9F5 (hero) / #F5F2E9 (body) | about 80% | Warm pale beige; we do not use beige, we use a pale olive white |
| Text | #2D2D2D | about 2% | Deep charcoal, not pure black |
| Main (geometry, 1-2 pieces each) | red #F2526A, green #5DC276, blue #5AC2DD | about 9% | Saturated |
| Secondary | purple #9B71A2, yellow #F9C250, lemon #F4EE67 | about 6% | Saturated |
| Accent | orange #F7B98A (large ring), CTA band #FFEAB7, button #2D2D2D | about 1% | |
First-screen saturated colour (HSL s>.45, .25<l<.8) measured 16.4%; ground and whitespace about 83%.
Whole page: photographs (colour documentary) take the large areas; each service card is one saturated colour (red #F2526A, radius 4rem); the other blocks return to the pale ground.

## (b) Type
- Families: body Noto Sans JP; titles A1 Gothic M (Typesquare), fallback Noto Sans JP; small English Urbanist; logo a geometric sans.
- H1 (hero catch) 72px / line-height 101px (1.41) / weight 700 / tracking 18.7px (0.26em) / no case transform; each character is spaced apart.
- H3 display 42px / 67px / 500 / 0.05em. Body 18px / 32.4px (1.8) / 500 / 0.05em. Navigation 16px / 28.8px / 500 / 0.05em. Small labels (OUR MISSION, SERVICE) 14.2px / 700 / 0.08em, English uppercase.
- English hero subline 10.5px / 18px / Urbanist 500. Large numeral "01" about 88px Urbanist 600 (pink).
- Root size scales with the viewport (1rem about 14.17px at 1440).

## (c) Spacing
- Block padding, top/bottom: hero top 232px; info 90px; guide 77/70px; news 121/112px; CTA band 109/47px; other blocks use min-height 100svh and large empty space.
- Container width 1258-1264px (about 87% of the viewport); service cards inset 43px each side (full bleed minus 3%); column split (text column 52%, image column 48%).
- Gap between title and body about 2 line-heights; one blank line between paragraphs.

## (d) Radius, border, shadow
- Header: white capsule, 38px from the edge, height 74px, radius about 38px, no shadow; CTA button #2D2D2D capsule 74x46px.
- Service card border-radius 4rem (about 57px; 2rem on mobile); inner white translucent text panel 2.5rem; label pill 9999px; marquee pill 1px pale-grey border plus 9999px.
- Photos: full bleed 0; small squares 0; service photos are circular crops; team photos radius about 12px. No shadow, no heavy border. Colour squares have radius about 20% and a fine grain.

## (e) Imagery
- **IMAGERY = photo**: real documentary colour photographs (smiling people, hands, work scenes, natural light, slightly desaturated, high-key); illustration count is zero. Colour pieces are flat geometry plus grain (decoration, not the main image, under 15%).
- First photo after the hero: a close-up of two people's hands stacked, starting at 1:1 (485x485, centred), scaling on scroll to a 1440x900 full bleed (about 1.6:1), no radius; a yellow blurred light sits on it (blur about 60px circle).
- Tilted photo wall: 5-6 photos at 4:3 to 3:4, the whole wall rotated about -8 degrees, about 24px gold diagonal strips between them (#F9BC42 over a dark overlay), a 0.45 black tint behind the type, white type centred.
- Service: left text panel (white 90%) plus a right circle photo (diameter about 546px, about 80% of the right column, sitting low on the right, with type on an arc around the circle and a small bee mascot).
- Team: 16:9 full width (1300x800), radius 12px, people standing in a row, centred.

## (f) Decoration
- Hero: 16 flat colour pieces (squares, quarter-circles, semicircles, triangles, rings, split-colour circles, small squares), 60-384px, arbitrary rotation, grain texture; plus 6 yellow blurred circle lights (blur circles 120-400px, opacity .6).
- SERVICE numbers: a small English label plus a large numeral 01 (pink, same family as the card) plus a pill (#F2526A ground, white type, about 250x46px).
- Marquee: pill labels (height 44px, a small capsule colour-dot on the left), one colour per facility, infinite horizontal loop.
- Ring (#F7B98A, outer diameter about 700px, thickness about 90px) enters the service block from the top right.

## (g) Motion
| Item | Type | duration | delay / stagger | easing | travel |
|---|---|---|---|---|---|
| Hero colour pieces fly in | Web Animations API (element.animate) | 1400ms | stagger = (3000-1400)/(n-1) about 107ms, total 3000ms | cubic-bezier(0.16,1,0.3,1) | From 1.1-2.2 viewport radii outside the centre, along data-angle; scale 1.4-3.0 to 1, rotation +/-240 degrees to 0, opacity 0 to .6 (30%) to 1 |
| Hero background blur release | CSS filter transition | 1000ms (starts after 5000ms x 0.3) | — | ease-out | blur to 0 |
| Hero type / header / scroll hint enter in order | class is-animation | — | 0 / 500 / 1000 / 1000ms | — | — |
| Resident float of the colour pieces | WAAPI infinite loop | 10-17.5s random | random | ease-in-out | translateY -30px plus rotate 4 degrees; translateX 25px plus rotate -3 degrees; (20,-25)px |
| Hand photo zoom | rAF scroll listener, scrub (not GSAP) | scrub | range 0.1vh to head height | linear | width and height from the min size linearly to 100vw x 100vh |
| Photo-wall scale | scroll scrub, --scale 1.5 to 1, --moveY 0 to -(1.5 x vh) | scrub | — | linear | — |
| Service area enter | scroll listener rAF, scrollY+0.5vh > top adds is-inview | — | — | — | — |
| Other data-js-scroll | GSAP ScrollTrigger toggleClass is-active, once:true, start center | — | — | — | — |
| Marquee | CSS infinite horizontal move (JS clones the children) | — | — | linear | — |
- Libraries: GSAP plus ScrollTrigger (local files), Splide, Typesquare font service; no Lenis.
