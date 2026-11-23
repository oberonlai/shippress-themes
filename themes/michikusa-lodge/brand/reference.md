# Reference (draft; product mapping column filled at build time)
Main reference: https://zenandbed.com/ (S5-Style, category Hotel / Ryokan). Secondary: https://soranohotel.com/ (same category).
Rejected: Picnic Motel (most on-topic, but flat saturated pink ground, far over the 30% quiet limit).

## Why these two
- Main: a quiet overnight stay told in dark, grainy photographs; one tiny yellow disc is the only saturated colour; text in short wide-tracked lines; header hidden on the hero and sliding in after it.
- Secondary: fixed reservation tab bottom-right (about 260x55) over a 1px rule with "Scroll down"; GSAP ScrollTrigger scrub on the key visual (content moves up and fades as the next section arrives), Lenis smooth scroll; reveal start "top 85%", ease power3.out / expo.out, duration 1-2s.

## Signature candidates (our versions; none reuse a listed construction)
1. Double exposure that resolves: two film photographs laid over each other in a framed window (key on the counter / car under the canopy) settle into one frame as the page loads. (Zen & Bed hero double exposure.)
2. Double-hairline heading band: a 4px band bounded by two 1px rules runs full width behind each centred section heading. (Zen & Bed `.headline:before`.)
3. Line drawing of the lodge elevation (canopy, sign pole, car) in one thin amber stroke, drawn in on scroll, beside a small circular photo. (Zen & Bed temple line art + round photo.)
4. Header that is absent on the hero and slides down after it, carrying the round amber "Book tonight" disc. (Zen & Bed header + reserve disc; Sorano fixed reservation tab as support.)

## Scroll effects (see stage-a.md table)
Zen & Bed: ScrollMagic class toggle, once, 1s, scale 1.05->1 + fade; 10px diagonal drift staggered .2s steps; GSAP scrollTo anchor 1s Power2.easeInOut; Slick gallery 700ms.
Sorano: ScrollTrigger scrub on KV (start top top, end bottom top), reveal start top 85%, Lenis; wordmark letters rise.

## Screenshots
ref/zb-first.png, ref/scroll-zb-before-0.png, ref/scroll-zb-after-1000.png, ref/scroll-zb-after-2200.png, ref/sorano-first.png.

## Product mapping (to fill at build time)
| Ref element | Ours | Where |
|---|---|---|
| | | |
