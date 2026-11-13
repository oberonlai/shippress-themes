# Reference tokens (measured with getComputedStyle at 1440x900, 2026-11-13)

Primary: https://sasa.osaka/ (wood-fire Italian restaurant). Secondary: https://osteria-ao.com/ (Italian restaurant, plated-dish photography). Only values and descriptions are recorded; no assets, copy or logos are reused.

## (a) Colour (share of first screen / page)
| Role | Primary (sasa) | Secondary (ao) | Ours |
|---|---|---|---|
| Base / ground | transparent over photo; white `#FFFFFF` paper bands (~45% of page) | sage-stone `#CAC9BD` rgb(202,201,189) (~85% of page) | stone `#D4D3C7` (light bands), espresso `#1D1915` (night bands) |
| Text | `#000000` on paper, `#FFFFFF` on photo | slate ink `#4F545A` | ink `#26221D`, white `#F6F3EC` on photo |
| Main / mid | none (monochrome UI) | none | clove `#7A6A56` (rules, labels, small fills) |
| Accent | tiny green line strokes in the logo (`#8DC63F`-like, <1%) | turquoise plate in a photo only | lamp amber `#B98A45` (<3%: the time marker and one underline) |
First-screen saturated share (HSV s>0.5, v>0.25, 144x90 sample): sasa 13.9% (all from the food photo), ao 5.2%. Ours target <= 12%, hard cap 15%.

## (b) Type
- sasa: body DNP Shuei YMincho (serif, 14px / lh 24px, weight 500); Latin display Bodoni URW weight 300. Nav 16px Bodoni, letter-spacing -0.4px, no uppercase transform (source text is caps). Section words 120px / lh 120px / ls -6px (-0.05em), white on photo. Intro H3 24px, ls 2.4px (0.1em), lh 44px. Label `(introduction)` 13px / lh 20px, parenthesised, sentence case.
- ao: body DNP Shuei Mincho serif 13px / lh 23px, nav 16px, no letter-spacing; display headline ~56px light, lh 70px; hand-script accent word "about" (not used by us).
- Ours: Fraunces (display, opsz high, weight 300) + Literata (body 16-17px, lh 1.75). Display word 7.5rem desktop / 4.25rem mobile, ls -0.05em. Labels 0.8125rem with parentheses via block markup (not CSS content).

## (c) Spacing
- sasa: header 119px at top (pc), content gutter 80px (news block x=80), contents photo rows x=80 / 480 / 260 at different widths, section height 100vh pinned. Container ~1280 (80px side margins at 1440).
- ao: side margin 40px (inset photo x=40..1400), text column starts x=160, 2-col course layout 440px text / 840px photo, vertical rhythm 120-220px between blocks.

## (d) Radius, border, shadow
- Radius 0 everywhere (photos, buttons). Borders: 1px hairline `#C8C8C8` row separators (news ledger); MORE button 1px outline with a second inner 1px line (double line) - we do NOT copy this, our CTA is a single underlined arrow link. No shadows.

## (e) Imagery - IMAGERY: photo
Photographic, low-key, plated food and room interiors, edge-to-edge.
- Hero: full-bleed 1440x1440 cover images (3 slides, cross-fade), parallax yPercent 0->20.
- Contents rows: mixed ratios 4:3 (800x667), 2:3 (400x600), 2:3 small (200x300), 640x320 (2:1) at left offsets 80 / 480 / 260 / 400, no radius, no mask.
- ao: letterbox stack 840x180 (4.7:1) and 840x340 (2.5:1) with a "02 / 06" counter at the photo's bottom-right; about block has 3-4 small photos (200x300, 320x213, 240x360, 480x320) placed off the text column at the left and right edges.
- Dark scene: a dimmed (~0.35 opacity) fireplace photo is the ground of the introduction block with white text over it.

## (f) Decoration
- Slide counter `(01 / 03)` rotated vertical, 13px, bottom-left x=40, y=670, with a 2px x 50px white bar; `(scroll down)` rotated vertical below it at y=780.
- Circle menu button 40px white disc with three dots, fixed top-right (x=1360,y=38).
- Parenthesised section labels `(news & topics)`, `(contents)`, `(about)`.
- Dot under the current nav item (5px).
- Hairline separators 1px; lowercase grey `#tag` per news row.

## (g) Motion
- Smooth scroll: ScrollSmoother smooth 1.5 + normalizeScroll (we do NOT use; we use sp-scroll only).
- Parallax: `gsap.fromTo(img,{yPercent:0},{yPercent:20,ease:"none",scrollTrigger:{start:"top bottom",end:"bottom top",scrub:true}})` on hero and eyecatch images; second layer 33% on pinned blocks.
- Pinned blocks: ScrollTrigger pin with pinSpacing false; contents rows pinned until the row stack has passed.
- Appear: class `appear` at start "center 80%" (also "top 80%" / "top 75%"); headings reveal letters via translateY(0) from below; frame bars use clip-path inset reveal, delays 0 / 0.2 / 0.4s.
- Easing: expo.out (anchor scroll 1s), CSS cubic-bezier(.19,1,.22,1) for clip-path .3125-.625s and height .5s.
- Page transition: a mask element (`transitionMask`) wipes across on link clicks (ao).
