# Reference tokens (measured with getComputedStyle, 1440x900, headless Chrome, 2026-11-10)
Reference: https://andpad.jp/ (construction-management app, "one platform from management to the site"). Screenshots: `ref/andpad-first.png`, `ref/andpad-scroll-900.png`, `ref/andpad-scroll-1800.png`, `ref/andpad-scroll-2700.png`. Only values and descriptions are recorded; no assets, text or logos are copied.

## (a) Colour (stylesheet frequency + screenshot)
| Role | Reference hex | Share | Our transposition |
|---|---|---|---|
| Ground | #FFFFFF, band #F9F9F9 | ~80% | #FFFFFF, band #F4F6F8 |
| Text | #000000 | - | steel ink #2B3440 |
| Accent (CTA, badge, tab, dash links) | #EF3340 (129 uses), pressed/CTA #C8102E | first screen ~19% (HSV s>0.5 incl. blue photo) | hi-vis signal #E4572E, pressed #B8431F, <= 6% of first screen |
| Hairlines | #E6E6E6, #CCCCCC | - | #D9DEE3 |
| Photo cast | strong blue site-hoarding photo | ~12% | muted steel-grey/white high-key site photo |
Our palette keeps the reference relation (white page + one hot signal colour on small solid blocks + pale grey band) but the signal is orange-red against steel #3A4654, first-screen saturated share target <= 10%.

## (b) Type
- Heading family: a bold gothic (reference: Japanese gothic, weight 700; h3 24px/33.6px, hero H1 about 60px weight 700, tight). Body 13-14px/26px, weight 400, no tracking. Latin micro-labels (USE CASE 1, VIEW MORE) 12-13px uppercase, tracking about 0.04em.
- Ours: Albert Sans (headings, 600-700) + Inter Tight (labels/body), CJK Noto Sans TC / JP.

## (c) Spacing
- Containers 994px (centred text blocks) and 1067px (slider rows); hero text column starts x=110, hero image block x 690-1350.
- Section rhythm: ~100-120px between sections; case slider cards 283px wide, 72px gutter.
- Header 84px tall at scroll (logo tile 84x84), 96px at top.

## (d) Corners, borders, shadow
- Radius 0 on CTAs, tiles, cards, photos (square, flat). Header with a 1px soft bottom shadow only when stuck.
- Outline button: 1px #C8102E border, red text, chevron. Quote heading: 4px solid black left bar, 30px left padding.

## (e) Imagery - IMAGERY: photo
Main imagery is real photography (site workers, houses, interiors) plus UI screenshots in 304x171 (16:9) cards with a red rounded-square icon tile (68x68, radius ~12) overlapping the card's bottom-right corner.
- Hero: three vertical photo slices (about 213px wide, 540-ish tall) from one image, side by side with the middle slice dropped about 50px lower, 0 gap; a 175px round red badge straddling the lower-left; a 28px solid red square floating on the middle slice; a bold banner strip crossing the lower third of the slices.
- Case cards: 283x187 photos (3:2), label above, title above photo, one-line text below.

## (f) Decoration
- Round badge Ø175 with thin white ring offset, red square 40px, header tile 84px solid red with white mark, 2-cell flush CTA block (150x50 + 150x50) pinned top-right, laurel-wreath figure badges, 32px red growing underline (borderToLong, 0 to 32px), "VIEW MORE" + 20px red dash, red left tab (56x38) hanging at the viewport edge as section marker.

## (g) Motion
- `data-inscreen` fade-in-up: opacity 0 to 1 + translateY about 30px to 0, 0.5s, 51 elements, triggered by IntersectionObserver-style class `is-inscreen`.
- Rectangle wipe on sub-headings: red `::before` rectangle scales 0 to 1 then 1 to 0 from origin 0 to 100%, 0.4s cubic-bezier(0.8,0,0.5,1), 0.6s delay (5 headings).
- Header slides down (translateY -80px to 0, 0.5s) once past the first screen; 28-step keen-slider carousel with arrows; marquee ticker of customer lines; gradient bar background-position loop (gradation).
