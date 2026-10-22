# Reference tokens — Tsuklio (https://www.tsuklio.com/, S5-Style #11708, food subscription) measured 2026-10-23 at 1440×900 via getComputedStyle. Values and descriptions only; no assets copied.

## (a) Colour
| Role | Hex | Share of full page |
|---|---|---|
| Main (brand orange) | #f58220 | ~23% (two full-width bands 1458px + 1380px of 12106px) |
| Sub (leaf green) | #509146 | <2% (eyebrow labels, "side dish" tag) |
| Ground | #ffffff and #f7f5f2 (warm white) | ~70% |
| Text | #222222 | — |
| Accent tints | #fff3e5 (pale orange), #e8eee5 (pale green) | <3% |
First-screen saturated pixels (hero is a dark-neutral video frame): ~0.9%. Menu band screen: ~58% (not allowed for us; we use the accent only on small areas).
Secondary reference (ginger.sakatashop.jp, S5-Style #11995): mustard buy tab #b2911a / #ebc742 (a small pinned tab), photo-dominant, very dark scrim; first screen ~50% saturated so only its small mustard tab is borrowed.

## (b) Type
- Latin display Figtree (sans); JP Tazugane Gothic / Noto Sans JP.
- Eyebrow h2 "Brand Concept": 23.35px / lh 37.4px / 700 / green, no letter-spacing, no uppercase.
- Section title h3 ("Our Menu", "Pick Up"): 48.65px / lh 58.4px / 600 / #f7f5f2 on orange, centered; sub-label 16px under it.
- Statement headline: 52px bold, lh ~1.55 (2 lines).
- Body: 24px, line-height 2em (desktop); mobile ~16px. Card title: 31.1px / 700 / lh 43.6px. Product name in carousel 16px/500.
- Tag text 15.6px / 700. Base 16px / lh 25.6px.

## (c) Spacing
- Section padding top/bottom: 160/100 (menu), 100/100 (orange band), 160/160 (service), 120/80 (white blocks), 60–80 (small blocks).
- Container: 1320px (60px side gutters) for the brand block; 1040px for the menu card (x=200); full-bleed band 1440.
- Column gap: 2-col photo mosaic 614px wide at left (2×267px + 20px gap), text column starts x=715 (≈ 46% / 54%). Row gap inside mosaic 20px.
- Carousel card pitch 347px = 317px card + 30px gap.

## (d) Radius / border / shadow
- Photos 10px; nav 10px; cards 10px; tag 4px; round buttons 60px circle; orange band top corners ~16px (visible, ends rounded).
- Nav border 1px #e1e0e0 on white; menu card border 1px #e1e0e0 on #f7f5f2, padding 20/20/50. Shadows: none anywhere (flat).

## (e) Images
- Hero: full-viewport video background (no overlay text on first fold), floating "next delivery" chip bottom-right (350×84, thumbnail 84px square left, orange small tag, arrow button 44px orange).
- Brand block: 2 columns of photos, staggered; aspect ratios 0.73 (267×364), 1.47 (267×182), 1.03 (267×260), 0.68 (267×390); radius 10; each cell is two stacked layers that cross-swap every 3.5s; placed left ≈ 46% width, text right.
- Menu band: one 1040px card, 4:3-ish collage (big + 2 small stacked).
- Pick-up cards: 317×317 square, radius 10; "+" 60px circle bottom-right inside photo (offset ~16px); category tag top-left (offset 12px).
- Vector veg icons (flat orange/green/peach), 5–7 shapes clustered, ~270×260 at the text column's top-right and a 300×110 row at section footer.

## (f) Decoration
- Tag chips (main course/side dish): 53×28, orange or green fill, off-white text, radius 4.
- Icon clusters in flat vector: orange #f58220, peach #fbc08c-ish, green #509146, grey; no outlines.
- Carousel pagination dots + numbered circle (36px, yellow ring).
- Floating nav pill: fixed, 780×54 centered, 14px left padding, square orange menu button 36px radius 8.

## (g) Motion
- Text blocks `fade-block`: opacity 0→1, y +15px→0, 0.8s, GSAP power2.out (= cubic-bezier(.215,.61,.355,1)), ScrollTrigger start "top 85%" (once).
- Photo layers: yPercent −13→+13 with scale 1.15 fixed, scrub (tied to scroll), ScrollTrigger start "top bottom" end "bottom top" (parallax inside overflow:hidden cell).
- Titles: SplitText per-character reveal (TitleSmall script).
- Brand-block photos: two layers swap every 3.5s (translateY 100%/opacity 0 over ~0.8s), only while ≥10% in view (IntersectionObserver).
- Pick-up carousel: Swiper with fade/slide; hover transforms 0.35–0.4s with overshoot easing (linear() spring, ~1.12 peak).
- Libs: GSAP + ScrollTrigger + SplitText + CustomEase, Swiper (bundled; no jQuery/AOS).
