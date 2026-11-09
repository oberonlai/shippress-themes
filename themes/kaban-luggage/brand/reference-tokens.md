# Reference tokens (primary reference, measured at 1440x900 with getComputedStyle + CSS bundle)
Source: https://jibie-varied.com/ (a gibier-leather goods brand; leather is the raw material of bags and wallets, same buyer mindset as a luggage shop). Only values and descriptions are recorded; no assets, copy or logos are copied.

## (a) Colour
| role | hex | share |
|---|---|---|
| first-screen ground (near-black warm) | #0D0C0A | ~70% of first screen |
| ink / dark band | #1A1A1A | dark bands |
| paper ground (light sections) | #EBE7E1 | ~45% of page |
| paper mid | #DBD4C8 | collections band |
| paper deep | #D2CAB8 | news band |
| text | #251B0F | all copy on paper |
| muted text | #867560 / #A2998C | English sub-copy |
| accent (oxblood) | #8D0000 | tiny sub-labels only, <1% |
| first-screen saturation | one orange leather sliver bottom-right, about 5% | well under 15% |

## (b) Type
- Latin: DM Sans Variable (body 18px) plus a high-contrast display serif for the wordmark and Latin sub-labels (oxblood, about 1.5rem).
- Japanese: Shippori Mincho; headings 1.375rem, lh 140%, ls 0.1em; huge vertical headings (writing-mode vertical-rl) about 8-10rem on desktop, lh 90%.
- Body Japanese lines have wide tracking (0.1em) and lh about 2.1; English sub-copy sits below at a lighter tone.

## (c) Spacing
Section padding top 120px+ (pt-30), collections band 7586px tall for 3-5 chapters (each about 1.2 viewports), container is full-bleed with 110px text inset; header is 3-column: shop link left, logo centre, menu right, transparent over dark.

## (d) Radius, border, shadow
Radius 0 on all photos; no shadows; 1px olive hairline vertical rule on the next-chapter index (about 100px tall); no card borders.

## (e) Imagery
IMAGERY = photo. Low-key macro documentary photography of the raw material (grain, folds, a hand on the hide), forest floor stills, product shots. Ratios: chapter pair 1103x515 (about 2.14:1 as two abutting photos, left 65% and right 35%, different crops, flush to the left viewport edge); single left photo 678x740 (0.92:1) flush left on paper. No rounding, no clip-path. The hero image uses a radial-gradient mask (56% radius, edge transparent) so it vignettes into the page black. Photos fade out at the top with a linear mask (transparent 0% to black 30%).

## (f) Decoration
Paper grain texture with thin scratch/crack lines on every light ground; tiny "(01)" numeral above a vertical title; red vertical Latin sub-label beside the vertical title; vertical hairline "(02) next name" index peeking at the bottom right; sticky footer that is revealed from under the last section.

## (g) Motion
- Hero image: scale 160% to 110% and blur 12px to 0 after load, delay 1500ms, duration 2500ms, cubic-bezier(0,0.55,0.45,1).
- Menu image: opacity 1000ms.
- Smooth scroll (Lenis) plus GSAP ScrollTrigger for the pinned dark forest scene whose vertical lines appear one after another.
- Common easings: cubic-bezier(.16,1,.3,1) (reveals), cubic-bezier(.4,0,.2,1) (hovers).
