# Reference tokens (measured with getComputedStyle at 1440x900, Chrome headless)
Main reference: https://buncomo.jp/ (web magazine of a university faculty). Secondary: https://college8.jp/ (grid-line rails only).

## (a) Colour
| Role | Hex | Share of first screen |
|---|---|---|
| Base (warm paper white) | #F8F6F3 | ~55% |
| Panel (arc panel, cards) | #FFFFFF / #F1ECE6 | ~25% |
| Ink (text, hairlines, borders) | #000000 | text/lines ~8% |
| Ticker tint | #E0D3BF | ~1% |
| Muted text | #AAA8A7 / #787672 / #999691 | text |
| Accent (soft gradient glow at arc foot, orange to green) | blur gradient | ~8% (saturated share ~8%) |
Ours is deliberately cooler than the reference's warm paper: mist `#F3F5F2`, evergreen `#3E5646` replaces the glow.

## (b) Type
- Latin display and numerals: Be Vietnam Pro 300/700. Month 29px/700, day 48px/700, year 16px/700 ls .1em, weekday 21px/700 ls .1em. Ticker 23px/300 ls .1em.
- CJK/body: Noto Sans JP 400/500/700; body 13.5-15.5px, lh 27-36px, ls .05-.16em; h2 23px/700 lh 54px; card title 18-19px/700 lh 35-43px; section copy 23px/700 lh 46px ls .1em.
- Labels 11.6px/500 ls .1em; tags 11.6px muted; button text 14.5px/700 ls .38em.
- Ours: Newsreader (display) + Source Serif 4 (body); headings >= 4.25rem for the hero word only.

## (c) Spacing
- Header 178px tall incl. logo, mascot band and date stamp; ticker strip 63px under it between 1px ink hairlines.
- Section padding ~97px top; faculty section 1440x587; event section 897px.
- Left text column 391-425px at x 87; right panel starts x ~533 (arc), slider 484px wide; 3-col card grid with 70px gaps (card 332px).

## (d) Radius, border, shadow
- Pills r100px with 1px #000 border (button 287x48, tag buttons 141x29); circle arrows 48px r50% 1px border; cards r10px with 1px ink border; photos r14-18px; no shadows; dashed 1px rule under section labels.

## (e) Imagery
IMAGERY = photo (event/report photographs are the main images; line-art cat/book character is a small decorative accent, under 10% of image area). Photo: documentary, bright, 16:9 slider image r16; card photos 1.7:1 r16 with a bordered text card overlapping the lower 40%; thumbnails 96x56 r4 in rows. Line-art accent: black single-weight outline, flat, no colour.

## (f) Decoration
- Giant circle edge: a ~1100px-diameter white disc whose left arc is a 1px black line, bleeding off the top and right, over the cream ground; soft orange/green blurred gradient glow sits at the arc foot (~300px).
- Ticker bands: Latin light caps marquee in tan between ink hairlines; second ticker of tags (# keywords) in 23px/300 italic.
- Vertical rail: 87px-wide left rail with 1px right border, label set vertically ("WEB MAGAZINE") with a small icon on top.
- Vertical rotated date at the left of each card, 11px muted.
- Dashed 1px rule under every section label; round "PAGETOP" rotating text badge bottom-right (r~50px).
- College8: 1px dashed vertical column lines every ~245px across the whole page, with a ghost rotated wordmark column at the right edge.

## (g) Motion
- Tickers: `loop` keyframes translate(0 -> -100%), linear infinite, paused until `.is-inview`, pause on hover.
- Text masks: `.u-mqw-up/down` mask-wipe reveals on headings (hidden on first paint, slide up), cubic-bezier(.455,.03,.515,.955) used 58 times, 0.6-0.8s.
- Hero slider: Splide, fade/slide, 5 slides, pause button.
- PAGETOP badge: `circle` keyframes rotate 1turn; arrow `scale 1 0` bounce.
- College8: Lenis smooth scroll, per-character boxed reveal, cubic-bezier(.165,.84,.44,1) (35 uses), .19,1,.22,1.
