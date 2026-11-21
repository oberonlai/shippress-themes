# Reference tokens (measured with getComputedStyle, 1440x900, 2026-11-22)
Primary reference: https://kakimori.com/ (independent stationery shop, product-photo led). Secondary: https://www.ito-ya.co.jp/ (category / nav structure only).

## (a) Colour (kakimori)
| Role | Hex | Area |
|---|---|---|
| Ground | #FFFFFF | ~70% of page |
| Text | #333333 (body), #1F1F1F (dialogs) | text |
| Product tile ground | #F6F6F6 (square product photos on pale grey) | ~8% |
| Hero photo | desaturated warm brass / grey-lilac (#8C8A92 to #E8E6E2) | first screen ~100% photo, saturated share < 8% |
| Accent | #FF5800 orange, only as 1px title underlines, 1px tagline rules, active language link | < 1% |
| Banner photo tints | indigo/teal/blush product macros inside one r8 band | ~4% |
Relationship to carry over: white page, near-black text, almost no UI colour, accent confined to hairlines; photographs carry all colour. Ours: slate #5E7380 as the single hairline/accent colour in place of orange.

## (b) Type
- Body: Zen Kaku Gothic New 16px / 28.8px (1.8), weight 400, ls normal, #333.
- Section titles: EB Garamond (serif) 28px / 35px, ls 1.4px (0.05em), weight 400, centred, 1px accent underline hugging the text (width = text).
- Hero slide caption: 16px label "New Arrival" + 20px title, ls 0.8–1px, serif; grey "View more" button 150x32.
- Card names 14px centred, price 14px under it. Logo wordmark 34px script.
- Ours (sans direction): Manrope / Public Sans; titles light weight, tracking 0.04em, same centred + underline lockup.

## (c) Spacing
- Hero 1440x900 full-bleed (we convert to product-grid, below-photo title). Header 28px promo strip + transparent bar.
- Section blocks 110–580px tall; vertical gaps ≈ 80–128px between blocks; content container 950px (banner, cards 4 x 188px at 238px pitch); narrow text column 670px (story block).
- Product grid 4 columns, gap ≈ 50px between 188px tiles; article cards 207px wide, 4 columns.

## (d) Radius / border / shadow
- Photo banner r8; product tiles r0; buttons r0 flat grey #8A8A8A fill with white 13px label; underline 1px accent; no shadows except a soft header shadow under the sticky bar (0 1px 8px rgba(0,0,0,.06)).

## (e) Imagery
IMAGERY: photo. Primary imagery is photographs: macro product shots on pale reflective surfaces (brass pen, ink bottles, paper stacks), square cut-out-looking product tiles on #F6F6F6, flat-lay article thumbs. Secondary: hand-drawn ink line sketches (street scene, category icons) used as small accents; we do not reproduce them, we draw our own simple SVG line icons for category row. Ratios: hero 1.6:1, banner 3.33:1 (950x285) as four abutting panels r8, product tiles 1:1, article thumbs 1.5:1, portrait slide 0.56 on mobile.

## (f) Decoration
- Short vertical tagline set between two 20x1px accent rules above and below (rules 20px wide, 1px).
- Centred 1px underline under each section title (full text width, accent).
- Prev/next circle arrows 40px, 1px grey outline, flanking a one-line notice.
- Category row: 6 line icons ~100px with centred 14px spaced labels.

## (g) Motion
- Hero slideshow: crossfade between full-bleed slides, caption bottom-left. Scroll reveal: IntersectionObserver (rootMargin 0 0 -50px 0), `fade-in-up` translateY(30px → 0) + opacity .01 → 1, stagger `--animation-order * 75ms`, one-shot (unobserve). Zoom-fade variant scales the image inside the card. No parallax, no marquee.
