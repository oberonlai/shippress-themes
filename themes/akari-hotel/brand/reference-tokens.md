# Reference tokens (measured with getComputedStyle / CDP, 1440×900, 2026-10-23)
Main reference R1 = TRUNK (HOTEL) CAT STREET, https://wedding.trunk-hotel.com/catstreet (S5-Style entry 12073, hotel/wedding). Secondary R2 = Yuien, https://yuien.life/ (S5-Style entry 11691, stay). Only values and descriptions; no copy, photos, logo taken.
Note: R1 root font is 14.4 px at 1440 (1rem ≈ 1vw), so sizes below are fluid; px given at 1440.

## (a) Colour (R1)
| Role | Hex | Area |
|---|---|---|
| Main (ink ground) | #121212 | 90% of first screen, whole Banquet band (1440×3600) and footer |
| Base 2 (light ground) | #FFFFFF | Ceremony section, header pill button |
| Text on ink | #FFFFFF (body at ~60% = grey) | — |
| Text on white | #121212 | — |
| Rule / accent | #808080 1 px line | decorative only |
| Photo colour | green/wood warm (photos carry all chroma) | — |
First-screen saturated pixels (S>0.4, V>0.2): R1 2.0%; R2 63.8% (royal blue #004090 ≈50%; not borrowed).
R2 (relationships only): outer 25 px light frame #EFF2F4 around everything, radius ~28 px; blue field + white cards. We take the rounded outer frame idea only, not the blue.
## (b) Type (R1)
- Display: adobe-text-pro (Minion-like serif) 400. Section title 164.6 px (11.43vw), line-height 0.8 (131.7), letter-spacing −0.05em (−8.2 px), mixed case ("Ceremony", "Banquet"). Sub-title h3 41.1 px lh 0.8 ls −0.05em. Hero wordmark lines ≈ 90 px caps.
- Label/body Latin: Inter 400–500, 11.3 px lh 1.3, ls normal; label "( 01 )" / "(Beyond The Wedding)" 11–14 px in parentheses.
- JP body: Zen Kaku Gothic New 400 14.4 px lh 1.7 (24.5). Phone number: Shippori Mincho 32.9 px ls −0.05em.
- Nav (header): Inter 500 11 px lh 1.6, white on ink, 5 columns of stacked links, gap ≈118 px between columns.
- Ours: Cormorant Garamond display ~0.8 line-height large words ≥4.25rem (use 8–10rem clamp for section words), Nunito Sans body.
## (c) Spacing
- Ceremony section column 720 px wide centred (x 360–1080), text block 229 px wide, text bottom margin 25.7 px; image column 823×900 (Banquet), flush to right edge (x 616→1439).
- Banquet band: ink, 3600 px tall holding stacked sticky images (position sticky, 823×900 each) with centred title/text column on the left (≈ 616 px).
- Hero: logo centred y 93, big title y 220–390, small photo 174×213 centred y 439, nav row at y 560.
- Anchor index fixed at right: 100×181 at x 1302, 8 rows "01 Ceremony…" Inter 11 px.
## (d) Radius / border / shadow
- Pill button 134×33, radius 1440 px (full), white fill, ink text, padding 8/0/7. No shadows. Images radius 0. Hairline 1 px #808080.
- R2: outer frame radius ~28 px; cards radius ~28 px; no shadow except info card soft white.
## (e) Images (R1)
- Hero: full-bleed portrait photo then ink wordmark screen with small centred photo 174×213 (≈4:5).
- Ceremony: big landscape photo (≈ 16:10, clip-path inset 1.5% → 0 on scroll) and a portrait photo (≈ 3:4) overlapped by the giant title word (title text over image edge, white text on image).
- Banquet: sticky 823×900 (≈ 0.91:1, almost square) images stacked at right; earlier images scale 0.7 + fade out as next arrives.
- Images inside `.c-parallax-image-wrapper` have inner image moving yPercent 0→16.
## (f) Decoration
- "( 01 )" numbering: Inter 11 px white/ink, beside titles; animated width line (1 px #808080, full container width) above each section; fixed right-side index list; pill "Bridal Fair" CTA top-right in header (white fill); hamburger icon 3 thin lines top-right.
## (g) Motion (R1, GSAP ScrollTrigger + Lenis)
| Effect | Trigger | Values |
|---|---|---|
| Title per-character rise | ScrollTrigger start "top 94%" | each char from y 150%, x 60% → 0; ease circ.out; duration 0.4 s; stagger 0.05 s from start |
| Parallax image | scrub, start "top bottom" end "bottom top-=50%" | inner image yPercent 0→16, ease none |
| Wide photo clip | scrub, start "top bottom" end "bottom bottom" | clip-path inset(0 1.5% 0 1.5%) → inset(0) |
| Numbering | start "top 85%" | y 100%→0, ease power2.out, 1.2 s |
| Line grow | start "top bottom" | width 0→100%, 1 s, power1.inOut |
| Banquet stack | scrub, trigger each image, start "top top" end "+=200%" | scale 1→0.7, opacity 1→0 on previous image |
| Hero (first view) | on load | y 0 from offset, opacity, 1.2 s power2.out, bar width 1 s power2.inOut, text delay 0.3 s |
| Footer group | scrub | y −20% → 0, opacity 0→1 |
| Smooth scroll | Lenis | global |
R2 (Yuien, CSS/WAAPI): cards slide in translateX(−100%) 600 ms cubic-bezier(.58,.21,.41,.96); big text marquee "ONJUKU YUIEN" linear infinite; carousel 8 s step.
