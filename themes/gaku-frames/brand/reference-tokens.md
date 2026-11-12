# Reference tokens (measured with getComputedStyle, 1440 x 900, headless Chromium)

Primary: https://daisukematsumoto.com/ (photographer portfolio, S5-Style gallery). Secondary: https://toshiyukihashimoto.jp/ (creative portfolio). Only values and descriptions are recorded; no assets, text or logos are copied.

## (a) Colour
| Role | Primary (daisukematsumoto) | Secondary (toshiyukihashimoto) | Share of first screen |
|---|---|---|---|
| Base | #FAFAFA | #FFFFFF | 0% (photos cover the screen) / ~85% |
| Text / ink | #1C1F23 | #202220 | <2% |
| Tint (pills, buttons) | #E8EBF0 | #EDEDED | <1% |
| Dark card | - | #202220 | ~3% |
| Accent | none (photographs are black and white) | #F4FF7E (one highlight line, a hairline tint) | <0.5% |
Saturated share of the first screen (HSL saturation > .35, lightness .15-.90): primary 0.0%, secondary 0.3% at rest, 2.2% scrolled. Far under the 30% cap.

## (b) Type
- Primary: PP Mori (licensed, not used), 400 only. Pills 12px / line 12px / letter-spacing .04em (0.48px); site label 24px / .04em; copyright 10px; body 16px, letter-spacing .04em. No uppercase.
- Secondary: ABC Diatype + YakuHanJP. Display headline 130.6px, weight 400, line-height ~0.92, letter-spacing -3% (-3.9px), uppercase, split into masked lines. Sub-headline 39.6px / 700 / -3%. Body 13.9px / 600 / -1.5%. Button 13.9px / 600 uppercase.
- Our mapping: Outfit (display, 300-500, tracking -0.03em, uppercase for the oversized word) and Nunito Sans (body).

## (c) Spacing
- Primary: header padding 20px; pills stacked with 8px gap; slides are 100svh squares, edge to edge, no container.
- Secondary: page gutter 20px; section height 900px (100vh) for the first screen and about; projects section 2780px; headline block width 1385px; content column starts at x 605-722 (42-50%); text column 565px wide.

## (d) Radius, borders, shadows
- Pills: radius 999px, padding 5px 8px 4px, background #E8EBF0, no border, no shadow; current/hover = ink background with base text.
- Secondary: buttons radius 2px, 36px high, #EDEDED; dark card radius 2px; photos radius 2-4px; hairlines 1px #E6E6E6; no shadows anywhere.

## (e) Imagery
- IMAGERY = photo. Primary: black-and-white street photographs, film grain, strong contrast, tonal range from deep shade to bright snow; mixed portrait (0.68:1) and landscape (1.5:1) frames shown as 954x954 squares with object-fit cover, 0 radius. Two photos side by side at 50/50 (seam at x=827 then 646, the strip drifts), no overlap.
- Secondary: bright, cool architectural interiors (3:2 and 0.76:1), 2-4px radius, positioned from x 605 (42%) and offset from the headline; 50-55% of the content width; hover mosaic reveal.

## (f) Decoration
- Primary: one white 24px label centred on the seam between the two photos, with a tiny arrow; 10px copyright bottom-centre; pill cluster top-left.
- Secondary: 1px diagonal hairlines (canvas) across the white ground, faint yellow tint on some; one vertical 1px rule 85px from the right edge with a small grey vertical name; dark docked card 565x196 at the bottom-right (x 840, y 684) holding a 191px image, title, sub-line, highlighted line and a "[ -> ]" tag.

## (g) Motion
- Primary: strip of slides translates horizontally (translate3d) while the label stays; strip fades in .55s cubic-bezier(.37,0,.63,1) after images decode; pills invert .4s cubic-bezier(.16,1,.3,1); page transitions via View Transitions (.25s page, .45s zoom cubic-bezier(.76,0,.24,1), .5s grid in).
- Secondary: headline split into lines, each line rises from a mask (a-up) with data-d stagger steps; page background lines drawn on canvas; mosaic reveal of project images on viewport entry; link text swap on hover.
