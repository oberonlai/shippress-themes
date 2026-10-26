# Reference tokens: measured values (stage 1)
Main reference **https://saab-group.jp/** (denim processing factory, WordPress + GSAP ScrollTrigger + Splide, measured 1440×900 headless Chrome, getComputedStyle). Secondary **https://occkwork.com/** (Studio.design/Nuxt, hairline columns + shaped crops). Only numbers and descriptions; no assets, text or logos copied.

## (a) Colour (saab)
| Role | Hex | Area |
|---|---|---|
| Text / dark base | #00161E (ink navy) | text everywhere; full dark bands (Sustainability, Recruit, Movie) ≈ 35% of page height |
| Ground | #FFFCF5 (page) / #FEFAEF (light text on dark) | ≈ 45% of page height |
| Accent (headings, eyebrows) | #0389C5 | H2 section labels, "(EYEBROW)" lines, ≈ 2% area |
| Photo colour | orange #E9772B and blue #2E7BD0 machines in hero | first screen saturated share ≈ 20% (measured on screenshot, S>0.45) |
| Header hairline | rgba(254,250,239,.1) 1px dashed vertical guides at x ≈ 267/701/1023/1353 | decorative |
Secondary (occkwork): ground #FFFFFF, band #F7F7F7, text #333 / #6A726D / #88908B, 1px column lines #ECECEC at x 144/432/720/1008/1296 (5 equal 288px columns), coloured H2 words (#228345 green, #4E84BA blue, #E8BA00 yellow); first-screen saturated share ≈ 24% (yellow bracket only).
## (b) Type (saab)
- Families: Jost (Latin display, 100–900) + Zen Kaku Gothic Antique 400/700 (JP body). Body 16px / 30px (1.875) / ls 1.28px (0.08em), colour #00161E.
- Hero line "WE ARE / SAAB": Jost 500, **288px** (≈ 20vw) / lh 288px, ls .9px, uppercase, colour #FEFAEF, two lines, box 1083×576 at x 171 y 162; JP sub-line 24px (min(1.6vw,2.4rem)) weight 900 right of the second line.
- H2 section label: Jost 600 **46px** / 63.5px, uppercase, ls 1.28px, colour #0389C5 (dark sections: cream). Small H2 (movie/recruit): Jost 700 24px, ls 1.92px.
- Big statement paragraph: JP 32px / 60px lh, weight 700, ls 2.56px. Movie heading Jost 600 70px / 99px.
- H3: JP 32px / 44px, 700. Eyebrow "(CONTRACT MANUFACTURING)": Jost 600 ~18px uppercase #0389C5. Nav: Jost 600 18px uppercase ls .32px. Lang links 14px 700.
## (c) Spacing (saab)
- Container 1200px (x 113–1313) in a 1425 viewport; two-column rows 456px text / 636px photo (gap ≈ 108), photo x 677.
- Section padding-top: about 125, movie 207, service 160, sustainability 300, interview 80, recruit 316, news 160; padding-bottom 142–207. Header 80px (`--headerHeight`).
- Secondary: 5 × 288px columns; section padding-top 140–280; H2 words 120px Montserrat 200 ls 6px.
## (d) Shape (saab)
- Photos radius **0**, no shadow, no border. Buttons: radius 10px, 62px tall, padding 16/20, 2px solid #00161E fill (primary) or transparent (outline "__anchor") with a 1px divider + arrow icon at right. Round contact button 58px circle, 1px cream border, bg rgba(255,255,255,.1). Round play button 180px circle 1px border.
- Secondary: photos radius 40–50px, triangle clip, arch/pill clip, full-round pills 18px (nav chips 31px tall, 1px rgba(106,114,109,.5)); cards radius 16 with 1px #ECECEC on #F7F7F7.
## (e) Imagery
**IMAGERY: photo** (documentary, grainy, slightly under-lit film look; people at work in the plant, cloth piles, machines; ≥ 90% of image area).
| Image | Ratio | Radius/mask | Placement |
|---|---|---|---|
| Hero slider (4 slides, cross-fade 2s) | 1.60 (1425×900) full-bleed | 0 | behind giant type |
| About pic1 | 0.85 (342×400 portrait) | 0 | right column x 971 |
| About pic2 | 1.44 (470×327) | 0 | left x 113, offset below pic1 |
| Service rows | 1.63 (636×391) | 0, wipe-up reveal | right column, rows alternate? (both right here) |
| Sustainability full-bleed | 1.58 (1425×900) | clip-path 25%→0 on scroll | full-bleed band with dark navy overlay |
| People slider cards | 1.75 (400×229) | 0 | horizontal, bleed past viewport |
## (f) Decoration
- 1px dashed vertical guide lines at 4 columns across the whole page (opacity ≈ .1–.2), fixed, behind content.
- Deco lines (`js_deco_line`): large outline strips 400×229 moved horizontally ±5–20% by scroll (scrub).
- "(EYEBROW)" in parentheses above H3. Buttons with divider "|" and arrow.
## (g) Motion (saab; GSAP ScrollTrigger, no Lenis)
| Effect | Trigger | Duration / delay / ease | Distance |
|---|---|---|---|
| Hero heading letters in | on load, `opening()` timeline | ≈ 1.2s stagger per line, power4.out | 100% line height (clip-path line mask) |
| Hero slides | Splide fade | opacity 2s cubic-bezier(.25,1,.5,1) | slides translate in track |
| `data-inview=up` block | ScrollTrigger start "top 90%", once | 1.5s, power4.out (≈ cubic-bezier(.23,1,.32,1)) | translateY 3rem (2rem ≤ 1000px) + opacity 0→1 |
| `data-inview-each=up` list | same | 1.5s, stagger .1s, power4.out | 70px (50px mobile) |
| `data-inview=pic` | same | clip-path wipe bottom→top 1.5s power4.out | polygon(0 100%…) → full |
| `data-inview-line=up` heading lines | same | span translateY 105%→0 inside clipped parent | 105% |
| Sustainability photo | scrub, start "top 75%" end "top 20%" | linear (scrub) | clip-path polygon(25% 25%,75% 25%,75% 75%,25% 75%) → full + opacity 0→1 |
| Deco lines | scrub, trigger section top bottom → bottom top | ease none | x 10%→20% and 5%→-5% |
| Header | scroll direction | bg/colour 0.6s, opacity .3s, cubic-bezier(.25,1,.5,1) | cream bar after hero |
| Section text colour flips | class swap, `color 1s cubic-bezier(.25,1,.5,1)` | | dark↔light bands |
Secondary (occkwork): `appear` fade 0.6s, delay 200ms, translateY 10px→0, IntersectionObserver rootMargin 100%, elements sequentially; link hover 0.3s cubic-bezier(.4,.4,0,1).
