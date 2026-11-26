# Reference tokens (primary reference: Disk Union online shop home, archived render of 2026-10-08)

Source note: the live site geo-blocks this build machine, so the measurements below were taken with getComputedStyle on the Internet Archive playback of the 2026-10-08 capture (1440 x 900 viewport). Raw numbers: `ref/du-computed.json`. Screens: `ref/du-first.png`, `ref/du-900.png`, `ref/scroll-du-1800.png`, `ref/scroll-du-2700.png` (the archive toolbar at the top is not part of the site).

## (a) Colour
| Role | Hex | Share of first screen |
|---|---|---|
| Ground / page | `#FFFFFF` | ~58 % |
| Body text | `#4B4B4B` (rgb 75 75 75) | text only |
| Bar and arrow tabs | `#000000` | ~9 % (keyword bar 40 px + slide arrow squares) |
| Slide stage (grey strip behind the slide) | `#BFBFBF`-ish grey, dot row | ~12 % |
| Hairlines / section separators | `#BFBFBF` | 1 px |
| Ranking band | `#F4F1E7` | lower page only |
| Accent (notice icon, heart) | red ~`#E60012` (read from screenshot, not measured) | <1 % |
Saturated share of the first screen: under 5 % (only the red inner frame of the notice slide and the neighbouring slide art). Our theme maps this to ink + one muted plum (`#65586A`), so the first screen stays well under 30 %.

## (b) Type
- Family: Noto Sans JP, sans-serif; body 16 / 19.2 px, weight 400, normal tracking.
- Section title: 28 px / 33.6, weight 500, centred, followed by a grey caps English sub-label (~14 px, tracked ~0.08em).
- Page H1 (visually hidden): 35 / 42, weight 500.
- Wide button: 16 px, weight 700, black text.
- Price: bold ~24 px with a 12 px tax suffix; card title bold 14 px; meta 12 px `#8A8A8A`.

## (c) Spacing
- Content container: 1000 px (x 220–1220) for sections; slide stage full-bleed.
- Black keyword bar 40 px high, label cell at x 220, then slash-separated keywords, 14 px white.
- Section rhythm: title block top at +100 px after a 1 px full-width separator; grid of 5 columns, 184 px wide cards, 20 px gap; section height ~1134 px (two card rows) then separator.
- Button: 330 x 55, centred, margin-top 63 px.

## (d) Corners, borders, shadow
- Radius 0 everywhere (cards, button, status box, bar). Borders 1 px black on the wide button and on the "pre-order" status box. No shadows except the floating back-to-top disc (soft, ~0 4px 12px).

## (e) Imagery — IMAGERY: photo
- Product jackets (album sleeves) as 1:1 squares, 184 x 184, radius 0, no mask; one round picture-disc jacket (circle) is simply a different product shot.
- Slide: one wide centre card ~900 x 450 (2:1), neighbours cut by the viewport edge at left and right (~255 px each visible), square black arrow tabs 44 x 44 and square pager dots under the strip.
- Mostly clean flat packshots; no overlap, no clip-path.

## (f) Decoration
- Black keyword bar with bold label "Recommended keywords" and slash-separated links.
- Format icon: 20 px dark grey disc with a record / CD / cassette glyph, left of the format label.
- Outline status box (full card width, 1 px black, 12 px "Pre-order") under each card's text.
- Heart outline in red at the card's lower right; 1 px `#BFBFBF` separators between sections.
- Floating round white search disc with label tab, bottom centre; round back-to-top disc bottom right.

## (g) Motion (observed from DOM and class names; durations not measured)
- Hero strip is a Slick carousel (classes `slick-slider`, `slide-arrow`, `slick-slide`), autoplay, centre mode.
- Promo keyword bar is sticky (`site-promo-sticky`): at scroll 1800 it sits at the top while the page moves (compare `ref/du-first.png` y 157 with `ref/scroll-du-1800.png` y 90).
- No scroll reveal or parallax was found on the lists. Not found = none.
