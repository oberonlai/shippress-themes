# reference-tokens — yama-niwa.jp (measured 2026-10-29, 1440×900, getComputedStyle; values only, no assets copied)
## (a) Colour
| Role | Hex | Area |
|---|---|---|
| Main (brand green, logo triangle, headings of cards, CTA pill, links) | #5BB543 | first screen ≈3% (logo only); Five-functions section ≈9% (big triangle) |
| Sub / card ground | #F7F4EF (radius 4px) | booking card, journal cards ≈10% |
| Base | #FFFFFF | ≈45% of page below the fold |
| Text | #000000 / #111827 (muted #6B7280) | — |
| Accent | #5BB543 reused as outline pill border + play-dot icons | — |
| Hero photo (not a colour token) | forest greens #204020–#404020, sky #C0C0C0 | first screen ≈ 85% photo; saturated (S>0.5) share ≈ 0.7% |
Scrim: black at 50% opacity, fades 0 → 1 (×0.5) while scrolling from 0 to the "lead" section.
## (b) Type
Body 16px / 400 / lh normal Noto Sans JP; Latin small caps-ish labels Libre Franklin 11px / 400 / lh 19.8 (1.8) / ls 0.055em / capitalize.
H1 40px (2.5rem) / 700 / lh 60 (1.5) / ls 8px (0.2em) white, JP. H2 32px / 700 / lh 51.2 (1.6). Card title ≈28px / 700 green + bracket tag "[ Rest ]" 13px green. Card body 16px / lh 29px (1.8). Nav 16px / 400 / ls ≈0.05em (Libre Franklin), 3-column × 3-row text grid at x 640/820/1000.
## (c) Spacing
Section padding-top 186px (Five functions) / 224px (next); gaps between sections ≈ 200px (mt 20.7rem pc). Container 1240–1320px; card grid 3 cols, card 380px, column gap 50px, row gap ≈ 250px incl. text. Header fixed, logo at x 40 y 30.
## (d) Radius / border / shadow
Photos radius 0. Cards (booking, journal) radius 4px, no shadow, no border. Pills radius 9999px; outline pill 1px #5BB543 border, 150×46. Hero has no border.
## (e) Imagery
**IMAGERY = photo** (all content imagery is photography; no illustration beyond the vector logo). Style: documentary, natural light, slightly dark/moody forest tones, people candid, food on wood table.
- Hero: full-bleed 16:10 (1440×900) aerial photo/video poster, no mask, object-fit cover, 100% width.
- Card photos: 3:2 (380×253), radius 0, 3 per row (≈26% width each), no overlap/offset; text below.
- Portrait 0.77 (430×557) used once in philosophy block, ≈30% width.
- Journal thumbs 1.45 (340×235) inside #F7F4EF cards.
- Mask/clip: the only clip-path is a huge downward triangle (green solid, ≈540×440, cut from top-left corner, `clip-path` polygon) holding label "Five functions" + heading; top-left of the section, overlapping the first card's left edge by ~0.
## (f) Decoration
Logo = green triangle 216×148 with handwritten-style wordmark; "▶ Label" small play glyph before English labels (16px); round green play-dot (18px) before link text; bracket tags "[ Rest ]"; outline pill button "Journal"; thin none lines. No numbers.
## (g) Motion
- Menu items reveal: opacity 0→1 + translateY, 0.7s, cubic-bezier(.22,1,.36,1), delay 0.45 / 0.6 / 0.75s stagger 0.15s.
- Prose lines: opacity 0→1 + translateY(0.8rem), IntersectionObserver-triggered queue (batched with rAF), once.
- Hero background video plays while in view, pauses after hero passes; dark scrim opacity follows scroll (scroll position / (lead-section top − vh/2)), rAF-read/write bus, no library.
- Slideshow [data-ig-slideshow] cross-fade every 4500 ms (instagram strip).
- Other easings in CSS: cubic-bezier(.33,1,.68,1), (.65,0,.35,1), (.4,0,.2,1).
