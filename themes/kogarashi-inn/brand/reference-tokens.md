# Reference tokens — Kazenomori (main reference, a forest ryokan for two; measured 2026-11-09, 1440×900)
Source page: https://goten-resort.jp/kazenomori/  (S5-Style listing). Secondary: https://hotel-uro.jp/ (only the clock/status-line idea and numbered "(01)" fields).
Screenshots: `ref/kaze-first.jpg`, `ref/scroll-kaze-900.jpg`, `ref/scroll-kaze-2700.jpg`, `ref/scroll-kaze-5400.jpg`, `ref/uro-first.jpg`, `ref/scroll-uro-2700.jpg`.

## (a) Colour (approximate; measured from screenshots, first-screen saturated share 9%)
| Role | Hex | Share |
|---|---|---|
| Ground (misty near-white with a blurred cloud texture) | #FBFCFB | ~45% of the page |
| Dark photo / charcoal ground (hero, intro, room photos) | #202020 – #333333 | ~35% |
| Text ink | #444444 | text |
| Header chrome (white bar after scroll) | #FFFFFF | 5% |
| Accent: logo / mark green | about #2F7A4D | <1% |
| Accent: tiny vertical Latin label, brick-pink | about #B87463 | <1% |
First-screen saturated share (HSV s>0.5, v>0.25): 9%. Secondary (URO): pale rose-grey ground #EADDD5 with black ink, 0%.

## (b) Type
- Family: Yu Mincho / Hiragino Mincho (a serif for everything, headings and body). Latin labels in a light serif with wide tracking.
- Body 13px, weight 100–400, line-height 1.5 for chrome; story copy is set one sentence per line at line-height about 2.4 (31px at 13px).
- Nav 11.7px, padding 0 11.7px. Section title 24px vertical (writing-mode vertical-rl), 700; first-screen tagline 16px / 24px line-height, white.
- Tiny Latin sub-label (News, Stay, Cuisine) about 9–10px, rotated 90°, letter-spacing wide, accent colour.
- Our translation: Cormorant Garamond display, Newsreader body; en copy at 17px with lh 1.9; story lines one per line at lh 2.3.

## (c) Spacing
- Section padding-top 6em–16em (news 6em, stay 16em on desktop; 9–10em tablet/mobile). Container for text rows about 920px (x 260–1180). Header 52px.
- Photo bands bleed to one viewport edge: width about 60% (x 0–864), the text column offset to x 985 on the other side.

## (d) Shapes
- Radius: photos 8px (news thumbs), room photo about 8px on the inner corners only; buttons outline 1px white, radius 2px; header buttons 105×35.
- Hairline: dashed 1px ink rule closes the news block. Shadow: none.
- "More ●" link: text + 26px solid charcoal disc with a white dot, a thin leader line before it.

## (e) IMAGERY = photo
Dark, moody documentary photography with warm low light (food from above on dark slate and plates, forest terrace, bath, bedroom with soft indirect lighting). Overhead table shots, wide window-lit interiors, forest greens. Aspect ratios: hero full-bleed 16:10 (video loop), about photo 1.38:1 flush-left at 60% width, small vertical photo 0.6:1 sliding in from the right edge (x 1232–1440), news thumbs 4:3 at 165px, cuisine photo 1.3:1 flush-right (x 600–1440), room photo 1.1:1 flush-left. Overlap: a small portrait photo straddles the bottom-right of the intro band.

## (f) Decoration
- Vertical headings (24px, 2 columns) left of a short-line text column; tiny rotated Latin label; leader-line "More ●"; dashed rule; "Back to top" dark disc 80px bottom-right (round, centred label with small chevron); circle ring of rotating text around the play arrow in the hero (not reused here); misty cloud-texture ground between photo bands.

## (g) Motion
- Reveal on view: class `motion_fadeInUp slow` via jQuery inview, animate.css fadeInUp: from opacity 0 / translate3d(0,20%,0) to rest, duration 1.2s, easing cubic-bezier(0.215, 0.61, 0.355, 1) (easeOutCubic, from anime.css), one-shot, no stagger on most blocks.
- Smooth scroll: Lenis (library). Not reused.
- Hero: looping video; intro band `con_video_intro` keeps its video background `position: fixed` (100vh) so the photograph stays still while the copy scrolls over it (fixed-background parallax feel).
- Header: transparent over hero, turns white 52px bar after the first screen.
