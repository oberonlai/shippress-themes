# Reference tokens (measured with getComputedStyle, 1440x900, 2026-11-16)

Main reference: https://nosson.jp/ (a village community organisation's front page laid out as a newspaper).
Secondary reference: https://hitomachi.iwamiginzan.jp/ (a local workers' cooperative; ground, badge and motion only).
Screens: `ref/nosson-first.png`, `ref/nosson-full.png`, `ref/scroll-nosson-900.png`, `-1800.png`, `-2700.png`; `ref/hitomachi-first.png`, `ref/hitomachi-full.png`, `ref/scroll-hitomachi-*.png`.

## (a) Colour (nosson first screen, 1440x900 sample)
| Role | Hex | Share |
|---|---|---|
| Ground (paper) | #FBFAF8 (plus near-identical #FFFFF8/#FCFBF8) | ~72% |
| Main (ink, all text, frame and rules) | #1A3AEB (electric blue; thin strokes and type) | ~14% |
| Accent (headline stickers, date-badge fill) | #E83CF0 (magenta) | ~3% |
| Photo area | natural | ~11% |
Saturated share of the first screen (HSV s>0.5, v>0.3): **9.5%** (cap 15%, row cap 30%).
Hitomachi: ground #FFEFE1 peach / #D9D9CA stone, ink #005D48 deep green, no extra accent; saturated share <8%.

Our mapping (russet row, quiet): ground #FBFAF8, ink #2E2119, main/frame #A86F4C (russet), second #3F5B45 (leaf), point #D9553A (≤1%).

## (b) Type
- Latin/JP: YakuHanJP + a gothic (dnp-shuei-gothic-gin-std), body 12px / weight 600 / lh 21.6px (1.8), letter-spacing normal, colour = ink blue, no uppercase transform except tiny Latin labels (10.5px, 600, lh 1.4, "WEATHER", "TEMPERATURE").
- Lead headline: 33.7px / 600 / lh 50.6px (1.5), sentence case.
- Giant date numeral: ~150px tall display figure (custom), in ink blue; month/year in tiny stadium pills (12px).
- Secondary: Zen Maru Gothic 24-32px 400, deep green.

## (c) Spacing
- Page: 2px frame inset 16px from the viewport edge on all sides; masthead strip 46px high with a 1px rule under it.
- Three columns inside the frame, split by 1px vertical rules: left x26-456 (430), centre x456-1106 (650), right x1106-1424 (318). Column padding 10-24px.
- Rows in the feed: 121x74 thumbnails right-aligned in the row, rows separated by dotted rules (2px dots, 6px pitch), row padding ~28px; between sections a dotted rule with a small scissor glyph at the right end.
- Full page height only 3164px at 1440 (short, dense).

## (d) Radius, border, shadow
- Radius 0 everywhere except the lead photo (stadium, radius 999, 606x314) and pill buttons (stadium outline 2px, 130x40) and tiny label pills.
- Borders 1-2px solid ink; no shadows.
- Corner diamond badges (28px rotated squares, filled magenta, white single glyph) on the four corners of the stadium photo.

## (e) Imagery - IMAGERY: photo
Primary image type is documentary photography (people in a village, a lecture room, fields, rafting on a river) plus small boxed ad banners that are illustrations (not counted: under half the image area).
Style: natural light, slightly cool, high-key, people mid-action, candid; no studio.
| Image | Ratio | Mask | Position |
|---|---|---|---|
| Profile photo (left column) | 400x367 (1.09) | none, radius 0 | top of left column, full column width |
| Lead photo | 606x314 (1.93) | stadium (border-radius 999) + 2px ink outline + 4 diamond badges | centre column, under headline |
| Feed thumbnails | 121x74 (1.64) | none | right end of each row, ~19% of centre width |
| Service screenshots/photos | 353x244 (1.45) | none | right of a title+text block, ~35% width, alternating left/right |
| Boxed banners | 400x170 | 2px outline | bottom of left column |

## (f) Decoration
- Masthead strip: issue number small left, full date centred, a "colour / mono" toggle pill right (36x20 pill with a knob).
- Giant stamp-card: 270x260 square outline with inner hatch lines (1px) around a logo glyph.
- Date block: month and weekday set vertically, giant numeral, a 1px rule with arrowheads at both ends, then two stadium-outline labels (WEATHER / TEMPERATURE) over a weather glyph and a 40px temperature.
- Dotted rules 2px, scissor glyph at the end of section rules, small "NEW" diamond badges.
- Stadium outlined buttons 130x40 with a small pointing-hand glyph.
- Vertical outline label ("EXTRA") top-right of the lead headline, hatch lines inside.

## (g) Motion
- Static page; no scroll reveals seen at 900px steps (`ref/scroll-nosson-*.png` identical states).
- Colour/mono toggle swaps body class (CSS transition on colours); weather and date filled by script (live).
- Decorative keyframes: a fish glyph swims 65% -> 40% with a Y-flip (ayuAnime), and a second runs left 0 -> -200% (ayu, linear loop).
- GSAP + ScrollToPlugin + ScrollTrigger + keen-slider loaded (anchor smooth-scroll, a slider).
Hitomachi: GSAP 3.11 + ScrollTrigger + Swiper; header curtain clip-path polygon bottom -> full, 0.69s cubic-bezier(0.31,-0.x,...); keyframes expand (scale 0->1), rotateOnce / rotateBg (360deg badge spin), poyooon (squash-and-stretch bounce on a mascot), fadeInText (translateY 8px + rotate 3deg -> 0, 50% mid-step), underline scaleX(0->1) from left over 1s on links, fixed side slideshow.
