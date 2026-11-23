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

## Product mapping (filled from design-spec.md)
| Ref element | Ours | Where |
|---|---|---|
| Zen & Bed full-bleed dark double-exposure hero (hands with bowl + roof in mist) | T1: inset framed-window double exposure, car under the canopy light (P02) + clerk's hand placing a key (P01), screen blend .72, masked left | Home hero; every inner page title window (page-specific pairs) |
| Three wide-tracked lines lower right, rising in at 1.3 / 1.5 / 1.7 s | H1 "A quiet room / off the trunk road." + side paragraph below the window, same delays | Home first screen (below-photo) |
| 60 px round yellow reserve disc #E8DA39 | 60 px amber #D8B04A "Book tonight" disc; fixed at >=1400 px | Header, every page |
| Vertical SCROLL label + 1 px line | Vertical "Night desk open until 02:00" + 1 px x 96 px line (desktop only) | Home window right margin |
| Transparent header on the photo | Overlay header inside the framed window, white with text-shadow | Every page |
| Sorano fixed reservation tab over a 1 px rule | Booking bar (5 text cells + button, no inputs) docked across the window foot | Home first screen; Book tonight page |
| ZEN&BED centred logo + stacked centred lead (zoom reveal 1.05 -> 1) | Centred "MICHIKUSA LODGE" wordmark + one-paragraph concept, sp-reveal--zoom | Home block 2; inner lead paragraphs |
| `.headline:before` double hairline band | T2: 6 px band of two 1 px #DAD7D2 rules behind centred caps headings | All section headings, home and inner |
| 4:3 photo + stacked lines + 220 px circle photo + pale-yellow line drawing | T3: same grid; own amber single-stroke drawings (lodge, door + car, counter, road sign), wipe reveal | Home arrival hour; Rooms, Stay, Late arrivals, The road, About, Road notes |
| Lines drifting 10 px diagonal, .2 s steps | sp-reveal--up + sp-stagger, 10 px, 1 s, steps overridden to .2 s | Log lines, inclusions, people, stories |
| Sorano KV scrub | sp-parallax two layers (6 % / 10 %) in the window; P08 breakfast band 10 % | Home hero, block 6, inner title windows |
| Slick 1.5:1 gallery with arrows and dots | CSS scroll-snap 1.5:1 road strip with round arrows + dot rule | Home block 7; The road |
| 40 px black back-to-top disc | 40 px ink back-to-top disc (>=1024 px) | Every page |
