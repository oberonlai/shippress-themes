# Reference tokens — welfit-sapporo.com (measured 2026-10-25, 1440×900, getComputedStyle; values only, no assets copied)
## (a) Colour
| role | hex | area (first screen / page) |
|---|---|---|
| base / page ground | #EBF3F3 (pale blue-grey-green) | ~65% of first screen, whole page ground |
| card white | #FFFFFF | cards, tab list, section panels (~20% mid-page) |
| blob pale | #C2DBDD → #D8E8EC (soft gradient) | ~20% (large organic shape behind hero and sections) |
| blob saturated | #78B6D6 (sky blue, gradient to lilac-grey #C9D3E0) | first screen ≈0.1%, mid-page lower lobe ≈5% |
| text / ink / dark pill | #3C465A (--base-color) | body text, active tab, buttons |
| accent (CSS var only, almost unused) | #804476 | <0.5% |
| CTA gradient | #4A9FC8 → #E6A0A8 (blue→pink, header "Reserve" pill) | tiny |
First-screen saturated share (S>0.35, V>0.3): ≈0.1%; including the blue lower lobe at mid-page ≈5%.
## (b) Type
- Families: "Shippori Mincho B1" (base/serif, JP body + headings), "Red Hat Display" italic-feel Latin (--en-font-set, nav, labels, big "Service" vertical title), "Noto Sans JP" (buttons/tabs).
- Body 16px / lh 27.2px (1.7); hero lead 20px / lh 49px (2.45) / ls 4px (vertical writing); hero copy 20px / lh 34px / ls 1px (Latin); h3 26px / lh 50px / ls 1.3px; h2 18px / ls 1.8px (vertical); card number 30px Red Hat Display italic; tab/button 15px / ls 0.3px; no uppercase transform; weights all 400 (light feel). Latin wordmark ~64px italic.
## (c) Spacing
- Header 89px tall, padding 20px 0, inner full-width (1440), bg = page ground (no border), nav items 16px italic Latin separated by 1px vertical rules, pill CTA 160×40.
- Section padding: 90/50/100/180px top × 40–180px bottom (u-pt--90 etc, ×2 on desktop → 180px); container `l-section__body__inner` max-width 1000px; concept row 450 + 550 cols; card gap ≈80px; mv height 720.
## (d) Radius / border / shadow
- Cards: radius 10px, white, soft diffuse shadow (very light, ~0 8px 32px rgba(60,70,90,.08)); tab list and buttons radius 9999px; images in cards radius 9999px (portrait 280×360 oval/egg shape); large panel top radius ~200px (arc top, white); borders 1px #3C465A only on small outlined buttons ("Shop introduction" underline 1px).
## (e) Imagery
- **IMAGERY = photo.** Real documentary photography of staff/treatment rooms, bright, high-key, natural light, slightly desaturated warm interior. Photos are always masked into soft shapes: hero slides in organic "blob" shapes (aspect ~1.4:1, ≈ 780×620 at left, bleeding off left edge), crossfading with a blurred (10px) 1.05-scale start; card portraits oval 280×360 (7:9) radius 9999px, left third of 1000px card (≈28% of width); wide concept photo ~16:9 with ±5% vertical parallax; overlap: pale blob shape layered over the photo's right half (translucent, gradient).
## (f) Decoration
- Large organic blob shapes (gradient sky blue→pale teal), 800–1100px wide, behind sections, partly off-canvas; 1px diagonal hairline (≈100×95px) in each card's top-left corner with italic number "01–04" (30px); vertical Japanese lead column (4 lines, x≈1215–1380); big vertical section title ("Service" 120px rotated 90°) at left edge with small vertical caption; small centred label ("Service") with 1px × 40px vertical rule beneath; pill tab list (900×60, white, active tab ink #3C465A with small triangle pointer).
## (g) Motion
- Hero (load, GSAP timeline): lead spans blur(10px)→0 + clip-path wipe top→bottom, 1.4s, stagger 0.2s, Power2.out; heading fade 1.2s; slides fade + scale 1.05→1 + blur 10→0, 1.2s, stagger 0.4s; copy clip-path wipe bottom→top 1.4s.
- About cards: ScrollTrigger pin, scrub 1, horizontal xPercent −100×n, ease none, start "center center".
- Section fades: autoAlpha 0→1 + y 30→0, 0.9s, second element 0.2s later ('<0.2'), start "top 50%".
- Concept02 image: y −5%→+5% scrub 1.5, start top bottom → bottom top (parallax); copy spans y30 + clip wipe 0.6s stagger 0.05 Power2.out.
- Hover transitions 0.3s. Library: GSAP 3.12 + ScrollTrigger, Splide 4 (auto-scroll), Swiper 8.
