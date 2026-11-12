# Reference tokens — measured on the primary reference (https://www.mhi.com/, 1440×900, headless Chrome, getComputedStyle + pixel sampling)

Pages measured: home (`ref/mhi-home-0.png`), aftermarket-service page (`ref/mhi-mro-0.png`, the technicians-in-a-hangar page), defense-aircraft page (`ref/mhi-aero-0.png`). Only values and descriptions are recorded; no assets copied.

## (a) Colour (area share on the first screen)
| Role | Hex | Share |
|---|---|---|
| Ground (page) | #FFFFFF | ~70% |
| Text / headings | #000000 | ~5% |
| Footer / quiet band | #E5E5E5 | below the fold, full width |
| Slate band (home "Spectra" strip) | #3C5D69 → #476672 | ~14% of home first screen |
| Pale wash behind the slate band | #E6ECEE | ~8% |
| Accent (chevron arrows, active nav, link underline) | #E31F26 | < 0.5% |
Saturated share of first screen (S>0.5, V>0.3): home 2.6%, hangar page 3.7%, aircraft page 6.5% — all well under 15%.

## (b) Type
- Family: DIN Next LT (regular + "mid" weight), Arial fallback; all uppercase for headings and nav.
- body 17.28px / 25.92px (1.5), weight 400, tracking normal, colour #000.
- h1 38px / 41.8px, uppercase, padding-bottom 18px; h2 32.4px / 35.64px; nav 14px uppercase; breadcrumb ~14px.
- Display word on home hero ("SPECTRA" style wordmark) ~ 88px, bold, black on pale.
- Sub-label "[ AVIATION ]" ~16px, slate-grey, tracked, followed by a 40×2px black rule.
## (c) Spacing
- Container 1296px (72px side margins at 1440); header 120px; breadcrumb row 38px with 1px #E5E5E5 hairline.
- Main: left sidebar 360px + content 936px; content photo 936×400 (2.34:1); section padding ~100px top, footer padding 100px 0 36px; footer 5 columns at 268px pitch.
## (d) Radius, borders, shadow
- Radius 0 on photos and cards; pills only for hashtag tags (999px, 1px grey border). 1px hairlines #E5E5E5. No shadows except tiny drop on the tilted tile field.
## (e) Imagery
- IMAGERY = photo. Documentary colour photographs: technicians working at an airframe in a wide steel-roofed hangar, aircraft tail fin with colour livery in the back, shallow depth of field. Aftermarket photo: 936×400 (2.34:1), the sharp subject occupies the centre 64% (600px) and the remaining left/right 18% bands on each side are a blurred stretched extension of the same frame. Mountain/air-to-air photos on the defence page at 2.34:1. Home "Spectra" hero: ~14 small photos laid on an isometric (rotateX/rotateZ) plane, each tile with a white pill tag rotated with the plane.
## (f) Decoration
- Short black rule 40×2px under H1; bracketed slate sub-label; red chevron `›` after bullet links (• Label ›), two columns; breadcrumb row; black square back-to-top 48×48 bottom-right; 5-column grey sitemap footer.
## (g) Motion
- Libraries in page source: jquery.waypoints (in-view triggers), simpleParallax (image parallax), slick carousel (home slider), easing plugin. No visible reveal on the plain product pages; parallax/in-view on the Spectra/story templates.
