# Reference tokens — https://menma.jp/ (measured 1440×900 with getComputedStyle; values only, nothing copied)
## (a) Colour
- Frame/accent red `#DA0000` (8 px page frame, pills, corner stamps, rule lines) ≈ 3% of first screen; hero photo ≈ 92%.
- Paper `#EFE8DB` (inner pages), off-white `#F9F7F5` (cards, header pill text), text `#262629`, section-word green `#05A954`/`#009933`, product tints gold `#BD9E01`, magenta `#B9277A`, orange `#D58008`.
- First-screen saturated share ≈ 3% (red frame + stamps + pill); everything else is the photograph.
## (b) Type
- Body "IBM Plex Sans JP" 14 px / 500 / lh 21 px. Display/latin labels "Lexend Giga" 12–13 px 400, tracking 2.9 px caps; section words 90–120 px 900 caps wide-tracked (green); JP subtitle red ~28 px tracked 0.2em; hand-written vertical headline over hero.
- Nav pills 13 px 500, 47 px high, radius 9999 px.
## (c) Spacing
- Page frame 8 px; sections ≈400 px high word band then 3-col hairline grid (cells ≈418 px, 1 px red rules); card padding 20 px; container ≈1100–1300.
## (d) Radius/border/shadow
- Pills 9999 px; outline oval arrow button 50×24 radius 9999 1 px; 1 px red hairlines; no shadows.
## (e) Imagery — IMAGERY = photo (hero + product photography on white; secondary mascot illustrations are minor)
- Hero: one candid documentary photo, full-bleed, warm interior, person eating, 100% width × 100vh, no mask. Product shots 1:1 on white, cards 358 px wide. Halftone circle portrait ø≈260 beside the big section word.
## (f) Decoration
- Four ø32 round stamps with one hanzi each sitting in the four corners of the red frame (fixed). Circled seal "新" overlapping the last letter of a giant word. Oval outline arrow buttons. Fixed bottom-right red pill "MODE CHANGE".
## (g) Motion
- GSAP + ScrollTrigger + Lenis smooth scroll. Children fade-up: autoAlpha 0→1, y 50→0, .5 s, stagger .25, power1.out, start "top 83%". Per-char split: opacity 0→1, y 20→0, .6 s, stagger .05, power3.out, "top 80%" once. Random-order char pop scale 1.03–1.5→1 .3 s. Pinned header (scrub 1). Header pills slide over photo on scroll.
