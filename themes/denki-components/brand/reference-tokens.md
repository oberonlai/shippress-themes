# Reference tokens (stage 1; measured with getComputedStyle at 1440x900, headless Chrome; values only, no assets copied)
Main reference R1 = Nitta DuPont corporate home (https://www.nittadupont.co.jp, S5-Style /10886/, industrial materials maker). Support R2 = elec Inc. home (https://elec-inc.com, S5-Style /11213/). Note: R1 html font-size is fluid, so rem values below are given as rendered px.

## (a) Colour (R1, rendered)
| Role | Hex | Area share (first screen + page) |
|---|---|---|
| Ground (cool paper, vertical grain texture) | #F0F0F8 / #E8F0F0 / #F8F8F8 (quantised samples; real field is a soft 2-stop gradient) | ~75% of every scrolled screen |
| Hero field | #C8E0F0 -> #C0D0F0 gradient, white ellipses | first screen only (27% + 21% white) |
| Header bar | #FFFFFF | 80px strip |
| Ink (body, headings, nav) | #13253B (rgb 19,37,59) | ~95% of text nodes |
| Accent blue | #2E5DBC (rgb 46,93,188) | <1%: Scroll cue, arrow disc, active language, hairline tint |
| Hairline | rgba(52,96,149,.30) 1px | rules between product rows |
| Spot colours (hero art only) | blue #4A8CF0, orange #E8944A, green #8CC85A | ~13% saturated pixels on first screen, 0.1-3.8% on every later screen |
R2: ground #101010 (45% of scrolled screens), orange #E86010 (button/logo/label, ~2.5%), night-blue gradient hero (60% saturated, not usable).

## (b) Type (R1)
| Role | Family | Size | Weight | Line-height | Tracking | Case |
|---|---|---|---|---|---|---|
| Hero statement lines | Noto Sans JP | 24px | 400 | 55.2px (2.3) | normal | - |
| Hero headline | Noto Sans JP light, ~88px | 88px | 300 | ~1.2 | 0 | - |
| Product row title (h3) | Noto Sans JP | 28px | 600 | 35.84px (1.28) | 0 | - |
| Row index label "(01) Polishing Pad" | Satoshi Medium | 14px | 500 | 28px | -0.28px | Title case |
| Body in rows | Noto Sans JP | 14-15px | 400 | 28px (~1.9) | 0 | - |
| Nav / buttons | Noto Sans JP | 13px | 500 | 13px | 0.04em | - |
| Section head (headlineLv1) | Noto Sans JP | 19.5px label + large display | 400 | 1 | - | - |
Display English: Satoshi (geometric grotesk). R2: Syncopate (wide caps, ~90px marquee) + Noto Sans JP 14px/2.3.

## (c) Spacing (R1)
- Section padding: homeProduct 100px top and bottom; gap before Interview 437px; footer margin-top 243px.
- Container: header wrap 1380 (30px gutters); intro wrap max 1200 (1080 measured); interview inner 420; product rows span the full 1380.
- Product row: pitch ~537px (photo 495 + 42 gap), text column starts x=900 of 1440 (62.5%), photo x=30 to 776 (54%), column gap 124px.
- Header height 80px; nav items 13px with 15-18px side padding.

## (d) Radius, borders, shadow (R1)
- Photo radius 8px; pill button radius 29px (h58); header no radius.
- Borders: 1px hairline rgba(52,96,149,.3) between rows; button outline 1px pale blue-grey; dotted 1px underline under the "もっと見る" text link.
- Shadows: none anywhere.

## (e) Images (R1)
| Image | Ratio | Radius | Mask/clip | Placement / width share |
|---|---|---|---|---|
| Product row photo | 746x495 = 1.51 (3:2) | 8px | none (reveal by clip-path polygon wipe L->R) | left, x=30, 54% of container, alternate rows kept left |
| Interview portraits | 259x346 = 0.75 (3:4) and 216x292 = 0.74 | 8px | none | scattered at different x/top (x=114 and x=890), ~15-18% width each |
| Hero art | full-bleed field | - | white ellipses with grain | 100% x ~820px |
R2: grayscale case photos, mixed ratios (1.5, 0.66, 1.6), no radius, widths 160-500px scattered at differing y (offset 0-85px), caption 14px + hashtag under each.

## (f) Decoration (R1/R2)
- Row index: "(01) Polishing Pad" 14px blue Satoshi above h3, 16px gap.
- Round arrow disc: 34px circle #2E5DBC, white 12px arrow, sits inside the right end of a 232x58 outline pill (padding 32px left, 10px right).
- Hairline 1px full-width above each product row (1380 wide).
- Scroll cue: "Scroll" 14px Satoshi blue + 12px chevron, bottom centre of hero.
- R2: 96px orange disc "CONTACT" with a 140px ring of rotating 10px wide-tracked text, fixed top-right (x=1294-1390, y=50-146); small uppercase wide-tracked section label ("STORY") 20px orange above body.

## (g) Motion
| Effect | Type | Duration | Delay / stagger | Easing | Distance |
|---|---|---|---|---|---|
| js-fadeup (headings, paragraphs) | IntersectionObserver adds `is-shown` (rootMargin 0), CSS transition | 1100ms | 100ms base | easeOutQuint cubic-bezier(.22,1,.36,1) | translateY 40px (2.5rem) |
| js-fadeups (children of a group) | same | 1100ms | +140ms per child, up to 20 | easeOutQuint | translateY 24px (1.5rem) |
| js-fade (images, art) | same | 1800ms | 100ms | easeOutCubic cubic-bezier(.215,.61,.355,1) | none |
| js-mask / js-masks (photos, rows) | same, clip-path polygon 0 0,0 0,0 100%,0 100% -> full | 1200ms | 200ms + 116ms per child | easeInOutQuint cubic-bezier(.86,0,.07,1) | none (left-to-right wipe) |
| Hero page-2 reveal | scroll listener sets `--mask-offset-y` (rAF) | scroll-linked | - | linear | whole viewport |
| Marquee modules | CSS custom-property driven loop | speed*20ms per item | - | linear | - |
| Smooth scroll | Lenis | - | - | - | - |
R2: GSAP ScrollTrigger `scrub:0` horizontal drift of the photo field; CSS glints `light-move2` 4-12s ease-in-out infinite (+-6px); eases cubic-bezier(.19,1,.22,1) 38x and (.165,.84,.44,1) 33x; marquee headline loop.
