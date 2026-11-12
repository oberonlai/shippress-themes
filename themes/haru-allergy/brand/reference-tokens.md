# Reference tokens — NUSET (https://nuset.jp/), measured with getComputedStyle at 1440x900

IMAGERY: photo (high-key documentary beauty/skin photography: soft window light, sheer curtain, pale ground, skin tones, one muted sage garment; no illustration).

## (a) Colour (share of the page)
| Role | Hex | Share |
|---|---|---|
| Base | #F7F4EE | ~45% |
| Ink / text | #242423 (body 75% #121212) | ~8% |
| Band (60% on paper) | #CDBDB2 -> ~#D0C3B9 | ~20% |
| Cool slate band (Q&A) | #757E82 -> #939799 | ~8% |
| Voice card | #EAE3DC | ~2% |
| Accent (sage garment in photos) | ~#A5B09A | <2% |
First screen saturated share (S>0.35, V>0.2): 6.8%. Mid-page 3.5-4.5%.
Our mapping: base #F4F6F7, ink #1F2428, slate #5C656E, soft band #CED6DB, accent pale sage #A9B8AE.

## (b) Type
- Display Latin: Lato 300, 82px / 123px, tracking 3.28px ("Line up"); 42px 300 (H3); wordmark thin caps.
- Body JP: Zen Old Mincho 18px / 43.2px, tracking 1.44px; small notes 10-11px; nav Lato 15px 500, tracking 0.6px.
- Hero poem: 18px, line-height 43.2px, white; vertical-rl 24px / 40.8px, tracking 2.4px for side notes.
- Ours: Figtree / Public Sans sans (reference is serif; we borrow scale and rhythm only).

## (c) Spacing
Band padding 130/80/208 (Line up), 160/0 (Voice, FAQ), 210/0 (Q&A band). Content container about 1063-1280px; text column 927px; photo column 413px wide.

## (d) Radius, borders, shadow
Photos radius 0. Voice card radius about 40px on #EAE3DC with 1px ruled footer. Q&A cards translucent white at ~12%, radius 0, no shadow. Progress line 140px white on 420px grey, 1px.

## (e) Imagery
Hero: full-bleed 16:10, subject right of centre, light curtain at left. About: 3:4 portrait flush left (463px wide), 277x450 flush right, 304x380 overlapped by a veil, 305x379 trio. Product 413x619 (2:3). Voice photo 434x650 swapped in sync with the card. Q&A thumbnails 256x199.

## (f) Decoration
Two overlapping 1px white hairline circles (about 420px); vertical-rl sentence at the far right; highlighted small chip "30ml / price / tax in"; dot pager; paper-plane arrow "view detail".

## (g) Motion
- Hero scroll-scrub (ScrollTrigger, scrub 1.4): photo blur 0 -> 20px (5px on mobile), gradient overlay opacity 0 -> 1, start 0% top, end 90% top.
- Poem (scrub 1.4, 30% bottom -> 80% top): per-character opacity 0->1, textShadow glow #CDBDB2 -> none, rotate -5deg -> 0, y 13 -> 0, x -8 -> 0, stagger 0.03, 0.8s power1.out, one line at a time.
- Section-open: mask-position sweep (gradient mask 210%), blur 5px -> 0 on titles, once at top 100%.
- Page transition: loader fade 0.25s Power4.out. Smooth scroll via Lenis.
