# Reference tokens: a-bite-coffee.com (measured 1440 x 900 with getComputedStyle; values only)

## (a) Colour
- Paper ground (about 62% of page): #ECE9E1. Ink/brown text (about 8%): #5D3121. Deep band (about 20% of page, the philosophy band and footer): #361C11. Mid taupe for muted type and rules: #B5B1A6, #938D7C, #D6D2C8, #CCC9C1. Spot (tiny, product glyph only): #FFB000. Hero photo ground: soft peach (#E3BFAE to #D9A992) fading into the paper.
- First-screen saturated share (HSV s>0.5, v>0.25): 11.0%.
- Our mapping: paper #ECE8E8 (cool plum-grey, not cream), ink #3B2B31, plum #6B5A5E, deep band #2B1F24, mist #B8AAAE, spot rose #C98A9A (under 2%).

## (b) Type
- Latin: Helvetica Neue LT Pro / Helvetica LT Pro (grotesque); Japanese display: FOT-Cezanne; body Yu Gothic. We swap to Fraunces (display) + Literata (text) per the row.
- Intro headline 68.5 px / lh 78.8 / weight 400 / colour taupe-brown, 2 lines. Product name 33.7 px / lh 37 / 500. Section label 25.3 px / 300. Price and spec 16.9 px / ls .01em. Body JP 16.9 px / lh about 2.3. Wordmark: SVG letters, full width (1370 px at 1440), colour #ECE9E1 on photo.

## (c) Spacing
- Page gutter 35 px both sides; container 1370 px. Intro padding 208 px top, 272 px bottom; text column starts x 372 (26%). Product section: label row then 1 px hairline at y 80; thumbs x 235–467, main photo x 480–975, text x 1015–1405; padding-bottom 380 px. Section gaps 200–300 px.

## (d) Corners, borders
- Radius 0 on photos, buttons and boxes. Spec box 1 px border #5D3121, internal 1 px divider; button filled #5D3121, 44 px high, white text 16 px, tiny right triangle. No shadows.

## (e) Imagery (IMAGERY = photo)
- Macro hand-held product shots on seamless paper, soft window light; ratios: thumbs 0.74:1, main 0.65:1 (495 x 767), hero full-bleed 1.6:1. Radius 0. Thumbs stacked in one column left of the main photo; hero photo has no frame and fades into the ground. Pack shots on tan ground, a hand holding a bitten piece.

## (f) Decoration
- Rosette glyph 20 px before each section label; 1 px full-width hairline under label; 5-dot meter (10 px dots, filled #5D3121 vs outline); counter "2 — 7" with 54 px progress bar, bottom-right; fixed hamburger as two 50 px lines top-right.

## (g) Motion
- Load: wordmark path letters fade in left to right, 1.0 s, stagger .07 s, power1.out; loader fades .8 s power2.out; hero slides cross-fade/mask (maskShow top-to-bottom, 2.5–5 s, cubic-bezier(.16,1,.3,1)), 5 s interval.
- Hero scroll: pinned, scrub 1, scale to 1.1 from top centre; text and counter translate up by the hero height.
- Reveal-diagonal text: 135deg gradient mask 300% moved from 100% to 0%, 2 s cubic-bezier(.25,1,.5,1), delay .3 s, opacity 1.5 s.
- Product stack: pinned boxes absolutely stacked, next box enters with blur 10 px to 0 and mask gradient 47%/53% wiping top-down, scrubbed.
- Footer: inner layer yPercent -15 to 0, scrub 1 (parallax). Lenis lerp .08 smooth scroll.
