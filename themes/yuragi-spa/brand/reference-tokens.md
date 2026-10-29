# Reference tokens — main reference https://atami-sanga.jp/ (Studio.design build, 1 room-only seaside inn)
NOTE: headless Chrome hung in this lane (no screenshot/getComputedStyle possible). Values below come from the served HTML + inline CSS only (curl); items marked (est.) are inferred, not measured.

(a) Colour (CSS literals): ink #1A1A1A / #333333, mid grey #616161, panels #F2F2F2 / #F5F5F5 / #EEEEEE, one UI blue #007CFF (form/UI only). Page = pale grey ground + full-bleed photographs; no saturated brand colour. Area (est.): photo 60%, pale grey 30%, ink text 10%.
(b) Type: two custom families (Studio variables), body 16px, 15/14px captions, 18–19px lead, 24/32/40px headings (CSS counts); JP mincho-style headings, Latin italic sublines "A place where time simply lingers"; wide letter-spacing on labels (est.). 
(c) Spacing: generous vertical padding between blocks, single centred column for copy (est.).
(d) Radius 0–2px (6px on a few UI parts); no shadows seen in CSS; 1px/2px hairlines.
(e) IMAGERY = photo (sea view, rooms, dishes). Ratios in source: 462×510 (≈0.9) room cards, 216×234 small cards, one 1448×386 (3.75:1) letterbox band. Photos square-cornered, full-bleed.
(f) Decoration: counters "(01) (02) (03)" in hero, lenticular brackets [ a section name in Japanese ] as section labels with an English subline, tiny 72×4 svg dash marks, "( Scroll )" cue, repeating room-name row (looped).
(g) Motion: CSS scroll-driven animations `animation-timeline: view()` with `entry 0% exit 100%` ranges, linear timing function with easing baked into keyframes; cubic-bezier(0.07,0.36,0.66,0.97) most used, also (0.4,0.4,0,1), (0.09,0.36,0.63,1), (0.05,0.42,0.41,0.99), (0.14,0.62,0.48,0.99). Duration not time-based (scroll-linked). Polyfill fallback for non-supporting browsers.
