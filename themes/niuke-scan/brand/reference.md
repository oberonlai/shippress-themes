# Reference — Niuke Scan (finished mapping filled from design-spec.md, 2026-10-27)
Gallery: https://www.s5-style.com/ (category IT / Computers / Technology). Reference site: https://207-inc.com/ (logistics tech company, JP). Not used by any earlier theme (checked).
Screenshots: brand/ref/first-screen.png, scroll-vision-1/2/3.png, scroll-kv-float-after.png, detail-business.png, detail-company.png. Tokens: reference-tokens.md.

## Structure (top → bottom)
1. KV: pale #F8F8F8 ground, giant tracked JP headline upper-left, isometric logistics-city illustration filling right 60%, tiny English tagline, split header (logo left, 5 light links right).
2. Message paragraph (18px lead, lh 2.5).
3. Vision pinned stage ×3 (short/mid/long term): full-bleed dimmed photo, dotted rail + label left, H3 + paragraph right, photo crossfades.
4. Business: three products, each ellipse/blob-cropped photo or device-card fan + navy pill link.
5. Company: full-bleed flat blue band, hairline spec table, timeline.
6. News list, awards, footer.
Finished mapping (home order): B1 KV (photo 01, pale-wall headline, floating chip, info bar) → B2 message → B3 pinned shift ×3 → B4 ellipse rows ×3 → B5 #307ADD spec band → B6 price table → B7 parallax dock band + 3 stories → B8 FAQ → B9 closing CTA → footer #3A4150.
Image : text ≈ 60:40 in KV, 100% photo in vision, 45:40 in business. Whitespace generous (120–184px). Nav: split, 16px light.

## Signature technique candidates
| # | Technique | Description | Finished mapping (Niuke Scan) |
|---|---|---|---|
| A | Pinned full-bleed photo stage | 100vh sticky photo dimmed ~55% black; 3 stops crossfade; dotted rail + label at left (x≈188–366), H3 56px tracked + 3-line paragraph right. | **T1** Home B3 "A shift in three stops" (06:00 / 11:00 / 16:00, photos 03–05), sticky-stacked 100vh Covers, veil .55, dotted rail 25.4vw, label 13vw, text from 28vw, progress hairline 33/66/100%. Inner: How it works, Scanner, Stories, About. |
| B | Oversized tracked bold headline on pale ground | 72px/700, 0.12em tracking, 2 lines, upper-left; tiny 13px light English line under it. | **T2** hero H1 4.5rem/700 (ls .05em Latin, .12em CJK) at x=80 + 13px/300 kicker; closing B9; every inner page head; section tags in #7B5EA7. |
| C | Ellipse/blob photo mask bleeding off the page | photo ≈ 45–53% width cropped to an ellipse, text + navy pill (radius 20, trailing dot) on the other side. | **T3** Home B4 three alternating rows (photos 06/07/08, 53vw, viewport-cut ellipse, dotted hairlines around names, #24274A pill + dot) and B9 closing (photo 13). Inner: How it works, Scanner, Pricing, About, Setup, Contact, Waitlist. |
| D | Full-bleed flat blue spec band | #307ADD band, dotted hairline rows label/value, white text. | **T4** Home B5 "The N1, in plain numbers" #307ADD with faint parallelograms. Inner: Scanner, Pricing, Stories, About, Setup, Contact. |
Indicators: "Scroll Down" pill top-right + "Page Top" vertical line bottom-right. → finished mapping: "Scroll" pill top-right + "Top" 1px line + dot at right edge (≥1024 only; hidden on mobile).

## Colours (see reference-tokens.md)
Main ink #222222 · ground #F8F8F8 (42%) · navy button #24274A · band blue #307ADD · accents lavender #D9B3FF, cyan #31BAFF (illustration, ~8%). First-screen saturated ≈14%.

| Role | Reference hex | Finished hex |
|---|---|---|
| ground | #F8F8F8 | #F8F8F8 (+ #FFFFFF info bar/chip) |
| ink | #222222 | #222222 |
| button navy | #24274A | #24274A |
| flat band | #307ADD | #307ADD (spec band, below the fold only) |
| accent | cyan #31BAFF / lavender #D9B3FF | cyan #31BAFF <0.5% (scan-line, chip dot); lavender dropped (no illustration) |
| section tag | purple (logo #7B5EA7-ish) | #7B5EA7 |
| footer | — | #3A4150 (plan-row blue-iron) |
First-screen saturated share: reference ≈14% → theme gate `check-first-screen.py --max 14`, target ≤8% (measured value to be written here at stage 2).

## Scroll effects observed
See reference-tokens.md (g). Pinned vision: ScrollTrigger scrub 0.5, crossfade 0.6s power2.inOut, scale 1.15→1 2.4s power3.out, SplitType char reveal stagger .02–.05. Hero: CSS keyframe float ±10px 3.6s ease-in-out; walkers 6s linear.
Finished mapping: hero sp-parallax (--sp-par 8%, mobile 5%) on photo 01 + count chip bob ±8px 3.6s ease-in-out + one scan-line pass 1.2s ease-out; B7 sp-parallax 10%/6% on photo 09; sp-stagger + sp-reveal--up on stage text/paragraphs/stories; sp-reveal--mask on ellipse figures. No GSAP, no scroll listeners.

## Key visual finished mapping
Reference KV (isometric logistics city right 60%, tracked headline upper-left, floating drones, walking robots) → documentary photo 01: scanner held over an open carton at a loading door, pale wall left 40% carrying the H1, dock leveller diagonal (= road/stair ribbon), pallet jack mid-ground (= robots/trucks), floating "12 / 12 counted" chip (= drone), scan-line pass (= walkers). Full checklist: design-spec.md §2.
