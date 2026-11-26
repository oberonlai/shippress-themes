# Reference tokens (measured, values only; no assets, copy or logos reused)

Main reference: https://www.takedahp.or.jp/ (Takeda Hospital Group top page, 1440 x 900, measured with a headless browser, 2026-11-27).
Secondary: https://www.naganonaika.com/ (small internal-medicine clinic top page, structure and nav only).

## (a) Colour
| Role | Hex | Share (first screen / whole page) | Note |
|---|---|---|---|
| Hero photo | blue scrubs / pale blue room, dominant #8699AC, #9BBED5, #245E93 | ~75 % of first screen is photo | saturated pixels 27.5 % (hsv s > .45) because of the surgical blue; ours stays far lower (high-key) |
| Veil (rises over photo on scroll) | #B5CAE9 | 0 % at rest, ~70 % at scroll 700 | soft mask shape, not a flat rect |
| Page ground | #FFF7EE (brand-100), #FBF3E8, #F7ECE1 | ~60 % below the fold | warm cream; we do NOT copy it (ours is cool white #F4F7F7) |
| Text | #6D5D52 (brand-600), #47332F, #3A2110 | body | brown-grey |
| Accent | #8A4940 (brand-700), h2 #974C41 | ~5 % | headings, chips, arrow discs, giant tracking word |
| Cards | #FFFFFF on cream, r 4 px | | |
Naganonaika: ground #FCFEFE / #F1F8F8 / #ECEDED, accent #0089B0 (teal-blue, ~4 %), ink #000; first-screen saturated 1.4 %.
Relationship borrowed: pale quiet ground + one deep accent used only on labels, discs and headings; photo is the only large colour field.

## (b) Type
- EN display: Marcellus (serif), JP text: Morisawa Cezanne (rounded-ish gothic). Body 10 px base (root), p 14-16 px, lh ~1.9; h1 (logo) 20 px; h2 15 px 600 `#974C41`; h3 22 px 500 lh 26.4 px.
- Giant section word `.t-home-heading__en`: clamp(5rem, 2.89rem + 9.01vw, 11rem), 400, lh 1, ls .08em, uppercase, brand-700.
- Label chip `.t-home-heading__sub`: padding .8rem 1.2rem, radius clamp(.6rem, .46rem + .6vw, 1rem), bg brand-700, white, clamp(1rem, .79rem + .9vw, 1.6rem), 600.
- Hero headline "two-line EN, light, large (~72 px) top-left" with a 12 px JP lead and tiny body.

## (c) Spacing
Header 98 px high, 52 px side padding, logo left, one outlined 260 x 32 link right. Hero 100vw x 100vh. Message block text column at x 360-ish of 720 (right half), news cards 4-up inside a 1108 px column starting x 280 (1440). Section gaps ~120-160 px. Facilities rows 4 x ~225 px high with 1 px top rule + 2-digit index.

## (d) Radius, border, shadow
Cards r 4 px, white, no shadow, no border. Chips r 6-10 px. Arrow discs 32 px circle outline. Rules 1 px at 20 % brand colour. Veil edge is a soft SVG mask (wave), not a radius.

## (e) Imagery - IMAGERY: photo
Real documentary photography (clinical, even daylight, shallow-focus foreground blur on the left third of the hero). Ratios: hero 16:10 full-bleed 100vw x 100vh; facility thumbnails 3:2 (22.6 % column, min 8.8rem, r 4); right-edge stacked photos; recruit card 3:2 inset with a small second photo offset top-right. Foreground focus-pull blur band (out-of-focus object at left) is part of the look. Naganonaika: one wide 1130 x 650 photo inside a slanted (parallelogram top edge) frame on a pale ground.

## (f) Decoration
Thin 1 px curved hairline across the hero (x 172-968, slight arc, white 60 %); down-arrow outline pill 32 x 76 at bottom-left (x 30, y 790); 2-digit index "#01" 8 px; dot-and-chip label before the giant word; pale wave-shaped section ground (cream on cream). Naganonaika: diagonal slashes between nav items, round 96 px medallion docked on the photo's lower edge splitting the nav, fixed 136 px round "WEB reservation" disc top-right.

## (g) Motion
- Hero copy wrapper: fade-in `mvLook` 0.8 s cubic-bezier(.25,.46,.45,.94), delayed 1 s after load.
- Scroll > 0: veil `scaleY(0 -> scale*0.75)` where scale = .5 + scrollTop/viewportH * .5 (linear, scroll-driven, jQuery scroll listener); headline wrapper becomes sticky, `translateY(max(0, viewportH - copyH - scrollTop))` then docked top-left, inner copy `scale(1 -> .75)`, origin left center, transition 0.4 s same easing (0.8 s on wrapper).
- "Scroll" pill hides on first scroll.
- Message block mid-point toggles `is-hidebg` on the header toggle (class swap when viewport middle passes section middle).
- Philosophy page: sticky stack; the previous media `scale(max(.8, 1 - (scrollTop - (itemTop - .3vh))/2500))` with dark overlay opacity `1 - (scale - .5) * 1.7`; inner image `scale(1.2) translateY(distance * .1)` (parallax 10 %). Heading swap via is-front / is-hide.
- Hero slider (other pages): Swiper fade, speed 2200 ms, autoplay 6000 ms.
