# Reference tokens — measured with getComputedStyle (1440×900), Cruise Kobe portal (main) and a serif cruise-line page (secondary). Values and descriptions only.

## (a) Colour (main reference)
| Role | Hex | Share |
|---|---|---|
| Main (saturated blue, wordmark, bands) | #303EC8 | 5% of first screen; ≈35% of the page below |
| Secondary (pale blue ground) | #DAE8FF | ≈20% of page |
| Base | #FFFFFF | ≈45% |
| Text | #1A1A1A | — |
| Accent | none; photo colour (sea teal, white gulls) | — |
First-screen saturated share (HSV s>0.6) measured: 5.0% (main), 0.3% (secondary).
Ours: the saturated blue is replaced by katsu-iro slate #3E4C55, the pale blue by a mist #DCE6EA.

## (b) Type
- Latin: a geometric sans (Reddit Sans). JP body Zen Kaku Gothic New 16/28, colour #1A1A1A, tracking normal.
- h2 section label 14px/15.4 weight 400, tracking .28px (small label); gallery title 90px/90 weight 600, tracking 1.8px, white on blue; nav label 22px/24 weight 500, tracking 2.42px.
- Ghost word at the foot of the blue band: ≈150px, white at 45% opacity, width ≈ full container.
- Secondary: Ryumin (Mincho) serif, nav 16px, h2 25px tracking 5px, body UD Shin Go 16px.

## (c) Spacing
Hero frame top 100px (below a 100px header), side margin 30px, height 750px of 900. Sections: info 75px top; price 120/120; gallery 800px band; access 180/180; news 90/90. Container ≈1220–1380px. Link row gap ≈ 260px between five ship links.

## (d) Radius, borders, shadow
Hero frame radius 165px (squircle), gallery band radius 240px, width 1397 (11px inset each side), overflow hidden. No shadows, no card borders. Hand-drawn dashed ellipse outline around the "today's operation" pill. Links: sine-wave underline 1px, ≈12px under the text, width = text width.

## (e) Imagery — IMAGERY: photo
Documentary photography: harbour gulls, pier buildings, sea; colour grading cool, slightly desaturated. Hero is three vertical panels side by side (widths ≈ 418 / 546 / 416 of 1380), all inside one rounded frame, seam logo at centre; panels carry different crops of the same harbour (gulls close-up in the middle, quay left, ferris wheel and water right). Photo ratios: panels ≈ 0.56 / 0.73 / 0.55. Mask: the frame's border-radius only. A small cut-out gull and a lighthouse float on the white About screen (we do not use cut-outs).
Secondary: split row, left half-width photo 640×540 flush to the viewport edge (r0) with copy right; a small sea-texture photo 555 wide floats lower right.

## (f) Decoration
Scattered sine-wave ticks (35–140px long, 1px, main blue), randomly placed around the hero and on the pale ground; sine underline on every link; arrow "→" after link labels; a vertical tab on the right edge "booking" (we skip this, it is a used pattern).

## (g) Motion
GSAP 3.12.5 + ScrollTrigger + Lenis smooth scroll. Loading screen (word "Loading…" with scattered waves). Bounce-in: scale 0→1 + opacity, ease back.out(1.7), start "top center". Three scrubbed tweens `scrub:2` (parallax drift of floating cut-outs, ease none). Waves drift horizontally with long loops (duration ≈10s). Hero panels move horizontally, a slow drift.
