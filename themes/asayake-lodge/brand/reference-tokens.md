# Reference tokens: toyoko-inn.com (English top page), measured 1440 x 900

Method: headless Chromium, getComputedStyle plus pixel sampling of `ref/toyoko-first.png`. Values only; no assets, copy or logos reused.

## (a) Colour (first screen pixel share, 1440 x 900)
| Role | Hex | Share |
|---|---|---|
| Primary (hero field, buttons, links) | #004898 | 60% (saturated, S>0.5) |
| Secondary (info strip under hero) | #18305F | 11% |
| Ground (page) | #F8F8F8 / #FFFFFF | 29% |
| Pale tint band (About block) | #F0F4F8 | below fold |
| Text | #0D1A33 | - |
| Accent (building facade tan, underline) | #C8B8A0 | <2% |
| CTA bands (below fold) | #6D8FC4 and #6BA0C8 | rounded 16 px blocks |
Saturated first-screen share of the reference: 60.3%. Ours must stay under 30% (note) and under 15% (check-first-screen); translate the relationship (one strong field + deep strip + near-white ground), not the amount.

## (b) Type
Noto Sans throughout. Body 15 px / 1.6, colour #0D1A33. Section h2 21 px / 700 / lh 1.4 (no h1 in DOM; hero text is inside the banner artwork, tracked caps ~40 px). Header links 15 px / 700 in primary blue. Buttons 15 px / 700. Letter spacing normal except the banner lettering (wide tracked caps).

## (c) Spacing
Container 1120 px (x 160-1280). Header 64 px, fixed, white, no shadow, hairline underneath. Hero field 600 px high, banner image 1184 x 493 object-fit cover. Section rhythm ~100 px between rule-separated blocks; sections separated by 1 px rule #E3E8EE. Card gaps 24 px (location cards) and 24 px (offers). About block padding 48 px 0 on a pale band.

## (d) Radius, border, shadow
Photo cards radius 12 px; CTA bands radius 16 px; white info cards radius 12 px with 1 px border rgba(188,205,221,.6), padding 32 24; login button radius 6 px solid #00489D; outline button 1 px white, radius 6. No shadows on cards; soft drop shadow only on the product mockups (member card, phone). Header has no shadow.

## (e) Imagery
IMAGERY of the page overall: photo. The first-screen banner is a flat vector illustration (flat blue field, tan-and-white building, light trail from a jet), but it is one slot; all card slots below (5 location cards 205 x 355, 4 offer cards 262 x 175, 548 x 365 recommendation cards) are real photographs, saturated and daylit. Majority photo, so photo. Location cards: portrait 0.58:1, radius 12, object-fit cover, label bottom-left white 700 on a dark gradient scrim; fifth card peeks and a 40 px white circle arrow sits on the right edge. Offer cards: 1.5:1, radius 12, title below on white.

## (f) Decoration
Tan 4 px underline under one banner word; line-drawn 40th emblem (white, 2 px stroke, ~220 px) lower left of the banner; light trail = translucent white wedge fading toward the left, ~340 px long. Info strip under hero: 74 px high navy with 40 px white badge and external-link icon at far right. Icon tiles: 56 px pale squares radius 8 with line icons. Notice card: 1 px bordered r12 card with warning-circle icon, row divider lines and right chevrons.

## (g) Motion
Header nav fades in (CSS keyframe `fadein`, 0.4 s ease). Link hover: opacity .3 s ease-in-out. Hero banner and card rows are carousels with next buttons (loop, slide). No scroll-triggered reveal found: the 900 / 1800 / 2700 px screenshots show content already in place (IntersectionObserver is present but used by carousel and lazy images). Floating help button bottom-right with a close x; cookie panel bottom-left (ignore).
