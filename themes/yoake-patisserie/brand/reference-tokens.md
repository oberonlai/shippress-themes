# Reference tokens: primary reference https://alleeomotesando.jp/ (measured 2026-11-14, 1440 x 900, Chrome, getComputedStyle)
Secondary (structure only): https://100th.nittoh-tea.com/. Screenshots in `ref/`. Values only; no assets, copy or logos reused.

## (a) Colour
| Role | Hex | Share of first screen | Note |
|---|---|---|---|
| Field (main) | `#6D311D` brick, ramps to `#664A29` umber and `#41342B` cocoa | ~35% | `linear-gradient(110deg, #6D311D 22%, #664A29 55%, #41342B 90%)` on the first section |
| Page ground | `#41342B` cocoa (body background), `#000` in the film-still sections | 25% black photo shadows | body has `transition: background .5s cubic-bezier(.4,.4,0,1)` |
| Text | `#FFFFFF` at weight 200 | <3% | all type is white on dark |
| Accent | warm copper cutlery and tan pastry inside the photos only | n/a | no UI accent colour |
Saturated share of the first screen (HSV s>0.55, v>0.35): **32%** (brick field). Our adaptation keeps the diagonal three-stop field idea but in a high-key blush (`#F6BFBC`) so our share is far below 15%.
Secondary (Nittoh) first screen: 21.5% saturated red `#E60012`, ground `#F3E7D7`; colours NOT used.

## (b) Type
- Family: Inter (a light sans), nav and headings alike. h2 labels 16px / weight 200 / lh 22.4px / ls 1.6px (0.1em) / no uppercase. Body copy poems 14-16px weight 200 with ls ~0.15em, lh ~2.5 (36px pitch on 14px).
- Vertical lead (hero): Japanese set `writing-mode: vertical-rl`, ~20px, two columns 50px apart, white. Our version rotates two Latin serif lines.
- Nav: 5 text links + shop + icon, 16px weight 300, ls .1em, transparent, over the first section.
- Secondary: display red heavy grotesque and big serif numerals 80px+ (hero 100 and per-card article numbers at ~96px).

## (c) Spacing
- Section heights 1170 / 2891 / 3696 / 3295 / 3594 / 1040 px (long single-flow page, 16041 px). Section top gap before text 140-200px; text column starts x144 or x262; text column ~300-420px wide.
- Container: none; elements hug viewport edges at x0 or x1440.
- Header 100px, logo x56, nav right aligned ending x1335.

## (d) Corners, borders, shadows
Everything radius 0, no borders, no shadows. Secondary: 1px red rules between all cells, pills radius 999 for tags.

## (e) Imagery - IMAGERY: photo
Low-key documentary food photography: dark tables, motion-blurred hands and cups, shallow depth, copper cutlery. Measured placements (x, width, ratio):
- Hero: photo starts at y360, x0 to x1296 (90%), ratio ~1.4, bleeds off the left edge, ends 144px short of the right; field shows above and at the right.
- Story: 648x440 (1.47) flush to the right edge (x792), starts 110px lower than its text.
- Film-still band: full-bleed 1440x765 (1.88) with one 16px tracked English line centred.
- Portrait 720x926 (0.78) flush left; 576x432 (1.33) at x720 and x144 alternating; trio of three 370x370 squares at x60/535/1010; 461x461 square; 720x540 flush right; 634x422 (1.5); 1440x515 (2.8) band; 432x648 (0.67) portrait.
- All radius 0, no masks, no clip-path, no overlap with text; they alternate left-edge / right-edge flush and step down.

## (f) Decoration
Single-stroke outline logo mark 40x67 top-left (x56 y24), white 1px line art. An em dash `—` under the section label. No other ornaments. Secondary: 1px red grid rules, hairline tag pills, per-card giant numeral.

## (g) Motion
- `.appear`: opacity 0 -> 1, `transition-duration: 2000ms`, delay stagger from page load (3600 ms first, sequence), easing `cubic-bezier(0.4, 0.4, 0, 1)`; images and text fade in as they enter (IntersectionObserver class toggle, Studio-built site, no GSAP/Lenis/Locomotive).
- Gradients and ground: `0.3s cubic-bezier(.4,.4,0,1)` on gradient angle/colours; body background `.5s` same easing.
- Secondary: thin top marquee (`loop-track`, linear, infinite, ~36 s per cycle loop); header collapses to a small logo + 4 links after the first screen; IntersectionObserver reveals.
