# Reference tokens: Nichicon V2H page (measured 2026-11-27, 1440x900, getComputedStyle)
Source: https://www.nichicon.co.jp/products/v2h/ (screens `ref/nichicon-v2h-first.png`, `ref/nichicon-v2h-full.png`, `ref/nichicon-first.png`). Only values and descriptions are recorded; no assets, copy or logos are copied. Japanese on the live page is not reproduced here.

## (a) Colour
- Ground #FFFFFF (about 70 % of page), pale band #F6F6F6 (video gallery band, tab panel), top utility bar #F5F5F5, ink #111111, body grey #555555 / #616161, hairline #E0E0E0 / #B1B1B1.
- Single saturated accent: blue #1450E1 (section H2s, active tab fill, link phrases, banner border); deep navy #113293 only in the logo and footer. Accent is text-and-thin-line use; no large blue fields.
- First-screen saturated share (S>0.5, V>0.25) measured on the 1440x900 screen: **1.1 %** (the blue headline inside the photo). Our cap: 15 %, row note: never above 30 %.

## (b) Type
- Family: Open Sans + Noto Sans JP, fallback system gothic. Body 16 px / 1.6, colour #111.
- H1 40 px / 500 / letter-spacing .02em (page title, plain, left, above the KV). H2 32 px / 700 / lh 1.55 (centred statement); section H2 30 px / 600 / lh 1.6 in accent blue. H3 24 px / 700 (feature titles) or 500 (product names). Small caption 14 px. Uppercase Latin only for breadcrumb.
- Weights 400 / 500 / 600 / 700 only. No display or serif face.

## (c) Spacing
- Container: 1440 outer, content 1340 (50 px side padding), max-width 1700 token. Tab box 1172 px wide centred.
- Sections: padding-top 90-100 px, bottom 0-100 px; page title block 184 px tall; KV 460 px full-bleed (1440 x 460, about 3.13:1). Header 134 px (56 utility bar + 78 main nav).
- Feature columns: 2 x 499 px with 110 px icon and 359 px text.

## (d) Radius, borders, shadow
- Radius 8 px on tab box and banner; cards radius ~4 px; everything else 0. Banner: 1 px accent-blue border. Header shadow 0 4px 16px rgba(0,0,0,.16). Tab box shadow 0 0 16px rgba(17,17,17,.10). Product cards: soft grey shadow, white caption strip below a #DADADF image field.

## (e) Imagery (IMAGERY: photo)
- Main images are photographic product-in-situ renders and documentary-style stills: unit on a pale vertical-board wall with dappled leaf shadow, vehicle cropped at the left edge, cables coiled. Cool grey-blue grade, high-key, soft daylight, no people in hero. Secondary images: flat line diagrams (house cutaway) and white-background product tiles.
- KV: one full-bleed 3.13:1 photograph, text group placed in the right 45 % over the pale wall, vehicle at the left 35 %. Product cards ~1:1.05 image + caption; 4:3 diagram inside tab panel with a play disc.

## (f) Decoration
- Short blue emphasis phrases inside bold black statement lines; 110 px monochrome line pictograms with three dotted bullets; full-width 1 px outlined notice banner with an illustrated icon at left and an external-link glyph at right; two-cell flush tab (active blue, inactive white, 60 px tall); breadcrumb in light grey caps.

## (g) Motion
- Every section after the KV carries `u-fade u-fade--up`: starts opacity 0; an IntersectionObserver (root viewport, rootMargin `-50px 0px`, threshold 0) adds `is-intersecting`, which runs `0.8s fadeUp ease-in-out forwards` (translateY 30px to 0, opacity 0 to 1). No stagger, no parallax, no library (jQuery 3.6 loaded for menus only).
