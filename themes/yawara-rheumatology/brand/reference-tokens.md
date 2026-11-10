# Reference tokens — Island Hospital Otani (https://otani.or.jp/), measured 1440x900, 2026-11-10

Primary reference only (one site). All values from getComputedStyle / bounding boxes. Reference text is Japanese and is translated or described here; nothing is copied (no images, copy, logo).

## (a) Colour
| Role | Hex | Share of first screen |
|---|---|---|
| Base / ground | #FFFFFF | 44% pure white (the entire lower half) |
| Photo wash (sky, sea haze) | #C0E0F0 / #D0E0F0 / #B0D0F0 | ~35% (very low saturation, brightness filter 140% on load) |
| Ink / primary text, nav, logo | #001446 (deep navy) | <3% (type only) |
| Body text | #111111 | tiny |
| Secondary label grey-blue (Latin sub-labels) | #7A86A2 / #7F89A2 | tiny |
| Mid blue (only the small building photo at the right edge) | ~#3A75B8 | ~4% |
| Accent (single CTA button) | #C86D00 (burnt orange), hover #001446 | ~1% |
| Notice highlight chip | pale red tint behind red underlined text (~#FDE8E8 / #C00000) | ~1% |
Saturated share (HSV s>0.5) of the first screen: **5.2%** (screenshot measurement, `ref/otani-first.png`). Well under the 15% / 30% caps.
Relationship: white page + pale haze photograph + one deep ink + ONE warm accent used only for the single CTA.

## (b) Type
- Display/JP headings: a Japanese serif (Mincho) in 2 weights; Latin sub-labels: Trajan-style small caps. Ours: sans only (Figtree headings, Public Sans body), so translate "serif + caps" into "tracked sans + small caps".
- Hero slogan: 27.54px (≈1.72rem), weight 400, line-height 1 (27.54px), letter-spacing 8.26px (= 0.30em), ink #001446. English sub-line under it: 12.66px caps, letter-spacing 1.27px (0.10em), colour #7A86A2.
- Tab card title: 16.1px / lh 22.5px / ls 2.8px (0.175em), sub-label 11.6px caps ls 0.58px (0.05em), colour #7F89A2.
- Nav: 15px / lh 18px / ls 1.5px (0.10em), weight 400 (bold face), ink. Nav rows pitch 33px, 3 columns.
- News line: 11px / lh 13.2px, underlined; phone number ~22px italic numerals, hours line 10-11px.
- Photo caption tab: 10px, ls 0.75px.
- Root font-size trick: html 6.25px (62.5% of 10px base) — sizes are in rem against 10px; not relevant to ours.
- Everything is small: no type above ~28px on the first screen. (Our theme must still carry a >= 4.25rem display size somewhere below the fold.)

## (c) Spacing / layout
- First screen = two halves: photo slider 0-477px (53% of 900, full viewport width 1440), then white half 477-900 (47%).
- White half: logo block at x=80 (left), nav+news column starts at x=720 (exactly 50% of 1440): nav 3 columns at x=720 / 866 / 1040, then small utility links + social icons at x=1200. NEWS label at y~688, news rows 41px pitch, phone + hours at y~838.
- Photo strip: main cell 1728px wide (120% of viewport), sub cells 477x477 squares sitting edge-to-edge (gap 0): x=15, 492, 969 after sliding.
- Tab card: 163x163 white square flush to the left edge of a square sub cell, bottom flush with the photo/white seam (y 314-477), content centred.
- Caption tab: white 234x32 rectangle, bottom-right of the strip, straddling the seam slightly (y 448-480).
- CTA button: 156x44, orange, at the right viewport edge, vertically ~ y 216-260, white 24px circle icon at its left.

## (d) Radius, borders, shadow
- Radius: 0 everywhere except the 24px circle icon. No borders, no shadows, no gradients. Separation by white tabs and haze only.

## (e) Imagery — IMAGERY = photo
- Photographs only, no illustration. Bright high-key daylight (brightness filter 140% lifting to 100% after 2s), wide landscape (sea, islands, sky) as the main cell, plus architectural/people detail in square 1:1 cells (building sign against blue sky).
- Main cell 1728x477 (3.62:1), square cells 477x477 (1:1), radius 0, no mask/clip-path.
- Photo background is oversized inside its cell (background width 160% of the cell) so it can pan under the cell (internal parallax).
- Placement: top 53% of the first screen, 100% width; tab card and caption tab overlap the photo bottom edge.

## (f) Decoration
- Logo: a navy bird/wreath mark above the wordmark, bottom-left of the photo seam (overlapping the seam by ~20px).
- Small navy speaker icon at top-right of the strip (sound toggle).
- Notice chips: pale red rectangular highlight behind a dated underlined line (date format YYYY.MM.DD).
- Latin sub-labels in small caps under every Japanese title (tab card, hero slogan).

## (g) Motion
- Strip: cells slide horizontally; page itself does not scroll (scrollY stays 0): each 300px wheel delta moves the strip ~313px (x of main cell: -433 → -744 → -1057 → -1370 → -1684). Auto loop slider ("topLoopSlider") also pauses/plays on route.
- Brightness resolve on the main photo: filter brightness 140% → 100%, 2000ms, cubic-bezier(0.445, 0.05, 0.55, 0.95).
- CTA entrance: opacity 0→1, 800ms cubic-bezier(0.215, 0.61, 0.355, 1), delay 500ms.
- News reel: one notice shown at a time, switches every 4000ms (class is-view).
- Hover on buttons: 0.3s colour change (orange → navy).
- Anchor/hash scroll: 1000ms easeInOutQuint. Page transition (pjax): content fade 800ms.
