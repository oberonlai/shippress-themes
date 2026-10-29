# Reference tokens — Pacific Consultants (https://www.pacific.co.jp/, 1440×900, measured with getComputedStyle 2026-10-29)
Values and descriptions only; no assets, copy or logo reused.
## (a) Colour
| Role | Hex | Share (full page) |
|---|---|---|
| Ink / text | #131416 | ≈20% (type, 3px button borders, black 84px left rail) |
| Ground | #FFFFFF and #F5F5F5 (alternating blocks) | ≈55% |
| Primary accent | #004896 (links, numerals "01") | ≈3% |
| Secondary accent | #36939C / #1FB5C4 teal (tag chip, numeral "02") | ≈2% |
| Spot | #F07A73 coral block (one project tile) | ≈2% |
| Hairline | #E7E7E7 | — |
First screen (full-bleed beach video still): desaturated steel blue/white; saturated (S>45%) share ≈0%. Dominant buckets: slate-blue #6080 80, pale #A0C0C0, white #E0E0E0.
## (b) Type
Latin display Poppins 700, 90px/90px, ls −2.25px (section heading "News"); 57.6px/63.4px ls −1.44px caps for numbered section titles ("ABOUT …"), preceded by a 2-digit numeral in Oswald/Poppins coloured accent. Body Noto Sans JP 16px/27.2px (1.7) 400; news title 19.6px/29.3px 700; card title 21.3px/29.9px 700; Oswald 500 16px caps for buttons/labels ("View full movie", "MORE"); wordmark in a high-contrast serif (Didone-like) ~56px. Case: caps for English section titles.
## (c) Spacing
Fixed black rail 84px wide on the left (menu, language, search, vertical wordmark). Content column 1008px (padding-left 85px) for news; cards 376px wide, 3 cols; full-bleed 1355×762 (16:9) images. Section heights 900–2675px; sections each fill ≥1 viewport (snap sections). Heading rows 197px tall, hairline between numbered rows.
## (d) Radius / border / shadow
Radius 0 everywhere (square). Buttons: 3px solid ink border, white fill, 71px tall, label centred + arrow right; hero button 2px white outline. No shadows. Search button 43px circle (the only round element).
## (e) Imagery — **IMAGERY = photo**
Main images: full-bleed film/photography stills and video (hero: a person in silhouette on a glittering sea, cold backlit steel-blue, shallow focus, motion). Mid-page: 16:9 aerial and drone photographs of infrastructure sites at 1355×762, radius 0, full container width; one 3D-rendered glass loop over a faded aerial photo (CG, not counted as main). Mask/clip-path none. Stacking: sections slide over a fixed full-height background (night city photo visible to the right of the 1008px news panel). Photos occupy ≥70% of image slots.
## (f) Decoration
Vertical dot pagination at right edge (6 dots, 8px, active = accent blue, x≈1404, y 394–494); "Scroll" label + 1px×46px line at bottom centre; numbered section index (01, 02…) in accent colour; teal category chip (115×26, text 14px) above news; 1px ink vertical line beside the language switch.
## (g) Motion
Page-level section snapping (jquery.scrollify, 800ms, easing "swing") with `.is-current` class toggling child transitions; Swiper fade slider (speed 1000ms, autoplay 1000ms). CSS transitions: `all 0.8s 0.4s`, `transform 0.8s cubic-bezier(0,.4,.2,1)`, `0.3s ease-out` for hover, `0.2s cubic-bezier(.7,0,1,.3)` for menu. No GSAP / ScrollTrigger / AOS / Lenis (jQuery + scrollify + Swiper only).
