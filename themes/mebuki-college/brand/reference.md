# Reference (final mapping filled at spec)

Main reference: https://www.baika-kindergarten.ed.jp/ (S5-Style, kindergarten). Screens: `ref/bk-first.png`, `ref/scroll-bk-900.png` ... `ref/scroll-bk-5400.png`. Tokens: `reference-tokens.md`.

## What it does
Rounded-gothic, warm and airy kindergarten site. First screen: a tall photograph of children with one huge rounded corner, a white hand-drawn scribble over it, a two-line statement, a docked news card bottom-left over a scalloped foot, and a fixed right rail of four colour tabs.

## Signature candidates (we use 3)
| # | Reference move | Our version | Final mapping (design-spec.md) |
|---|---|---|---|
| T1 | White hand-drawn chalk scribble lying on the hero photo | A tutor's observation marks (loop around the child's hands, short arrow, tick) drawn in white line over the documentary photo; draws itself once | Home H1: white 5px chalk SVG (loop, arrow, clay tick) on P01, ~520×300 at 1440, draws 1.6s ease-out-quint; inner: Day, Placements, Admissions, Stories, Open days |
| T2 | Programme card: flat colour panel + two abutting photos, scooped corner with round arrow disc | "A day on the course" cards: moss panel + two abutting photos with a scooped corner and Ø64 arrow disc, alternating sides | Home H3: two 1240×274 r20 cards, 496px flat panel (#6A7A52 / mirrored #C9D3B8) + two abutting 372×274 photos (P06+P07, P08+P09), scoop r50 + Ø64 disc; inner: Day, Programmes, Placements, Tutors, Fees |
| T3 | Vertical heading tab cut into the corner of a photo, small coloured label, arrow disc | Vertical serif label (e.g. "Practice") set in a notch cut from the photo's upper-left corner, text below | Home H2: 2×2 cards 580×435 r20 on #EEF2E7, tab 122×300 radius 0 0 50px, vertical Fraunces label + moss sub-label, right column +104px (P02–P05); horizontal above photo ≤781px; inner: About, Placements, Tutors, Stories |
| (not used) | Fixed right colour rail; one-big-corner hero window; scalloped cloud foot; blob-masked photo | Too close to earlier themes (fixed side tabs, big-corner window, wave/blob) | Omitted (rail, big corner, cloud foot, blob, stickers) |

## Scroll effects
Section reveal (fade + ~30px rise) via GSAP toggling `js-scroll-active`; cards fade after their photos; hero cross-fade slider; 0.6s cubic-bezier(.22,1,.36,1). Ours: sp-reveal--up with stagger, one sp-parallax band.

## Final mapping (scroll and key visual)
- Scroll: `sp-reveal--up` (30px, .6s, cubic-bezier(.22,1,.36,1)) on section heads/rows; `sp-stagger` on T3 cards, T2 photos-then-panel, tutor list, story columns; `sp-parallax` on the hero photo (6%, mobile 4%) and the H4 garden band P10 (8%, mobile 5%). Hero has no reveal.
- Key visual: tall close-range photo of children at a low table + white scribble + docked news card -> P01 trainee kneeling at the sand table with a child, tutor noting from the doorway, white tutor's chalk marks over it, three-card row (open days / a placement day / applications) docked over the photo foot; split-photo-right / beside-photo / card-row.
- Colour: reference roles and lightness kept; hue pink -> moss #6A7A52 (row palette, adult audience, quiet palette note).
