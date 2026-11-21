# Reference tokens (measured with getComputedStyle, 1440x900, 2026-11-21)

Primary reference: https://soneva.com/soneva-fushi/ (island resort, stay page). Secondary: https://www.aman.com/resorts/amanpulo (framed inset window, two-tier header). Screenshots in `ref/`.
Only values and descriptions are recorded; no assets, copy or logos are reused.

## (a) Colour (primary, Soneva)
| Role | Hex | Share of page |
|---|---|---|
| Ground (pale warm stone) | #F4F1E9 | ~55% |
| Ink (near-black brown) | #19100D | text, 12% |
| Dark band / footer | #19100D | ~15% (pillars band, footer) |
| Accent (rust, buttons and promo ribbon only) | #6D2E1D | <3% |
| Nav link ink (deep teal-black) | #012531 | text |
| Body text | rgba(25,16,13,.5) | secondary text |
Photography supplies all other colour (film-graded greens, aerial turquoise, dusk sky). First-screen saturated share (HSV s>0.45): Soneva 14.1% (green canopy photo), Aman 1.2% (pale sky/sea). Both stay under the 30% limit; ours targets <= 12%.
Secondary (Aman): ground #F3EEE7, ink #313131, dark button #313131, footer white #FFFFFF, hairlines 1px #D9D4CC.

## (b) Type
- Soneva: body "Scto Grotesk A" sans 16px / 19.2px, ls -0.16px, weight 400, colour ink at 50%. Display "Moulin" light serif: 40px/44px ls -1.2px weight 300 (h2), 32px/35.2px ls -0.96px (statement paragraph, centred, ~1140px measure), 24px/26.4px (card titles). Nav 14-16px, no caps. Button label 14px ls -0.28px.
- Aman: serif Lyon, h1 31px/45px ls .5px, tracked caps eyebrow 10px ls 2px uppercase, nav 14px ls .8px, card title 19.6px.
- Ours (sans, Manrope / Figtree): display 300 weight, tight negative tracking like Soneva, but sans.

## (c) Spacing
- Soneva: announcement ribbon 26px; header 159px (logo row 74px + centred link row at y 148); on scroll the ribbon and top padding collapse and the header becomes 133px sticky. Section padding 80px (cards) / 120px top + 80px bottom (feature rows). Card row: three 446px cards, 8px gap, 44px side margin. Statement block: centred, max ~1140px. Booking bar: 684px wide, 62px high, centred, docked to the hero's bottom edge.
- Aman: header 88px + resort link row 48px; photo window inset 25px left/right, top 224px (88 + 48 + 88 white space), 1391px wide, height ~790px; section gutter 24.5px; two-up cards 676px / 677px with 38px gap.

## (d) Radius, borders, shadows
- Soneva: radius 2px on button, 0 on images, no shadow, no borders. Booking bar: no radius, 1px translucent vertical divider between fields, 55px square cream search tile at the right end.
- Aman: radius 0 everywhere, 1px hairlines under header rows, dark rectangular Reserve button 140x42, `Discover more` as text with 1px underline.

## (e) Imagery
IMAGERY = photo. Film-graded documentary stills: warm shadows, grain, shallow depth, people candid and half-turned (a woman's face in dappled light, a man carrying a wooden bowl of leaves, two people cycling a sand path). Aerial villa roofs and turquoise water as flat top-down frames. Ratios: Soneva hero full-bleed under the header, cards 446x~560 (0.8:1), side photos 240x336 (0.71:1) and 498x~600; Aman: 0.76:1 tall / 1.59:1 wide / 1:1 mixed row at 260px, two-up 676x655, hero window 1391x790. Radius 0, no masks, no overlap except the booking bar docked on the hero foot.

## (f) Decoration
- Dot-separated feature line under cards ("Beach access  .  Jungle setting"), 13px, ink at 70%.
- Rust ribbon with one bold lead-in and an underlined "Learn more".
- Active list: five 40px display words, the current one at 100% ink, the rest at ~45% grey, flanked by a small portrait left (240x336) and a large photo right (498x~600).
- Aman: tracked eyebrow label + serif title + one-line text + underlined link per card.

## (g) Motion
- Soneva: Lenis smooth scroll (+ lenis-snap, proximity, 1.2s) ; cards rise 20% with opacity 0->1, 1.25s cubic-bezier(.33,1,.45,1), stagger 240ms (CSS animation started by a class once the block is 25% in view, block-inview.js); header slides in .9s cubic-bezier(.33,1,.45,1); intro statement words unfade via IntersectionObserver (rootMargin -40px, threshold .1, class is-visible); list tabs swap their figure with opacity .4s ease, tab colour .2s; hero is a looping muted film.
- Aman: header swaps to a compact bar after the first screen (class toggle); gallery strip scrolls horizontally; no reveal animation observed.
