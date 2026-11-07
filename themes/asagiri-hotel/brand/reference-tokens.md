# Reference tokens — Mampei Hotel (https://www.mampei.co.jp/), measured 2026-11-07 at 1440x900

Measured with getComputedStyle where the page exposes it, and from the screenshots in `ref/` otherwise. Sizes marked (shot) were measured on the screenshots. Text, logos and photos are not copied.

## (a) Colour
| Role | Hex | Share |
|---|---|---|
| Ground (page) | #ECE2DC (rgb 236,226,220), light paper grain | ~55% of home height |
| Panel (pale card) | #F1E8E5 | ~8% |
| Ink / hero dark | #000 to #222 (button text #222) | hero photo ~40% of the first screen, near black |
| Accent (CTA, rules, arrows) | #730D0D to #7A0808 deep oxblood | <3% except one full-bleed notice band (81% saturated, avoided in ours) |
| Moss (photo tone only) | #506040 | inside the hero photo |
First-screen saturated share (S>0.5, V>0.25): 0.7%.
The scroll shot with the oxblood notice band is 81% saturated. That band is the one thing we do not take.

## (b) Type
- Display: "the-seasons" (light high-contrast serif), "Rooms & Suites" / "Restaurants" about 90-100 px, weight 300-400, line-height about 0.95, tracking -0.01em, Latin only.
- Small JP section label sits at the top-right of the Latin title, about 14 px.
- Body: JP serif (visually a mincho; the computed stack lists the-seasons and dnp-shuei-gothic-kin-std for small labels) 16-17 px, line-height about 1.9 (shot: 30 px line pitch).
- UI / nav: sofia-pro 12-16 px, tracking 0.04em (0.48 px at 12 px, 0.64 px at 16 px), no uppercase.
- Hero tagline: serif 56 px light, subline 28 px serif italic-feel.

## (c) Spacing
- Page gutter 30 px; header band 176 px high holding the logo left, nav in two 150 px columns of four links at x 308 and x 467, utilities right.
- Section gap 160-300 px of empty ground (shot: 640-700 px of paper between blocks).
- Text column starts at x 308 (21%) in the intro and at x 624 (43%) beside a Latin title.
- Three-photo strip: x 380 to 1410, three 337 px columns, gap 10 px. The left 26% is empty.

## (d) Corners, borders, shadow
- Photos radius 0. Pale panel radius 0. Menu button is an outlined pill 68x48 with a faint 1 px ring.
- Arrow link: a 48x40 near-white pill holding a thin oxblood arrow, text to its left.
- Card over photo: 6 px oxblood top rule, 85% white translucent panel, no shadow.
- Fixed bottom pair of translucent tiles ("Reservations" / seasonal) centred at the bottom, 160x52 each, 6 px gap.

## (e) Imagery
- IMAGERY = photo. Documentary, low-key interior and detail photography: dark corridor, lattice window with a paper lantern, a waiter among tables, a chef's blurred hands, a dark shop shelf with raking light.
- Hero: one near-black moss-and-stone macro photo, inset 30 px in the page ground, from y 176 to the bottom of the screen, ratio about 1.9:1 and taller than the viewport.
- Rooms strip: three 337x420 photos (0.80 portrait), flush right, captions under each.
- Restaurants block: portrait photo 545x560 (0.97) that rises 68 px above its pale panel and overhangs it on the left (x 95, panel x 30).
- Shop / Wedding: wide photos 1240x700 (1.77) inset 100 px each side of the viewport, with a translucent card (430x280) overlapping the lower left at x 169.
- Intro: an archive photo, slightly tilted (-1.5 deg), on a black ground behind a huge ghost wordmark and year counter.

## (f) Decoration
- Thin geometric line motif (interlocking diamonds), 130 px, oxblood 1 px, floating top-right of the Rooms opener.
- Label with a hairline: "Introduction ——" 12 px, 40 px hairline.
- Vertical Latin text on the right of promotional cards.
- Ghost wordmark in dark grey (#333 on #222) on the intro.

## (g) Motion
- Libraries: GSAP (ScrollTrigger present in the bundle), lottie-web, three.js (WebGL transitions), jQuery 1.11. The code is a minified bundle; I did not extract per-element durations.
- `.js-show-block`: IntersectionObserver (rootMargin 0, threshold 0) starts a 4-point SVG clip-path polygon reveal of a photo with a 0.25 s start delay.
- `.js-show-text`: text reveal on enter (same observer base class).
- `.js-parallax`: photo moves slower than scroll.
- `.js-slide-indicator`: Rooms strip with a position indicator.
- Intro: year counter plus tilted archive photo, with a Skip control.
