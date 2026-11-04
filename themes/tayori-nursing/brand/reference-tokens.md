# Reference tokens (main reference: https://www.yamatoen.or.jp/, measured 1440x900, headless Chrome)
Only values and descriptions; no assets copied. Items marked (est.) were read off screenshots, not computed.

## (a) Colour
| Role | Hex | Share of first screen |
|---|---|---|
| Ground (warm light grey) | #F3F1EF | ~62% |
| Accent green (wave foot, CTA, numerals) | #62B850 | ~14% saturated |
| Ink (text, line-art) | #000000 / #313131 | ~3% |
| White card | #FFFFFF | 0% first screen, large on scroll |
| Hairline / dotted rule | #D9D9D9, #D7D3D0 | <1% |
| Doodle pastels (yellow, lilac, peach) | #FDD79A, #DAD0EC, #FAACA8 | <2% |
Saturated share on the first screen is about 14%, which is under our 15% cap.

## (b) Type
- Latin: Helvetica LT Pro (licensed), CJK: Noto Sans JP. Sans only.
- Body 16px / 400 / lh 24px (statements are larger, ~22px lh 2.2 (est.)). Section heading ~28px (est.) weight 500-700, tracking slightly open. Labels 12-13px bold, green.
- Statement lines run in grey and fill to black while scrolling.

## (c) Spacing
- Container ~1200 wide with generous edges; header 100px high; sections 120-200px vertical (est.).
- Two-column sticky layout: left column ~35% (heading + pill tabs), right ~53% white card, gutter ~80px (est.).

## (d) Shape
- White cards radius ~32px top (est.), no shadow. Pill tabs radius 999, 1px grey outline, active tab white filled.
- CTA: green rectangle radius ~6px with a white round arrow disc at the right; menu button white rounded square 64px.

## (e) Imagery
IMAGERY: photo (the large photographs carry the first screen; line-art doodles are small accents).
- Photographs: bright, soft daylight, natural candid care moments, muted colour, high-key.
- Photo masks: organic rounded "pebble" shapes, different sizes, scattered, one bleeding off the left edge and one off the right edge.
- Doodle illustrations: thick black outline, flat pastel fills, round-headed simple figures, one small creature mascot. Sit on photo edges and wave edges at about 130px. Style only is noted; we draw our own different figures.

## (f) Decoration
- Big green wave across the bottom of the first screen (about 150px high at its crest) and again at section feet.
- Card header row: "01" left, English label right, both small green bold.
- Dotted vertical divider between a Japanese keyword with a small green bean mark and a bullet list.

## (g) Motion
- Lenis smooth scroll (found in script list). Statement lines: grey to black, scroll-linked. Hero blobs and doodles: gentle float/fade in on load (est. 0.8-1.2s ease-out). Sticky left column with tab index changing per card.
