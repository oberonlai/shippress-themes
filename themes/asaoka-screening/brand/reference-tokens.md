# Reference tokens — https://nishichita-aichi.or.jp/ (Nishi-Chita medical welfare association; measured from its CSS + 1440px screenshot, values only)

IMAGERY: photo — real candid daylight photography (family walking a path, a smiling senior walking, a hospital building, a pool). High-key, soft green foliage, natural colour. No illustration.

## (a) Colour
- Base white #FFFFFF ≈70% of the first screen; pale mint band #F0F8F2 ≈15% (wave + news band); grey-green ground #F3F6F1.
- Main green #198754 / #0AA75B (headings, labels); chips #57C37D; tints #D2F6DB, #DDF4EC; dark green #1E5A28.
- Accent coral #FF7654 / #FF8843 only on the header CTA pill and the notice tab (<3%). Text #383E39, muted #606060.
- First-screen saturated share ≈ 6%; photos ≈ 13%.

## (b) Type
- BIZ UDPGothic (rounded gothic sans). Body ≈1rem, line-height ≈1.8; nav ≈0.9rem; section titles 1.6–2.4rem (clamp); display up to clamp(4.5rem → 10rem); regular/medium weight; tiny Latin label ("News") only.

## (c) Spacing
- Header floats 20px from the edges, ≈108px tall; photo row starts ≈275px from top, ≈370px tall; section padding ≈90–120px; container ≈1220px; card gaps ≈24px.

## (d) Radius / border / shadow
- Full pill for CTAs, search and chips; photos r≈28–32px; cards r≈24px; arrow buttons are squircles (6.67% / 33%); news rows 1px hairline #D8E0D8; shadow 0 0 25–40px soft green-tinted glow.

## (e) Imagery
- Tall portrait photos ≈0.85:1 (316×372) with r≈30, row bleeding off both viewport edges, neighbours cropped to slivers.
- Facility cards ≈1.08:1, r≈26, a scooped bottom-right corner carrying a 28px round arrow; 5-up row, each ≈ 22% of container width, centred label below in green.

## (f) Decoration
- Pale-green wave edge under the hero (SVG curve ≈160px high).
- Notice card with a tab chip (coral "!" icon + label) hanging over its top-left edge.
- "■ News" square-dot label (8px green square) with large title below, left column; dated ruled rows right with filled chip and 34px square arrow button.
- Long gradient-green pill button ending in a white arrow disc.

## (g) Motion
- AOS fade-up (aos.js 7.1.4) on blocks; hero photo row drifts (slick); transitions .8s cubic-bezier(.165,.84,.44,1); hover colour .3s; displacement ≈20–30px.
