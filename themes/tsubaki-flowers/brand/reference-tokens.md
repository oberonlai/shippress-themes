# Reference tokens — good2garden.com (measured with getComputedStyle, desktop 1440×900, 2026-10-25)

## (a) Colour
ink #141811 (text, 20,24,17) · base #F7F6F0 · white #FFFFFF (nav and hero text) · grey #858781 · light grey #EEEEEE · deep green #314032 (submit bg; hover #121912) · danger #C02E11 (forms only).
Areas below the fold: base ≈ 85%, photos ≈ 12%, ink rules/text ≈ 3%. First screen: video, dark green/black, saturated (S>0.5,V>0.35) share ≈ 7%.

## (b) Type
Family: neue-haas-grotesk-display (Latin) → dnp-shuei-gothic-gin-std (JP) → system sans. Body 16px / 25.6px; paragraph 15px / 34.5px (≈2.3) / ls 1.5px. Hero .en 4rem(64px) w400 lh 1.4 ls .02em; hero .ja 1.25rem ls .05em. H2 section title 26px w500 lh 1.6; H2 lead 20px lh 36px ls 2px; card h3 15px w400 lh 27px. Nav 15–16px, white on video. No uppercase transforms.

## (c) Spacing
Section padding-top: about 130px, works 160px, service 140px, others 200px (bottom 160px), news 0, column 100px (bottom 190px), contact 150px. Side padding 75px (hero text 97px). Works grid 3 equal columns (480px each at 1440, full-bleed), cell inner padding ≈ 70px, photo width ≈ 330px. About: image col 500px wide (col 5 of 12), sub image 41% of col.

## (d) Radius, border, shadow
Radius 0 everywhere on photos; pill 24px on phone button only. Border 1px solid ink (#141811) as hairline rules; no shadow.

## (e) Imagery
IMAGERY = photo. Natural-light, shallow depth of field, slightly muted greens, soft overexposed highlights, film-like softness; hero is a muted loop (mp4). Works photos: portrait ≈ 329×437 (3:4), landscape ≈ 329×220 (3:2), flush rectangle, no mask, centred in cell with vertical air 70–110px. About: portrait 500×750 (2:3) left at 0, sub photo 260×184 floats top right (≈19% width). Hero: 100vw × 100vh, object-fit cover.

## (f) Decoration
1px vertical rules between works cells (full cell height); underlined "View more →" link; small grey sub-label (≈12px) next to Latin section title; hashtag line in grey 12px under captions; no icons, no numbers.

## (g) Motion
Library: GSAP 3 + ScrollTrigger and custom IntersectionObserver (rootMargin 0 0 -20% 0, threshold 0, data-scroll-trigger attrs). fade: opacity 0→1, 1.8s, cubic-bezier(.25,.46,.45,.94), no movement; top: translateY(8%)+opacity, 1s, cubic-bezier(.165,.84,.44,1); blur: blur(1em) brightness(1.85) → clear, 1.3s; text: per-character translateY(100%)→0 inside overflow:hidden, each 0.03s; mask on card figures (GSAP, reveal of the image). Header: opacity .3s; hamburger 1s cubic-bezier(.19,1,.22,1). Smooth-scroll lib on anchors.
