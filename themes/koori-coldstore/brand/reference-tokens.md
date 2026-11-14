# Reference tokens (measured, main reference: Yokorei home, https://www.yokorei.co.jp/, 1440x900, getComputedStyle + CSS custom properties)
Only values and descriptions. No assets, text or logos are copied.

## (a) Colour
| role | ref hex | area | our mapping |
|---|---|---|---|
| main (band/CTA) | #C51D23 (red), light #E30008 | ~15% of home, 12% of first screen (rounded band under hero, circle arrows) | patina #5A7572 |
| ground | #F7F6F5 (greige) / #FFFFFF | ~60% | #F3F5F4 / #FFFFFF |
| text | #222222 | - | ink #1E2A29 |
| border | #DDDDDD, fill #EDEDED | hairlines | #D5DDDB, #E6ECEA |
| accent (forklift in photo) | orange | only inside photos | amber #D98A2B, <=2%, tiny ticks only |
Measured saturated share of the reference first screen (HSV s>0.5, v>0.24): 17.8% (orange forklift + red band edge). Ours must stay <=15% (target ~6%).

## (b) Type
Noto Sans JP 500, body 17px / lh 28.9px, links 16px, letter-spacing normal. H2 24px, H3 18.7px in nav panels. Section titles are giant lowercase Latin display words (about 96-120px, tight -0.02em, line-height 1) with a small JP sub-label under them (column-reverse title group, gap 8px). Hero catch line: thin serif image lockup 702px wide, bottom-left. Ours: Schibsted Grotesk bold lowercase for giant words, Onest for body.

## (c) Spacing
Header 110px (utility row + main nav row, search field top-right). Hero 690px tall under header. Sections: margin-top 50/60/80/140px; container 1200px (content 1100); business card grid 520px text + 680px photo, card height 440px, gap 40px.

## (d) Radius, border, shadow
Cards radius 8px, white on greige, no heavy shadow; buttons radius 8px; circle arrows 60px red disc with white arrow; hairline row dividers 1px #DDD; alert band grid 310px label + 1fr list.

## (e) Imagery
IMAGERY = photo (documentary interiors: forklift and operator at a dock, empty chilled hall with numbered columns, hands holding a tablet). Ratios: hero 1440x690 (2.09:1) full-bleed no radius; card photos 680x440 (1.55:1) radius 0 flush to the text panel, outer radius 8px; band photo 1440x500 (2.9:1). Slider: crossfade 3 slides. Colour grading: cool green-grey floor, strong orange accents, slightly dark.

## (f) Decoration
Red gradient band (solid red to transparent, 421px tall, 64.3% stop) behind the Business cards; 60px red circle arrows; pager with SVG progress ring (r14.5, stroke 4, white, dash 91.11) + boxed pause button 38x20; italic red English line rotated about -8 deg crossing the catch-line foot; outline-icon (line art) 54px before card titles.

## (g) Motion
Splide fade slider: interval 4000ms, speed 1000ms, no drag, rewind, autoplay with per-dot progress ring. Hover: transition color/background 0.2s ease, transform 0.2s, image scale 0.4s ease. No scroll-triggered effects.
