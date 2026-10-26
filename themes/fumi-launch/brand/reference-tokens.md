# Reference tokens (measured, https://yoichi-shumputei.com/, 1440×900, getComputedStyle + pixel count)
Only values and descriptions; no assets, copy or logo taken. Built with Webflow; smooth scroll via luxy.js, carousel via Swiper.
## (a) Colour (first screen pixel share)
| role | hex | share |
|---|---|---|
| base / field | #003F8B (deep ultramarine) | ~73% |
| text / big display | #FFFFED (ivory) | ~8% (display type) |
| body text on field | #FFFFFF | <1% |
| accent | vermilion orange ≈ #F26B3A (roman title, round stamp) | ~1.6% |
| photo | slate kimono, olive-lime cushion | ~15% |
| image section base | #000000 (stage photo band) | full-bleed band |
Saturated (s>.5) share of first screen ≈ 83% (that is the reference; ours is mapped to a quiet field, see reference.md).
## (b) Type
- Display name: heavy brush-gothic (custom image/webfont), ≈ 300px tall glyphs, ivory #FFFFED, overlaps the figure.
- Roman name over it: Arial/Syne wide, orange, ~60px, letter-spacing wide.
- Occupation label: heavy brush type, orange, ~90px.
- Section statement: Shippori Antique 70px / 400 / lh 84.7px (1.21) / ls 4.2px (0.06em), white, 2 lines.
- Small label ("Profile", "History", "view more"): Syne 12px / 700 / lh 18px / ls 0.6px (0.05em) ivory; en body Shippori Antique 14px / 700 / lh 16.8px / ls 0.8px.
- Body (profile): Shippori Antique 14px / 400 / lh 28px (2.0) / ls 0.84px (0.06em) white.
- Hero caption: Syne 9px / 500 / lh 13.5px / ls 0.45px, ivory, bottom-left (x≈127, y≈820).
## (c) Spacing
- Left rail 93px wide with 1px ivory hairline on its right edge; vertical logo at top (x 28–62), hamburger centred at y≈458.
- Content frame: 1px vertical hairlines at x≈170 and x≈1369 (framed column, ≈1200px wide); second frame x 267–1266 for statement section (≈1000px).
- Section heights: hero 900, info 1132, intro 1165, profile 348, monthly 440, image 900, archive 538, projects 336–432, online store 443, footer 867.
- Profile block padding 48 88 48 48; info title padding 40 20 10.
## (d) Radius / border / shadow
- Radius 0 everywhere except the round rotating-text stamp (circle ≈ 160px, bottom-right at x 1195–1410, y 645–860). Borders: 1px ivory hairlines (frame lines, rail). Shadow: none; the figure has a soft darker ground shadow under the cushion.
## (e) Imagery
IMAGERY = photo (hero seated portrait cut out onto the colour field, black-stage performance photo, archive thumbs). Not illustration.
- Hero portrait: tall (≈ 0.75:1 visible), figure cut-out over flat colour field, x≈520–1000 (≈33% width), overlapped by the giant name at ≈ 90% width, name partly behind figure's head line (title in front, figure mid layer).
- Stage band: full-bleed width 1346px, height 490 visible then reveals the field; cinematic low-key photo, black base, mic right third; no radius, no mask.
- Archive/project thumbs: 248–482 × 64 rows (wide label strips), square-corner.
## (f) Decoration
- Round rotating-text stamp "booking" with brush-type centre and orange arrow, 215px, bottom-right of hero.
- Vertical hairline frame lines, 1px; tiny dot ticks at frame corners (≈1px) at section bottoms.
- Tiny hero caption bottom-left, vertical logo in rail.
## (g) Motion
- On-load: page transition (lottie wrapper) then hero in.
- Webflow IX2 scroll-into-view: text, labels, buttons start opacity 0 + scale(.9) and settle to 1/scale(1) when the section enters (≈ 20–30% from the viewport bottom); initial transform 0.9 scale (not translate). Image rise: icons start translateY(64px).
- luxy.js smooth-scroll wrapper (inertia, lerp ≈ 0.1) gives the heavy floaty scroll.
- Duration/easing: IX2 tweens read at ≈ 0.6–0.8s ease-out (inferred, observed settled within 1.8s).
