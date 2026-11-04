# Reference tokens (measured with getComputedStyle, 1440x900, 2026-11-04)
Main reference: https://www.mejiro.ac.jp/univ/mejinavi2026/ (admissions guide microsite; line-art landscape + real portrait photos).
Secondary: https://www.mito.ac.jp/70th-anniversary/ (school-group anniversary site; pale slate ground, framed rounded window, route of labelled nodes).
Only values and descriptions are recorded; no assets, copy or logos are reused.

## (a) Colour
Main (mejiro): ground cream #FCF3E9 (hero, data, lookbook ~60% of page); band green #5EB473 (messages, short movie ~25%); display red-orange #E8543C (giant wordmarks, numerals, ~5%); deep brown #5A2D0C (sub-title pills); text #000; tints for cards pink/teal/peach/lime (~8%).
First-screen saturated share (mejiro): ~35% (green hills + red wordmark). Too high for us: we keep the structure, swap to slate.
Secondary (mito): html ground #EFF6F8, sky band #E4F1F4, navy #1A2D8B (headings, footer), text #353535, ~90% pale; saturated only inside illustrations (~20% of first screen).
Our translation (see stage-a.md): ground #EEF2F3, slate #5C6A72, ink #1F2A30, band #DDE4E7, ledger-red accent #B4533C (<=3%).

## (b) Type
mejiro: Zen Kaku Gothic New 500/700; h3 20.6px/700, lh 1; display wordmarks are a rounded heavy script (image-based) 150-190px; chips 12-13px caps with 0.04em tracking.
mito: Heebo (latin) + gothic CJK; body 16px/400, #353535; labels 13px/700, ls -0.07em; headings navy ~44px/700; vertical Latin caption rotated 90deg 28px/700.

## (c) Spacing
mejiro: container ~1280 (cards x 82-1358), 4-up cards 272px wide, gap 62px with 1px dotted vertical dividers; section top padding 110-430px; full-width fixed bottom bar 44px.
mito: container 1100-1200, section padding 140/150px, hero window 500x700 centred, ~480px of empty ground each side.

## (d) Radius, border, shadow
mejiro: portrait cards r16 with 1px black outline; label pills "cloud" r40 with 1px outline; round data discs r50% 1px outline; no shadow except soft drop under cut-out people.
mito: hero card r48 white 92%, no border, no shadow; small outlined squares r8 1px #353535 as stickers; Menu button 52x30 r4 1px outline.

## (e) Imagery
IMAGERY: photo (people cards, lookbook, campus are real photographs; the first screen and section heads add a flat line-art landscape as decoration, black 1-2px strokes, flat fills, no gradients).
mejiro cards: 0.74:1 portrait (272x370), r16, cut-out person standing in front of a cream panel carrying a black line-art hill/cloud/mountain backdrop and a flat pastel top; the pill label overlaps the bottom 20%.
mito: illustrated figures (flat vector with grain), arranged around a map; used as secondary composition only (framed window + floating stickers).

## (f) Decoration
mejiro: fixed bottom route bar (track 840px wide, 8px, red fill grows with scroll; 5 round nodes 10px yellow with 1px outline; a small marker character rides the fill; speech-bubble label with the current section name; a goal flag at the end); dotted vertical dividers; white dots scattered; footprints; giant rounded wordmark + brown subtitle pill.
mito: rounded outlined square stickers 36px, squiggle pen marks, 01 index numeral top-right of the window, vertical Latin caption beside the window, "Menu" outline button fixed top-right, pager "1 --- 5" bottom centre.

## (g) Motion
mejiro: GSAP + ScrollTrigger. Reveals start "top 90%" / "top 85%", y 100 -> 0 on headings, y 10-20 on small items, duration .5-1s, ease circ.out / power2.out / power1.inOut; scrub off except the bottom route bar (progress tied to scroll, ease none). Data discs carousel slides on arrows.
mito: Alpine + Lenis smooth scroll; opacity fades 500-1000ms; hero stickers drift; cubic-bezier(0.2, 0.6, 0.35, 1) on height/opacity/transform.
