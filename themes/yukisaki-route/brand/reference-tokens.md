# Reference tokens (measured with getComputedStyle, 1440×900, Chrome headless) — values and descriptions only

Primary: https://hacobu.jp/ (logistics SaaS; S5-Style-type corporate). Secondary: https://mujin-corp.com/ (CTA shape only).

## (a) Colour
| Role | Hex | Share |
|---|---|---|
| Page ground | #FAFAFA | ≈55% of the page |
| Text | #000000 (headings), grey eyebrow #8C8C8C | — |
| Photo-dark (hero, dimmed overlay) | avg #6E686A | 100% of first screen (photo) |
| Dark card | #313131 (r15), footer #262626 | ≈8% |
| Accent (CTA, header buttons) | #E6172C | first screen ≈1.7% saturated pixels |
Mujin: accent orange #F26A1B, ≈9% of first screen (CTA + robot) — not used as colour.

## (b) Type
- JP: YakuHanJP / Source Han Sans (Noto Sans family); Latin eyebrow Inter 15px, #8C8C8C, letter-spacing -0.3px; display Latin PilatExtended 28px/400 (wide extended).
- H1 44px / 500 / lh 57px / ls 4.4px (0.1em), white. H2 30px / 600 / lh 54px / ls 1.2px. H3 26–28px. CTA band H2 36px/500/ls 0.72px. Body 16px, lh 16 normal (copy blocks ≈ lh 29px at 16px = 1.8). Button text 16px/500.
## (c) Spacing
Section top padding 179px (service); container 1120 (cards, topics) with inner 1030 for the frosted panel; card inner padding 50px; photo column 470px; gap ≈ 80px between photo and text. Topics: 3 columns 346px, gap 41px.
## (d) Radius / border / shadow
Card r10, shadow 0 5px 30px rgba(0,0,0,.08), white; photo r5; buttons r25 (pill) 1px border; dark card r15; frosted panel r8 with 1px light border.
## (e) Imagery — IMAGERY: photo
Documentary/commercial photography, dimmed, cinematic: aerial bridge with trucks (hero, overlay ≈ 45% black), dusk truck rear on a road (square 1:1, 470×470, r5), hands with a tablet (square). Topics: 3:2 r10 thumbnails with title below. Hero photo bleeds past the viewport (−93px top, 1086px tall = parallax headroom). Frosted section: blurred pale architectural photo as ground (full-bleed), panel on top.
## (f) Decoration
Grey Latin eyebrow above every H2 (15px); product lockup (logo mark + wide word) above card body; superscript ※ notes; paired pill buttons (outline #E6172C + filled); double chevron tail on Mujin's CTA (button 5px-notched arrow, 224×50 incl. tail).
## (g) Motion
Header transparent over hero → white floating card after scroll. Hero image layer parallax (`js-wiv a--kv`). Cards `a--scl js-tdi`: opacity 0→1 + scale .96→1, 0.6s cubic-bezier(.2,.12,.2,1) (class names + computed transition; JS not read). Image hover `h--vs__i` transform 0.6s same easing. Buttons: bg/border/colour 0.3s same easing.
