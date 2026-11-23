# Reference tokens: main reference (measured with getComputedStyle at 1440 x 900, 2026-11-23)
Source: https://yaizu-ortho.com/ (an orthodontic-only practice site, hand-built WordPress). Secondary: https://j-ortho.jp/ (orthodontic office, framed page). Values only; no assets, copy or logos are reused.

## (a) Colour (first screen and band sections, sampled from screenshots)
| Role | Hex | Share of first screen | Notes |
|---|---|---|---|
| Ground (page base) | #F3F4F0 (measured 40% at #F0F0F0) | ~63% with the light grey photo wash | cool, almost white paper, no cream |
| Main (band, header, line stroke, links) | #3C699C | 7% on first screen; 67% on the About band | saturated share on first screen 8.2% |
| Secondary (pale water tint under header) | #C0D8E0-ish | ~3% | pale tint peeking under the logo plate |
| Text | #000000 body, #3C699C small labels and dates | | |
| Accent (numerals, large ghost word) | #E3E3D5 (pale stone) | on band only | numerals "#01 #02 #03" |
Secondary site j-ortho.jp: page gutter #E6EEEF pale mint frame, white cells, one pale aqua button #A9E1E6, low-key photo; first-screen saturated share 2.3%.
Our mapping: main #44698A (rust-navy slate-teal), ink #1E2A2F, ground #F4F7F6, mist #E1EAEB, numeral tint #DCE6E3, tiny accent #C9826A (dots, 1 link only).

## (b) Type
- Body: Zen Kaku Gothic New 400/500, 16 px, line-height 30.4 px (1.9), letter-spacing 0.8 px (0.05em).
- H2 (home sections): 37 px / 55.5 px, ls 3.7 px (0.1em), weight 500. Sub-heads: 29 px / 43.5 px, ls 2.9 px. Nav/labels: 18 px, ls 1.8 px; small labels 14 px.
- Display Latin: Outfit 500 for "About us" (about 64 px), a high-contrast serif for the big numerals (about 160 px).
- Secondary: serif display "Leaning in, Leading the Way." about 96 px light, with italic words, over the photo.
- Our mapping: Instrument Sans (display, 300-500) + Figtree (body), tracking 0.02-0.06em, largest type 4.5rem.

## (c) Spacing
Container 1360 px inside 40 px page margin (1440). Sections about 160-190 px vertical. Photo staircase columns: 450-590 px photos, text column 330-420 px, rows offset by about 300 px horizontally. Band padding about 140 px.

## (d) Corners, borders, shadows
Photos radius 20 px (all corners; the staircase photos too). Pills and buttons: full radius. Fixed side card: white, radius 20 px on the left corners, no shadow. Hairlines 1 px black/white at 100% on news rows (#3C699C text, #3C699C 50% rule). No shadows.

## (e) Imagery
IMAGERY = photo. Real documentary clinic photography: high-key, clean light, soft grey-white room, natural skin tones, clinician in slate scrubs, patient in chair, coordinator at a laptop, X-ray on monitor, reception hand-off with a clipboard. Aspect ratios: hero 2.3:1 (1360 x 591, radius 20, inset 40 px), portrait 0.8:1 (591 x 739), 1:1 (450 x 450), 0.74:1 (486 x 609). Photos in the About band are staggered left/right, each with a large "#0N" numeral set across its lower corner (numeral half on the photo, half on the band). No masks or clip-paths; no cut-outs.

## (f) Decoration
- One continuous hand-drawn line stroke, 2 px #3C699C on the pale ground (white on the band), starts left of the headline, crosses the hero photo's top-left edge and ends in a small loop with a rotated Latin label on the stroke; the same stroke reappears on the band (about 390 px long) and again as a swoosh under a text link.
- Header: wave-edged blue band top right and white logo plate top left (not copied: we use flat bands).
- Small solid bird marks, pair, 50 and 30 px, below the message photo.
- Vertical white-boxed caption lines on the hero photo (right edge).
- Ghost Latin word "Message" 200 px, pale stone, vertical, right edge of the message block.
- Fixed right-edge white card with two icon + vertical-label items (Hours / Access).
- News rows: 1 px rules, date in main blue 14 px, title 16 px, white pill "+" toggle 52 x 28.

## (g) Motion (yaizu-ortho.com; measured from script.js + style.css)
- Entrance: jQuery + IntersectionObserver adds `.is-animated`; `fadein-up` = opacity 0 -> 1 and translateY(30px) -> 0, 0.9 s `ease`, per-element delay attribute 0.1-2.0 s (stagger by hand); `fadein` opacity only, 1.5 s ease. Left/right variants translateX(+-30px) 0.9 s.
- Hover transitions 0.3 s ease on colour, background, transform.
- Hero line stroke and swoosh underline are SVG; stroke drawn on load.
- Secondary j-ortho.jp: GSAP in vendors.min.js; scroll listener sets backdrop-filter blur 0 -> 8 px on the summary panel in proportion to scroll; hero video fixed behind white framed cells that scroll over it; menu slide 0.32 s easeInOut; scale 1.08 -> 1 settle on photos, 1.2 s.
