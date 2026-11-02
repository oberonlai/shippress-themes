# Reference tokens (measured, https://www.ad-hzm.co.jp/lp/renewal/ at 1440x900; values only, no assets copied)
## (a) Colour
- Text ink #3E3A39 (also footer ground, label strips). Paper ground ~#F9F9F9 with faint grain. Grey band ~#E4E4E4 with a faint 24px grid. Hairline #3E3A39 1px.
- Accent: one CTA cell with teal-to-blue gradient (~#1A5F86 to #1B7A74), about 3% of first screen. Saturated share of first screen < 5%.
- Area: paper 62%, illustration/photo 25%, ink type 10%, accent 3%.
## (b) Type
- Latin/JP sans (Zen Kaku Gothic New + YakuHan). Body 18px / lh 36px (2.0) / weight 500, colour ink. Nav 15px 700. Hero headline ~84px bold, tight; Latin eyebrow ~22px with ~0.6em tracking uppercase; asset title ~34px 700 white on ink strip; "ASSET" micro label 12px serif caps + 32px numeral.
## (c) Spacing
- Outer hairline frame inset 12px; header 132px tall on first screen, 48px after scroll; grey band inset 36px each side; cards 1200px wide, 528px tall, sticky top 210px; text column padding-left 72px, ~520px measure; footer padding 96/48/110.
## (d) Radius / border / shadow
- Radius 0 everywhere. 1px ink borders. No shadow. Small green crosshair ticks (9px) at frame corners.
## (e) Imagery
- IMAGERY: photo (hero is a row of isometric colour-pencil building drawings, but every content block is a documentary photo; photos hold the majority of image positions). Hero drawings: fine ink linework, light watercolour wash, white ground. Photos: 1:1 (600x600) tiles in works, 528x528 card photos (square-ish, flush left in card), 384x576 portrait (2:3) in intro with a vertical "ABOUT" tab on its left edge. No masks, no rounding.
## (f) Decoration
- Vertical micro-labels (COMPANY / NAVIGATION / ISSUE 01 / ABOUT) in 11px serif caps set sideways, in boxed tabs on frame edges. Corner "ASSET 01" tab 112x50 hanging from card's top-right. Ink highlight strips behind each headline line. Boxed outline button with a split arrow cell.
## (g) Motion
- GSAP ScrollTrigger: cards sticky at 210px; progress across the list swaps photo frames inside each card (class is-active); hero row drifts left continuously; mobile uses 5s interval. Header shrinks after hero.
