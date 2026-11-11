# Reference tokens (main reference: https://www.kobedenshi.ac.jp/, a vocational college, measured at 1440x900 with getComputedStyle)

IMAGERY: photo. The first screen, the campus strip and the event cards are all photographs of people working at tables (high-key, daylight, documentary, slightly desaturated). A few 3D character stickers and a dark particle band appear lower on the page; they are not the main imagery and are not adopted.

## (a) Colour
| Role | Hex | Share of first screen |
|---|---|---|
| Photo mid-tones (grey room, white ceiling, desks) | ~#B8BCBE to #E8E8E8 | ~45% |
| Giant word / header / chip white | #FFFFFF | ~44% (word + card + header) |
| Dark ink (text, pills) | #222222 / #111111 | ~6.5% |
| Page ground below the hero | #F5F5F5 | n/a |
| Footer | #111111 | n/a |
| Accent (event badge, small yellow-green chip) | ~#F2FF2E | <1%, below the fold |
Saturated share of the first screen (S>0.5, V>0.25): 0.5%. Below the fold the cards are saturated (yellow, cyan) but that is not copied.

## (b) Type
- Family: Noto Sans JP (CJK) with Latin from the same face. Giant word: heavy condensed grotesque, caps, white, about 270 px tall per line (two lines, ~17rem), line-height ~0.9.
- Body 14 px/21 px 400, nav 14.4 px 700, h2 32 px 700 lh 32 px, card h3 16 px 700 lh 28.8 px ls 0.04em, card titles 24 px 700.
- Kicker "KOBE DENSHI" 16 px 700 ls 0.05em caps.
## (c) Spacing
- Header 35 px / 60 px padding, logo left, nav centre-left, two pill buttons right. Container ~1240 px (x 100 to 1340). Section padding ~100 px. Card grid gap 30 px (4-up 288 px wide, 450 px tall) and 3-up 393 px wide, 393 px tall.
## (d) Radius, border, shadow
- Cards radius 6 px, docked hero card radius 8 px, header pills radius 999 px (black), outline pill 1 px #222 radius 999. No shadows except a very soft one under the docked card (0 4 20 rgba(0,0,0,.12)).
## (e) Imagery
- Hero: full-bleed photo 1440x790 (≈1.82:1), no radius, subjects (4 people at a table) in the lower 60%; the giant white word sits over the upper 55% of the photo, the people stand in front of the lower line. Docked card 373x124 bottom-right with a 140x100 thumbnail (radius 4).
- Cards: tall portrait cards 0.64:1 (4-up) and square (3-up) with a gradient tint and photo bleeding off the bottom, text top-left.
## (f) Decoration
- Round chevron button 48 px white circle with black chevron bottom-left of each card; small outline pill CTA centred under a card row (244x56, 1 px border); a thin skyline strip of the campus buildings (illustration-like) under the section lead; yellow highlighter underline on one phrase; round yellow badge 90 px at card corner.
## (g) Motion
- jQuery scroll listener adds a class once an element is within 100-200 px of the viewport bottom: fade+rise; list items stagger by column (i%3 x 200 ms) plus row (floor(i/3) x 200 ms), phone: no stagger. KV background shifts down at scrollTop/4 on desktop (/10 on phone), so the photo moves slower than the page. Hover/transition: all 0.3 s ease-in-out; 0.5 s for opacity; slide-ins use cubic-bezier(0.8,0,0.2,1). Slick carousel in the news area.
