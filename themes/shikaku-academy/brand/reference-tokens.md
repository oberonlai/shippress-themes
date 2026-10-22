# Reference tokens (measured with getComputedStyle, 1440×900 desktop; values and descriptions only)
Main reference: HTA education programme site (S5-Style category education-healthcare), `ref/hta-first.png`, `ref/hta-full.png`. Secondary (scroll behaviour only): Digital Hollywood "Honka Re:Frame" class page, `ref/dhw-*.png` (dark purple first screen, 67% saturated, so its palette is NOT used).

## (a) Colour (HTA, page h=8136)
| Role | Hex | Share of first screen | Where |
|---|---|---|---|
| Ground | #E8ECEF (cool blue-grey) | ~55% | body, CTA band |
| Surface | #F5F6F7 / #FAFBFB / #F0F2F3 | ~8% | card header, footer, vertical headline chips (#F5F6F7) |
| Ink | #001F2D | ~6% (text) | all text; footer; line colour |
| Muted text | #7F8E96 | <1% | dates, info paragraphs |
| Main (saturated) | #0399E0 | ~7% | vertical headline glyphs, MENU pill, tags, buttons |
| Tints of main | #80CBEF, #E6F5FC, #CDEBF9 | <2% | hover, tag fills |
| Photo (3D characters, white coats, one green, one orange shirt) | n/a | ~25% | hero art |
First-screen saturated pixels measured with scripts/check-first-screen.py: HTA 13.1%.
Ours: ground #E9EDF0, surface #F6F7F8, ink #12222D, muted #6E7F8A, accent 縹 #4E7A93 (low chroma, small areas only), accent tint #DCE7EE. Ratio target 62 / 12 / 8 / 3 / photo 15.

## (b) Type (HTA)
- Families: CezannePro-M (gothic, 500), CezannePro-DB (semi-bold headings), Hanken Grotesk 400/800 (Latin labels, ghost word). Ours: Libre Baskerville (display) + Work Sans (body, labels).
- Root 10px (rem = 10px). Nav 16px / lh 16px / ls 0.8px (0.05em). H3 20px / lh 28px / ls 1px / DB. Card title 26px / lh 36.4px (1.4) / ls 1.56px (0.06em) / DB. About paragraph 20px / lh 36px (1.8) / ls 1px. Info paragraph 16px / lh 22.4px / ls 0.8px muted. Tag 12px / ls 0.6px DB. English micro label (Hanken) 11px / ls 0.55px (0.05em), mixed case. Ghost word 200px / weight 800 / ls 4px / colour #F0F2F3 on ground #E8ECEF (tone-on-tone, behind content, bleeds off both edges). Section titles are artwork SVG at 15px root scale (≈ 117px tall, full container width 1280).
- Line-height tokens 1.4 / 1.6 / 1.8; letter-spacing tokens 0.02 / 0.03 / 0.05 / 0.06 / 0.08em.

## (c) Spacing (HTA)
- Container 1280 (80px side margin at 1440). Section top margin 240px (lesson), edu section padding 300 top / 373 bottom with −60 overlap, info section −54 overlap; CTA padding-top 140; footer 160 / 80. Header 48px logo square at x=32,y=32. Lesson card grid: three 400px cards in 1280 → gap 40px. Info rows 682 wide, 167 tall; nav list column x=1258, rows 31px apart.

## (d) Radius, border, shadow (HTA)
- Cards 10px with 1px solid #FFFFFF; card header band radius 10 10 0 0 and fill #F5F6F7, top padding 30px. Pills/tags/buttons radius 1000px. Menu pill: fill #0399E0, white text, padding 3/3/3/17, shadow 0 4px 4px rgba(0,31,45,.10). No other shadows. Borders: 1px (max(1px,.1rem)) in #FFFFFF or #CCD2D5.

## (e) Images (HTA)
- Hero: 3D character group, full-bleed right two-thirds, cropped at the viewport bottom edge (people stand on the fold), ≈ 1000px of 1440 wide; left third is ground with the headline.
- Lesson cards: square illustration 380×380 inside a 400×657 card (≈ 58% of card height), card top band holds title; the three squares are staggered downward by 40px each (y 4064 / 4104 / 4144) = descending ladder.
- Educational cards: three cards 367×530, 383×540, 450×574 rotated about +5°, −7°, +16° (matrix rotation), overlapping, each with front and back image (flip). Position: across 1017–1467 x, y offset −190 / +0 / +120 relative (fan).
- Sitemap illustration 845×632 contain, no radius. No clip-path on photos except the reveal masks.

## (f) Decoration (HTA)
- Vertical headline: three columns, each a white-ish chip (#F5F6F7, no radius) hugging its text column (86px wide, 318 / 484 / 484 tall) at x=48 / 146 / 244, y=128, glyphs 86px tall in #0399E0 weight DB; reveal by clip-path polygon from top to bottom.
- Number tab: "01–03" in a notch, 110×80, ground colour #E8ECEF, padding 0 10, sits across the top-right edge of each lesson card (x=341..451 on card x=80..480), so the tab bites out of the card outline.
- Circular dashed "Scroll Next" ring, 108×108, dashed 1px, bottom-left (x=32,y=760), text 10px centred; rotating arrow svg.
- Ghost word 200px as above; pill tags 29px tall (padding 8/15/9) colour main on #F5F6F7; "[ Navigation ]" bracket label 11px above a plain right-aligned text nav (7 links, no boxes) on the hero.
- Rotating text ring (60s linear infinite) and horizontal looping text slider (speed 0.5, clone 5).

## (g) Motion (HTA)
- Fade-up (js-trigger): 1.1s, delay 0 / .14 / .28 / .42s stagger, cubic-bezier(.23,1,.32,1), translateY 15px + opacity 0→1, fires on entering viewport (IntersectionObserver).
- Mask reveal (js-masks-v-h): clip-path polygon top→bottom, 1.2s cubic-bezier(.86,0,.07,1), delays .42 / .64 / .86s (220ms stagger) on the hero headline columns, after a 1.4–1.6s loading veil.
- Hero nav and Scroll label: opacity 1.4s, delay 2s, ease .23,1,.32,1.
- Smooth scroll: Lenis lerp .2, wheelMultiplier .85. Looping slider speed .5 with wheel boost ≤4.
- Hover: 290ms cubic-bezier(.215,.61,.355,1); long hover 550–630ms; accordion 500ms (.86,0,.07,1).
- DHW (secondary): per-letter title tiles translate 2s cubic-bezier(.14,1,.34,1), 100ms stagger (13 tiles, 0–1.2s); section fade-in c-fade-in 3s opacity+transform same curve; header slide-top 3s.
