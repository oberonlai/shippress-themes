# Reference tokens: Nichii Gakkan (https://www.nichiigakkan.co.jp/), measured 2026-10-31 at 1440 px with getComputedStyle
Only values and descriptions. No assets, text or logo are reused.

## (a) Colour (area share of the 1440 x 4365 page; first-screen saturated share 3.8 %)
| Role | Ref hex | Share | Note |
|---|---|---|---|
| Base | #FFFFFF | ~38 % | header, hero strip, 3-icon link row |
| Text | #333333 | - | body 15px / 26px |
| Band cream | #F6F6EB | ~27 % | services band (1204 px tall) |
| Band blue | #D6E6F1 | ~26 % | news band holding white panels |
| Notice band | #F5DBD2 | 3 % | full-width "important notice", outlined circle-i icon in #CD491C |
| Footer grey | #F0F0F0 | - | |
| Main link blue | #014B80 / #016FBD | text | news links |
| Accent | #CD491C | dots, small chips | round "play" dot before every link |
| Card rule colours | #518DE0 blue, #F07690 pink, #7DC21B green, #EE9A40 amber, #EA5504 orange | 3 px top rule + title | one colour per service |
Secondary (MOS recruit, https://recruit.mosc.co.jp/): saturated red #E50012 + green #00C48C, 39 % first-screen saturation: **only structure is borrowed, never its colours**.

## (b) Type
Noto Sans JP, 15 px / 26 px, weight 400; h1 30 px 700; h2 22 px 700 (lh 38 px) for section titles, 18 px for panel titles, 14 px for footer group title; letter-spacing normal. Hero headline: very light weight (about 300), about 44 px, wide tracking (~0.1em), blue (#2C6FB7-ish) on the photo, two lines at the right.

## (c) Spacing
Container 1100 px (x 170 to 1270). Hero photo 1400 x 473 inset 20 px each side under a 100 px two-row header. Banner strip: white panel 1120 wide, 4 tiles 247 x 85, gap 23, overlapping hero bottom by ~35 px. Notice band 132 px tall. Services band padding ~30 top; cards 345 wide, gap 22, 3 + 2 grid. News band: white panels 1100 wide, 40 px apart, panel padding 20.

## (d) Radius, border, shadow
Cards radius 15 (14 uses), 8 (8 uses), 4. Card top rule 3 px coloured. Chip: 1 px outline, radius 12, 11 px text, orange or blue. Shadow 3.5px 3.5px 4px rgba(0,0,0,.1) (offset down-right, soft). Hairlines #C5C5C5.

## (e) Imagery
IMAGERY: **photo** for the key visual (soft-focus documentary photo: a child resting against an adult, high-key, pale sea-blue ground, shallow depth). The service cards and icon row use hand-drawn line + flat wash illustrations (ink-teal line, pastel fill); these are small (90-130 px) spot illustrations, fewer pixels than the photo and the banners, so the page counts as photo-led. Hero 3 : 1 crop (1400 x 473), radius 0. Banners 2.9 : 1 photos with text baked in, radius 0, 1 px hairline. Spot illustrations free-standing, centred above the card text, no frame.

## (f) Decoration
Round "play" dot (Ø16, #CD491C or card colour) before every link and card title. Outlined circle-i in notice band. A large pale-blue feather (about 220 px, two layers, rotated 20 deg) sits at the junction of the cream band and the white row, partly over each. 3-column icon row separated by 1 px vertical rules (196 px tall). Carousel dots Ø12, blue active.

## (g) Motion
Hero: carousel-fade, opacity 1 s cubic-bezier(.4,0,.2,1), 3 slides + pause button. Hover: transform/background/all .2 s cubic-bezier(.4,0,.2,1). Page-top button fixed bottom-right. No scroll reveal, parallax or counters (jQuery run.js only).
