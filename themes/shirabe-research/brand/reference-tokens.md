# Reference tokens — W Bridge Advisory (https://wbridge-advisory.co.jp/), measured 2026-10-26 at 1440×900 with getComputedStyle
Only numbers and descriptions; no assets, copy or logo taken. Secondary reference KVC Partners (https://www.kvcp.jp/) noted where useful.

## (a) Colour
| Role | Hex | Area share (page) | Use |
|---|---|---|---|
| Base | #FFFFFF | ≈ 62% | page ground (first screen ≈ 55%) |
| Ink / dark band | #221E1F (34,30,31) | ≈ 24% (hero media block, About, Numbers, Recruit, footer) | text, buttons, dark bands |
| Warm paper band | #F2F1E9 (242,241,233) | ≈ 7% | Column (journal) section |
| Muted text | #A09E9F | text only | English eyebrow labels 12px |
| Accent | none (monochrome) | 0% | no saturated colour in chrome; colour only inside photos |
First-screen saturated share (S>0.5, V>0.25): 0.0%. KVC: light grey #E2E2E2 ground, ink #111, 0.0% saturated, one green→yellow gradient orb inside deeper sections.

## (b) Type
| Role | Family | Size | Weight | Line height | Letter-spacing | Case |
|---|---|---|---|---|---|---|
| Body | YakuHanJP / Noto Sans JP | 16px (1rem) | 400 | 28.8px (1.8) | 0.45px | – |
| Small body (hero lead) | same | 14px | 400 | 22.4px (1.6) | 0.45px | – |
| Hero headline (3 lines) | same | 50px | 800 | 62px (1.24) | 4px | – |
| Section English title | TASA Explorer (grotesk) | 90px | 500 | 90px (1.0) | 0.45px | UPPERCASE |
| H3 lead | Noto Sans JP | 38px | 600 | 53px | 0.45px | – |
| Service title | Noto Sans JP | 32px | 600 | 38.4px | 0.45px | – |
| Eyebrow label | TASA Explorer | 12px | 500 | 12px | 0.45px | upper, #A09E9F |
| Nav link | Noto Sans JP | 14px | 700 | 16.8px | 0.45px | – |
| Numbers figure | TASA Explorer | 150px | 500 | 135px | −3px | – (small unit suffix, label vertical-rl 14px) |
KVC: Inter, hero 72px/1.4 weight 500, nav list 24px grey #BBB with active #111.

## (c) Spacing
Container max 1540px, side padding 50px (content 1340 at 1440). Header 157px tall (logo left, centred nav, pill button + 50px square menu right). Hero text row 232–412 then 80px gap to the media block. Section padding: Numbers 100px top/bottom; Case study / Column 140px top, 140px bottom; About grid bottom 200px. Two-column hero: headline col 721px, 1px vertical hairline at x≈821, lead col 460px from x 872, gap 50px. Service list = 2 columns 630px, gap 80px, second column dropped 330px.

## (d) Radius, border, shadow
Buttons 3px radius, 50px tall, ink fill with a 50px arrow cell separated by a 1px rule; image radius 3px; menu button 50×50 outlined 1px; news pill 1px outline, 50px tall. No box-shadow anywhere. Hairlines 1px rgba(34,30,31,.15).

## (e) Imagery
IMAGERY: photo. Main image type is photography (people at desks, hands over a laptop with charts, overhead meeting table, dashboard mock-ups), bright high-key studio light, neutral grey backdrops, 2-3 colours max; hero is a looping video block on ink.
| Image | Ratio | Radius | Mask / clip | Placement |
|---|---|---|---|---|
| Hero video block | 1340×900 (≈3:2) | 0 | none; width animates to 100vw on scroll | below the headline row, full container |
| Service photos | 630×550 (≈8:7) | 3px | none; inner image scale 1.6→1 | 2 columns, right column offset 330px down |
| Case-study thumbs | ≈3:2 small | 0 | none | list rows with thumb left |
| Numbers photos | ≈4:3 | 0 | none | float on the dark band, slow marquee |
Overlap: none. Page uses ≥8 photos.

## (f) Decoration
1px hairline between hero headline and lead (full height 180px). Numbers: giant 150px figures with vertical-rl Japanese caption 14px to the left and a small unit; "IN NUMBERS" 36px white label top-left. Eyebrow "SERVICE" style: 12px grey English label above Japanese titles. Arrow-in-square buttons 50×50.

## (g) Motion
See reference.md scroll table. Hover: all .2–.4s ease (image scale 1.02, arrow link). GSAP 3.12.5 + ScrollTrigger + SplitText; jQuery rAF scroll handler adds `view-is--shown`; slick used as linear marquee (12s / 16s per loop); barba.js page transitions.
