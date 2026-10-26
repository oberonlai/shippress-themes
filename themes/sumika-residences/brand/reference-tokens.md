# Reference tokens — musu-sauna.com (measured 2026-10-26, Chromium 1440×900, getComputedStyle; values only, no assets copied)

## (a) Colour
| role | hex | share (first screen / page) |
|---|---|---|
| ground | #F3F3F2 (cool light grey) | 25% of first screen; ~55% of page |
| ink / text / nav pill | #211815 (rgb 33,24,21); pill bg #251C19 | dark ≈ 34% of first screen (mostly photo shadow + pill + logo) |
| photo green (not a token, from picture) | foliage 40–90% sat, dark | ≈ 22% greenish pixels |
| accent | #22A57F (Q marks, h2 in modal, tiny labels) | < 1% |
| white | #FFFFFF (pill buttons, price card) | ≈ 2% |
| saturated (S>0.5, V>0.25) share, first screen | — | 7.7% |
Page background alternates #F3F3F2 and a warmer pale band (≈#EEEBE2) on the "guide" section.

## (b) Type
- Latin/numeric: TikTok Sans 14px/500, lh 21px, ls 0.14px (weather "18°C"). Japanese: YakuHanJP + Shuei Kaku Gothic Gin B (gothic) — we use Fraunces/Outfit + Noto Serif instead.
- Body: 16px/400, lh 24–28px (1.5–1.75), ls 0.05–0.06em (0.8–0.96px). Lead paragraph: 22px, lh 48.4px (2.2), ls 1.76px (0.08em), 720px wide.
- Headings are drawn as SVG glyph paths / vertical text (70–82px tall, 250–395px wide, rotated per character) — no live heading CSS; nav links 16px lh 24 ls 0.96px, underline = hand-drawn brush stroke 8px below.
- No uppercase transforms (Japanese site); Latin labels small caps-like at 14px.

## (c) Spacing
- Container: image block 1376px (32px side inset at 1440); text column 720px; intro section padding-top 216px, connect 231px, info 230px; price section padding 90px.
- Point list rows: 890px each, 2-column staggered grid (text column ≈ 352–395px, photo ≈ 380–855px wide); gallery band 570px tall.
- Header pill 574×54 centred at y=140, buttons 90×34 inside with 10px inset.

## (d) Radius / border / shadow
- Pill nav radius 15px; inner buttons radius 7px (white); Q/A speech bubbles with 1px ink border + tail, radius 0–4px; images radius 0 (jagged clip edge instead); no box-shadow anywhere; borders 1px #211815.

## (e) Imagery — IMAGERY: photo
- Documentary colour photography (deep green, muted, natural light, people candid). Illustration is only decorative (brush-ink splashes), < 15% of image positions → photo.
- Hero: 1376×~660 visible (≈ 2.1:1, taller than viewport), top edge clip-path/mask in jagged zig-zag "torn brush" shape with a notch where the nav pill sits; left 32px / right 32px inset; top at y≈230–260.
- Intro: small landscape photo 4:3 (~340×230) offset up-left at x≈100, overlapped by ink splashes; large portrait photo ≈ 400×520 (≈ 3:4) right-of-centre, 28% of width.
- Point rows: photos 4:5 portrait (≈ 250×320) next to price lists; one wide 855×570 (3:2) gallery slide, others 380×570 / 403×570 (2:3 portrait).
- Gallery: horizontal strip of mixed-width photos, height 570px, gap ≈ 16px, auto-scrolls left.
- Overlaps: photo block overlaps the next section's heading by ≈ 40px; ink splashes overlap photo corners.

## (f) Decoration
- Brush-ink splatter shapes, black, 120–360px, at section edges (rotated, partly cropped by viewport).
- Hexagon-ish ink arrow button 70×52 (black, white arrow) beside link text.
- Vertical (tategaki-style) headings rotated -4°…+6° per character.
- Speech bubble "Q" with green #22A57F Q, bubble 1px ink, tail bottom-left; answer text under it.
- Red seal stamp 40px at paragraph end; weather chip in nav (icon + 18°C).

## (g) Motion
- Header pill: position fixed, stays at top (y=30) after scrolling; initial lowered to y=140 inside hero notch (transition on scroll ≈ first 110px, translate only).
- Headline characters: per-glyph rotate −6°…+4° (matrix 0.9976,0.0698 ≈ 4°) staged as heading enters; trigger ≈ heading top at 65%→25% of viewport; looks like a tick-by-tick wobble (ease steps(2)/steps(3) in code).
- Hero photo scrolls with the page (img top 110→−290 over 400px scroll, 1:1) while the pill stays fixed, so the photo slides up under the pill (no parallax speed difference).
- Gallery strip: continuous translateX (≈ −190px per 700px scroll ≈ 0.27 ratio, scroll-driven, ease none); also autoplay.
- Ink splashes: path opacity 1→0.4 and translateY ≈ −12px across scroll (scrubbed).
- Library: GSAP + ScrollTrigger (module bundle), durations 0.5/1.0/1.3s, ease sine.out / circ.out / power4, steps(1–3) for glyph wobble.
