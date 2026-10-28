# Reference — Mame Coffee (成品對應 filled by stage-1 spec)
Source: S5-Style entry https://www.s5-style.com/12018/ → https://afuribrewing.com/ (category 飲料･食品･メーカー; styles: illustration, grid, photo direction, scroll effect). Not used by any earlier theme (checked themes-repo reference.md list).
Related in category: craft food/drink with a quiet, white, photo-led layout.

## Screenshots (brand/ref/)
afuri-first.png (first screen), afuri-s0/s1/s2/s3/s5/s7.png (scroll states), scroll-hero-before.png / scroll-hero-after.png.

## Signature candidates
| # | Technique (shape / composition / position) | 成品對應 (our counterpart, design-spec.md) |
|---|---|---|
| 1 | Framed window: a sharp 68%-wide rectangle photo floats on a full-bleed backdrop photograph; wordmark in 86px caps bleeds across its lower-left corner | **T1** home `front-hero`: photo 01 hall backdrop, frame 02 (roaster + falling beans + blurred carafe) 68.2% at top 130px, "MAME COFFEE" Newsreader 5.375rem crossing the frame; every inner page head is a 56% T1 with the title crossing the frame |
| 2 | Scroll zoom-through: window and backdrop scale up (+15–17% per 200px) until the backdrop fills the screen and a second statement appears | `sp-parallax` on the hero backdrop (`--sp-par` 10%/6% mobile, scale 1.18) + block 2 `front-statement`: full-bleed origin farm photo 03 (parallax 8%) with underlined second statement = AFURI after-state |
| 3 | 3px top-rule cards: each column starts with a heavy dark rule, title + round outline arrow button, short line, then a tall panel on #E8E8E8 with chip label | **T2** home lots (4 bags 04–07, chips, Sweetness/Acidity/Body bars), people (wide 09 + narrow 10), stories (wide 14 + 13 + 15); inner Lots, Bar, Roastery, Origins, People, Cupping, Journal |
| 4 | Rotated side label at left edge ("SECTION | NAME") + hairlines separating spec rows, rating bars | **T3** rotated `#C8C8C8` labels (home people, bar; About, Bar, People, Visit), wide 3/4 photo + 302px ruled column (home pour 08; About 14, Roastery 02, Wholesale 04), 1px hairline rows (schedule, full-width price lists, visit info); horizontal label on mobile |

## Palette (ref → ours)
Ref: main #00A0E9 (41%), secondary #002020 (7%), base #FFFFFF, text #1D1D1D, panel #E8E8E8. Ours is quiet 黒橡 #3F3834 — saturated share ≤ 12%: see stage-a.md.

## Imagery
IMAGERY: photo (ref: photo-led; one small isometric illustration excluded).
