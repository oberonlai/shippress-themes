# Reference tokens (primary: irep.inc, Japanese-language home, measured 2026-11-08 at 1440x900 with getComputedStyle)
Only values and descriptions. No assets, copy or logo are reused.

## (a) Colour
| Role | Hex (reference) | Share on first screen / page | Our mapping (dove family, desaturated) |
|---|---|---|---|
| Ink / text | #0C2336 (deep navy) | body text on white | #2B2530 (dove ink) |
| Primary (hero ground) | #25535D / #55717D (teal-grey, photo + gradient) | about 45% of first screen | #655A64 dove, deepened to #3E3640 under the photo |
| Secondary accent | #58B193 (button green; h3) | CTA pill only, about 1% | #8C8397 pale heather (CTA stays one colour, #E9E4EA on ink) |
| Warm accent | #F0A040 (amber, end of gradient) | gradient tail, about 6% | #B79A7A muted camel, grain-warm, 4% max |
| Ground | #FFFFFF | 55% of page below hero | #F4F2F4 (cool paper white, not cream) |
| Photo red (bridge) | #732016 | photo only | none: our photos stay grey-mauve |
Reference first-screen saturated share measured on the screenshot (S>0.45, V>0.3): 29.5% (above our limit). Ours must stay at or below 15%: film-grain, desaturated photography under a #3E3640 scrim, no saturated gradient.

## (b) Type
- Display: Unbounded 700, 48px section titles (lh 60px), hero lines about 120px (lh 119px), letter-spacing -0.36px, mixed case. Ours: Fraunces 300-500 (serif direction), hero >= 5.5rem.
- Body and nav: custom JP sans 16px / 24px, weight 400 body, 700 buttons, ls -0.36px. Ours: Newsreader 1rem / 1.75 (1.85 for CJK).
- Nav items 16px, 700-ish white on photo; language switch is a two-segment pill (EN | JA), 164x40 radius 8.

## (c) Spacing
- Header 88px, padding 24 24 24 39; logo left, nav right, pill CTA 177x40 at the far right.
- Hero text left edge x 49-120; container about 1200 (x 120-1320); sections: service 1550px tall, work 435, news 294, map footer 1032.
- About section starts 900px (= one viewport) below top because the hero is pinned and the content slides over it.

## (d) Radius, borders, shadows
- CTA pill radius 50px (full pill), height 40. Content sheet: top corners about 40px radius where it rides over the hero seam (screenshot scroll-2200). Photo cards: radius about 8px, rotated about -11deg. White partner cards: radius 6px, soft shadow 0 4px 16px rgba(0,0,0,.08), tiny random rotation (about +-1.5deg).
- Borders: none. Hairlines: none on the first screens.

## (e) Imagery — IMAGERY: photo
- Primary image type: documentary / stock-style photographs (bridge hero; city and people tiles in the slanted column). Photographic, saturated teal-orange grade. Style: wide landscape hero, full bleed; portrait-ish tiles 3:4 in the slanted column; inline capsule thumbnails 142x80 (16:9, radius 20) inside the marquee line.
- Hero photo: full-bleed 1440x900, crossfade/slide slideshow, slow zoom 1.10 -> 1.00 over the slide.
- Slanted column (about section): 3 columns of tall cards (about 190x260 to 230x300), whole group rotated about -11deg, bleeding off the right edge, columns offset vertically by about 90px; they start at x about 1030 and run past x 1440.
- Marquee: headline text with 16:9 rounded-20 photo capsules inline between phrases, white 64px type on a gradient band.

## (f) Decoration
- Wave glyph (three wavy lines, teal / amber / navy) 49x40 beside the sub-line; used as the small brand ornament.
- Gradient: linear 90deg #25535D -> #B6B38F -> #F0A040 on the band and gradient headline words ("solutions" fades navy -> teal -> amber).
- Cards row: 9 white credential cards 160x255 in a 5 + 4 stagger, second row indented 8px.
- Soft pale mint arcs (quarter circles, #E3F1EE) in the lower-left of the white sheet.

## (g) Motion
- Hero headline: each line is split into word spans; words rise translateY(50px) -> 0 with opacity 0 -> 1, staggered per word (measured start state at scroll 0: translateY 50, opacity 0, then in at load). Sub-line icon and words rise 30px.
- Hero parallax: title wrapper translates upward at about 0.37 of the scroll speed (-219px at scrollY 600) while the sheet scrolls over the pinned photo.
- Hero slide zoom: scale 1.10 -> 1.00 on each slide, slides changing every few seconds (Swiper, fade).
- Reveal: h2 and blocks use opacity .4s and transform .6s with cubic-bezier(0.16, 1, 0.3, 1), translateY 30px -> 0, triggered by IntersectionObserver when entering the viewport.
- Marquee: CSS keyframes scroll-horizontal 24s linear infinite (service text), 16s linear infinite (contact band), scroll-message 28s linear infinite (message slide).
- Header: hides on scroll down and returns on scroll up, transform .4s cubic-bezier(0.25, 1, 0.5, 1); turns white-on-light (class is-white) after the hero.
- Buttons: transform .45s cubic-bezier(0.7, 0, 0.84, 0).
