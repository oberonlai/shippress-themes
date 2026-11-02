# Reference tokens (measured with getComputedStyle, 1440x900, 2026-11-02)
Primary: https://mud.co.jp/ (framed hero, ruled index rows, 2-up works grid). Secondary: https://andmade.jp/ (3-column catalogue, vertical captions). Values only; no assets, copy or logos reused.

## (a) Colour
| Role | mud.co.jp | andmade.jp | Area (first screen) |
|---|---|---|---|
| Ground | #F2F2F2 (body), #FFFFFF (index band) | #F6F6F4 | ~96% |
| Text / ink | #000000 | #000000, grey meta #8A8A86 | ~4% |
| Hairlines | 1px #000 frame; 1px ~#CFCFCF row rules | none | <1% |
| Accent | none in hero; works photos carry all saturation | none | 0% |
Saturated share of first screen: 0% in both. Our mapping: ground #F4F4F1 (paper white), ink #2B2D27, band #E6E8E0, accent sage #888C7B (<= 12% area, hairlines, tags, one filled chip).

## (b) Type
- mud: Public Sans (Latin) + a JP gothic fallback. body 18px/36px, tracking 0.04em, weight 400. h3 index title 80px/80px, 600, mixed case. h2 36px/46.8px 600 uppercase. nav 24px 600 uppercase. meta 13px 600. Mono 12-13px grey for tag lists.
- andmade: grotesque 16px/24px; lead 28px/1.0 500 tracking -0.01em; meta 14px 500; mono 12px dates.
- Ours: Figtree headings (600), Public Sans body; scale 14 / 16 / 28 / 36 / 80 (max token >= 4.25rem).

## (c) Spacing
- mud: page gutter 40px, hero frame inset 40px (1360 x 776, starts below an 84px header, 30px header padding). Index rows ~353px tall with 1px rule between; two columns: numeral at x=40, title at x=151, body at x=848. Works grid is 2 up, edge to edge, caption block ~190px under each photo.
- andmade: 3 columns at x=198 / 546 / 894 (pitch 348px), row pitch ~140-154px, left label rail x=24, right vertical caption rail x=1350-1416.

## (d) Radius, border, shadow
Radius 0 everywhere. 1px solid ink hero frame. Tag chips: 4px padding, #DDD fill, mono text. No shadows.

## (e) Imagery
IMAGERY = photo (decision). mud mixes two types: hero, About and Service intro use black-ink line illustration (topographic rings, stacked contour slabs, cloud-like scribbled lettering; single-weight 1-2px black stroke on #F2F2F2, no colour fill), while the Works grid is photography (2-up, ratio ~2.5:1 crops 720x~400, full bleed, no radius, saturated client photos). The photo grid is the content; the line art is decoration. We therefore use photography for content and draw our own thin contour/fibre lines as SVG decoration (not traced from the reference). Photo ratios ours: 3:2 and 4:5, radius 0, no masks.
andmade: no images on first screen (text catalogue; images appear on hover).

## (f) Decoration
- Hero frame: 1px black rectangle inset 40px, contains art; wordmark sits low-right inside the frame (x 919-1319, y 382-498 at 1440), tiny sub-line under it.
- Numerals "01." "02." 36px, light, at left of each index row.
- Header: logo left, nav centred, "Contact" + 8px filled dot at right; header sticky.
- Dot after link text (8px circle, right-aligned) with 1px underline rule for "view all" links.
- andmade: left rail label ("What Matters", 12px) and rotated 90-degree captions with dates at the right edge; underlined titles with grey 2-3 line meta.

## (g) Motion
- andmade: staggered translate 0.9s cubic-bezier(0.22,1,0.36,1), delays 0.12 / 0.23 / 0.34s (about 0.11s stagger), plus opacity 0.5s ease-out at 0.45s; sticky label rail with translate/opacity 0.5s.
- mud: header sticky; nav hover colour/opacity 0.15-0.3s cubic-bezier(0.25,0.46,0.45,0.94); transform 0.2s cubic-bezier(0.77,0,0.175,1); IntersectionObserver with rootMargin -30% 0 -60% 0 to highlight the section in view (nav state). No JS animation library on either site (mud: Alpine-style small main.js; andmade: CSS transitions).
