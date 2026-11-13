# Reference tokens (measured with getComputedStyle, 1440x900, 2026-11-13)

Main reference: https://web.aiu.ac.jp/ (university top page; S5-Style entry 11591). Secondary: https://boat-osaka.com/osaka-river-loop/ (harbour boat service site; S5-Style entry 11084). Screens: `ref/aiu-first.png`, `ref/scroll-aiu-*.png`, `ref/orl-first.png`, `ref/scroll-orl-*.png`.

## (a) Colour (AIU, main)
| Role | Hex | Share of first screen |
|---|---|---|
| Base / page | #F0F0F0 (white cards on it) | ~60% |
| Ink (top bar, headings, footer band) | #101010 / #1D1D1D | ~8% |
| Photo content (mixed, mostly desaturated mosaic) | - | ~25% |
| Accent (brand green: caption bar, pager block, feature labels) | ~#005020 / #1F8A3C | <6% |
| Heading underline / "New" tab | warm taupe ~#8A7456 | <1% |
Saturated-pixel share of the first screen (HSV s>0.35): **14.4%**. Cap for ours: <=15% (row note says never above 30%).
ORL (secondary) is a flat cyan #00B5CD field (~45% saturated) - NOT adopted; only its structure is borrowed.

## (b) Type (AIU)
- Latin display: Playfair Display 400, 42px, tracking 0.8px, uppercase, ink #1D1D1D; first letter of each section word set larger (small-caps feel: "AIU TOPICS", "FEATURE", "NEWS").
- JP body/UI: Noto Sans JP 16px/400, lh 1.34, tracking 1px; nav 14px/500, 13px sub-links with 1.2px tracking.
- Card heading: Noto Sans JP 20px/700, lh 26px, tracking 2px (white on photo).
- ORL: Zen Kaku Gothic New 16px/500, tracking 1.6px, lh 1.7; CTA 16px/700 tracking 0.8px.
Ours: Newsreader (display) + Source Serif 4 (body); CJK Noto Serif TC/JP.

## (c) Spacing
- Page column 1260px wide, left padding 118px at 1440; right rail 180px (not copied: no sidebars).
- Header: 40px dark bar fixed at the top, logo tile 243x70 hanging below it at left.
- Slider window: 1260x~510 directly under the bar (top 40), section top padding 40.
- Section title block: 42px serif, 8px under it a 1px #DDD rule with a 160px taupe underline segment (label "New").
- Card grid: 3 columns, 320px cards, 32px gap, 1024px content width.

## (d) Radius, borders, shadow
- Radius 0 on cards and photos; pill 999px on the "more" button (#111 fill, white text, small arrow); 23px on ORL CTA pill.
- Feature rows: white bar, ~1px #E5E5E5 border, very soft shadow (0 2px 6px rgba(0,0,0,.08)), coloured serif label ("Feature 1") left.
- Caption bar: solid green 480x56 hanging on the window's lower-left edge, white 20px bold text.

## (e) Imagery
**IMAGERY = photo.** AIU uses documentary campus photographs (people, library, forest campus) at 3:2 and 4:3; slider shows a faded mosaic of brochure pages under a centred cover. ORL uses a river photograph in a hard-edged rectangle with flat-colour drawn boat stickers around it (accent only, under half of image positions) - we do not use illustration.
- Window photo: 1260x510 (2.47:1), radius 0, hard edge, caption bar overlapping bottom-left by ~0px (docked), pager block overlapping the bottom-right of the window as a white notch (white 260x56 with arrows, 5 dots, pause button).
- Topic cards: 320 wide, 3:2 photo, tag line + date under.
- ORL window: 596x514 photo flush in a wave-edged colour panel; boat stickers straddle its corners.

## (f) Decoration
- Section word with enlarged initial + 1px rule + short taupe underline.
- Numbered "Feature 1..5" bars: ~790x46, label in serif accent colour, title in 20px.
- Pagination: 5 dots (12px), arrows, square pause button (28px green outline).
- ORL: pill tag "Flight date" (cyan fill, white 14px bold), big date lines 36px, outlined loop icon + "How to enjoy" numbering (outline infinity glyph with 1/2/3).

## (g) Motion
- Main slider: Swiper `fade`, speed 800ms, autoplay delay 5000ms, no pause on hover, pager dots + pause button.
- Section reveals: jQuery + ScrollMagic fade-in (`animate_first_section`, `in_view` class); exact duration not exposed in CSS - treat as ~0.6s opacity + short rise.
- Page load: white overlay fade-in 0.4s ease-in.
- ORL: Swiper fade slider; Fancybox fade `cubic-bezier(.19,1,.22,1)`; Leaflet map popups fade 0.2s linear.
