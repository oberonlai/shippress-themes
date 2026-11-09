# Reference tokens — primary reference https://www.asante.co.jp/ (measured 2026-11-09, 1440×900, Chrome)

IMAGERY: photo. The first screen is a dark documentary photograph (a technician in a green suit with a headlamp and respirator, crouched under floor joists, a termite-damaged post splitting the frame); testimonial and column tiles are photos. One pale watercolour-style house cutaway illustration appears in the Service block only (less than a third of image positions), so the site counts as photo-led. Style: low-key, warm shadows, single hard light source (headlamp), floating dust, wood grain.

## (a) Colour
| Role | Hex | Share |
|---|---|---|
| Ground | #FFFFFF | ~36% of the first screen (header + skyline foot + arc) |
| Dark photo field | ~#1A120C (brown-black) | ~43% |
| Brand green (headings, nav, buttons) | #4CAC5B | text and pills only, <3% of area |
| Pale green wash (section grounds, with arc edges) | ~#E8F4E4 | large bands below the KV |
| Grey panel (testimonials) | #EBEBEB / #EEE | one panel |
| Text | #000 | body |
| Hot accents (floating bar only) | pink ~#E8527A, orange ~#F26B3A, charcoal ~#555 | fixed bar |
Saturated share of the first screen (S>0.45, V>0.35): 7.4% (the green suit). Never above 15%.

## (b) Type
Body 14px / 21px (1.5), weight 400, Noto Sans JP, black. Nav 20px (about 1.25rem) green, tracking normal. Section title: Latin 64px, light, tracking about 0.08em, green, centred, with 1.1–1.2rem JP sub-title and a 96px × 1px rule under it. Modal titles 32px / 48px, tracking 3.2px. KV copy: about 56px, light weight, white, tracking about 0.18em, two lines, top-left over the photo.

## (c) Spacing
Header 100px high, white, logo left at x 120, utility links on a first row, nav on a second row. KV 680px high directly under the header, full bleed. Container 1200px (testimonial panel 1200 wide). Section vertical padding about 120px, title-to-content about 100px.

## (d) Corners, borders, shadow
Pills radius 999 (green service labels, 100px+ high ones are 50px radius). Testimonial panel: #EBEBEB, inner 1px #CCC frame inset 20px. Arc edges: elliptical bowl 70–90px deep top and bottom of the green wash sections. No shadows except the floating bar.

## (e) Images
- KV: full bleed 1440×680 (2.1:1), photo, slow scale 1 → 1.08 on the active slide (3s ease-in-out), cross-fade between slides.
- Bottom of the KV: white skyline silhouette (office blocks, towers, houses) as a cut-out foot, then a wide shallow arc into the pale wash.
- Special content slider: tiles 410×220 (about 1.87:1), 40px gaps, endless linear marquee.
- Testimonials: portrait crop 120×155 left + text right, two slides visible, centre slide emphasised, green chevron arrows, grey panel.
- Service block: house cutaway illustration 1000×760 with six green pill hotspots (+ icon) placed on it.

## (f) Decoration
96×1px grey-green rule under every section title; arrow-notched dark call-to-action tab (pentagon with point at right, white 3px inner outline) at the left of the floating bar; round-cornered pink and orange contact tiles with a small caption row ("\\ text //" slashes); green "+" in a circle on the pills; back-to-top square at the right edge (70×70, translucent grey with a thin chevron).

## (g) Motion
- KV: slick fade, speed 2000ms, interval 3500ms, linear; active image scale 1.08 over 3s ease-in-out.
- Special content and "other" strips: Swiper loop, autoplay delay 0, speed 3500 (continuous linear marquee), hover freezes.
- Testimonials: slick centre mode, 2 slides, speed 2000ms, easeOutQuart, autoplay.
- Floating bar: jQuery fadeIn 500ms once scrollTop > 500, fadeOut above.
- Anchor scroll: 800ms. No scroll-reveal on sections.
