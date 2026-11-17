# Reference tokens (measured with getComputedStyle at 1440x900, headless Chromium)

Main reference: https://kazenoyama.jp/ (mountain resort hotel with restaurant, private sauna, seasons, topics). Secondary: https://satoyama-terrace.com/ (stay and sauna in a managed woodland). Values only; no assets, copy or logos are reused. All Japanese copy of the sources is omitted or translated.

## (a) Colour (Kazenoyama home)
| Role | Hex | Where | Area share (home, by page height) |
|---|---|---|---|
| Base ground | #F5F5F5 (paper-grain texture overlay) | body, `bg-pale`, about, topics | ~55% |
| White | #FFFFFF | cards (r20), "taste" band, stay band | ~20% |
| Text | #474143 | body, headings | text only |
| Main green | #0AA64E (action discs) / hill strip ~#3A8A00 | fixed disc stack, fixed hill nav strip | ~4% |
| Accent gold | #C49B38 | pill buttons, giant Latin section words | ~4% |
| Mist band | #DADDD7 | FAQ band with texture | ~5% |
| Accent pink | #EE6FCE | tiny season icons only | <0.5% |
First screen (photo hero): saturated share (HSV s>0.5, v>0.25) measured 3.0% on a 1440x900 screenshot. Satoyama first screen (split green panel) measures 60.9% — NOT adopted; its scene bands are #2A6541 / #978D7A / #498599 full-width and are treated as a secondary hint only (muted taupe band idea).

## (b) Type
- Body: Jost (Latin) + Zen Kaku Gothic New (JP), 17px / 27.2px (1.6), weight 500, tracking normal; JP running text tracking 1.53px (0.09em), line-height 35.7px (2.1) in the about block.
- H1 hero catch: 32px / 51.2px, weight 600, white, centred on photo.
- Section giant Latin word (TOPICS, RESTAURANT, SAUNA & JACUZZI): ~100px caps, weight 500, gold #C49B38 (or white on photo), JP sub-title 26px weight 600 beside it.
- About statement: 42px / 63px, weight 500, tracking 4.2px (0.1em), centred, 2 lines.
- H3 small label: 13px caps, weight 500, tracking 0.39px. Card title 20px/30px weight 500 tracking 2px.
- Satoyama: heading serif (mincho) 32px / 40px, weight 400, tracking 3.2px, capitalised Latin; "Scene 1 / 5" caption serif ~20px.
- Our mapping: Fraunces for display words, Mulish for body, Noto Serif TC/JP for CJK; largest type >= 4.25rem (giant Latin words).

## (c) Spacing
- Page gutter 75px (x75 to x1365); about text column 1105px at x168; card row at x75 with 364px cards and 20px gaps (overflows right, Splide).
- Section padding: topics 140px top; about ~100px; stay band 200px / 100px; enjoy band 140px / 215px; FAQ 136px / 124px.
- Hero height 1005px at 900px viewport (about 111vh) with a 109px ridge-cut strip at its foot.

## (d) Radius, border, shadow
- Cards r20, white, padding 20px, no shadow. Pill buttons r40, 246x50 or 200x50, gold fill, white text 16px tracking 0.8px, 1px gold border, white arrow at right.
- Photo r20 on text/photo pairs (sauna card 479x538, restaurant 905x522 flush to left edge with right corners r20).
- Action discs 60x60, r50%, shadow 0 4px 4px rgba(0,0,0,.05). Hairline rules 1px #474143 on season list rows (75px row pitch).

## (e) Imagery (IMAGERY = photo)
Main image type is photography: warm documentary food/people/landscape photographs, hero cross-fading slider (Splide) with image scale 1.06 -> 1. Secondary type: one flat illustration band (apple-leaf canopy with red fruit, two white birds) on the paper ground — decorative only, under 10% of the page.
- Hero: 1440x1005 (1.43:1) full-bleed, 0 radius, foot cut by a hand-drawn ridge silhouette (109px tall, 13.2:1 strip image).
- Topics cards: 324x236 (1.37:1) photo inside r20 white card.
- Taste/restaurant: 905x522 (1.73:1) left-flush photo, text column right at x995.
- Sauna: 479x538 (0.89:1) r20 photo at x75 over a blurred full-bleed photo ground; text in white to the right.
- Seasons: tall r20 photo (468 wide) left, ruled list right, a small fire photo peeking from the right edge.

## (f) Decoration
- Fixed right-edge stack of three 60px green discs (call / book / access), 25px pitch gaps, small curved-text label on each disc, white line icons; plus a white 60px menu disc above them. Stack top at y20, discs at y105 / y190 / y275 (85px pitch).
- Fixed hill-ridge strip at the viewport bottom (150px tall, green silhouette with grain, wavy top edge), four labels at x1015 / x1110 / x1220 / x1318 (white, 17px), a small white bird sits above the active label. (Scroll-spy.)
- Canopy: illustrated leaves (two greens, red fruit) hang from the top edge, left and right, over the paper ground; two white birds fly at upper right of the statement.
- Ridge-cut edges: white hill silhouette cutting the photo foot (hero foot, restaurant photo foot).
- Paper-grain texture on `bg-texture` bands. Small pastel icon after the JP sub-title (e.g. a fork icon, snow-flower icon).

## (g) Motion
- Reveal: `:visible` class added by IntersectionObserver (rootMargin 0 0 -20%); opacity 0 -> 1, translateY 80px -> 0, 1s, cubic-bezier(.165,.84,.44,1); cards stagger.
- Hero: Splide cross-fade, 0.4s fade on figures, image scale 1.06 -> 1; hero catch slides in from -720px.
- Parallax: taste interval image translateY +43 -> -17 px over its scroll range; about backgrounds translateY -10px; sauna bg wrapper translate(-720,-450) pinned.
- Hover/UI: 0.3s/0.4s transitions, cubic-bezier(.19,1,.22,1) and (.165,.84,.44,1); hill nav label colour 0.4s; season list svg arrows fade 0.8s with -4px y.
- Libraries seen in the bundle: Splide, GSAP ScrollTrigger (7 references), IntersectionObserver (8). Satoyama: Splide + barba.js page transitions, scene bands `in-view-from-bottom`.
