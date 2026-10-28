# Reference tokens (measured with headless Chromium, 1440×900, 2026-10-28)
Main reference: Nikon Z5IIC special page https://nij.nikon.com/cms/sp/z5_2c/ (S5-Style listing). Secondary (structure only): https://belega-cellcure.com/ (S5-Style listing). Values only; no assets copied.
## (a) Colour (first screen = 50/50 split: photo left, white panel right)
| role | hex | share |
|---|---|---|
| base | #FFFFFF | ~48% of first screen (right panel) |
| photo (high-key, warm, mostly neutral) | n/a | ~50% |
| text / ink | #000000 (body), #30353D (secondary) | <2% |
| section ground | #ECE6E6 (feature band), #EBEBED (footer band), #F4F2EB | feature3 band full width |
| line / hairline | #CFCAC2, 1px black circle outline | <1% |
| accent | none beyond the photo (a pink donut ≈ 2% saturated pixels) | saturated share of first screen **2.0%** (S>0.5, V>0.25) |
## (b) Type
Family `"Noto Sans JP", Hiragino Kaku Gothic Pro` (Gothic), `letter-spacing: 4px` on everything (0.25em at 16px), no text-transform on JP; Latin side labels in a small italic serif (vertical, rotated 90°).
| level | size | weight | line-height |
|---|---|---|---|
| body p | 16px (1rem) | 400 | 28.8px (1.8) |
| h3 feature title | 20px (1.25rem) | 400 | 40px (2.0) |
| h2 lede | 14px | 400 | 35px (2.5) |
| tagline in hero | ~36px, weight 700 | | |
## (c) Spacing
Section padding 120px top / 90px bottom (info band); feature band padding-top 40px; text column ≈ 350px wide at x=150; photo row full-bleed with 30px gaps; hero split exactly 50/50 (720px each).
## (d) Radius, border, shadow
Radius 0 on photos; round 100% only for the menu button (82px circle, 1px #000 outline) and the 40px arrow circle (fill #F4F2EB-ish). Corner-bracket CTA: four 22px L-brackets, 1px black, no fill. Shadow: only `2px 2px 10px rgba(0,0,0,.1)` on a floating promo (not borrowed).
## (e) Imagery
IMAGERY = photo. Candid natural-light photographs, high-key, soft focus backgrounds. Hero photo: left half, full height, aspect 720×900 (4:5), no radius, no mask. Gallery row: 5 photos of mixed aspect (230×305 portrait, 295×195 landscape, 230×305 …), bottom-aligned **staggered vertical offsets** (≈ 30–60px differences), full-bleed edge to edge. Product shots: two cut-out camera photos side by side on white, ~210px wide each, centred under the logo in the right half.
## (f) Decoration
Vertical side label (rotated 90°, italic serif, 13px, black) fixed at x=40: `Z5IIC / Features (04) / Imaging Recipe`; tiny thumbnail strip beside it; corner-bracket CTA box ~420×96 with round arrow; 82px round hamburger fixed top-right.
## (g) Motion (IntersectionObserver + GSAP, bundled)
- `.ani_text`: opacity 0→1 .6s ease-in, translateY 20px→0 .6s ease-out, blur 20px→0 .6s ease-out.
- `.ani_img`: scale 1.2→1 1.5s ease-out, opacity .8s ease-in.
- `.ani_fade`: mask-position wipe (150° gradient, mask-size 300%) 1.5s ease-in, diagonal soft wipe.
- `.ani_char`: per-character GSAP, duration .65s, ease power2.out, stagger .03s/char.
- Trigger: IntersectionObserver rootMargin `-20% 0px` (some `-50% 0px`), threshold 0, fires once (unobserve).
