# Reference (draft; "our version" column filled at design/build)

Main reference: https://www.baika-kindergarten.ed.jp/ (S5-Style, kindergarten). Screens: `ref/bk-first.png`, `ref/scroll-bk-900.png` ... `ref/scroll-bk-5400.png`. Tokens: `reference-tokens.md`.

## What it does
Rounded-gothic, warm and airy kindergarten site. First screen: a tall photograph of children with one huge rounded corner, a white hand-drawn scribble over it, a two-line statement, a docked news card bottom-left over a scalloped foot, and a fixed right rail of four colour tabs.

## Signature candidates (we use 3)
| # | Reference move | Our version |
|---|---|---|
| T1 | White hand-drawn chalk scribble lying on the hero photo | A tutor's observation marks (loop around the child's hands, short arrow, tick) drawn in white line over the documentary photo; draws itself once |
| T2 | Programme card: flat colour panel + two abutting photos, scooped corner with round arrow disc | "A day on the course" cards: moss panel + two abutting photos with a scooped corner and Ø64 arrow disc, alternating sides |
| T3 | Vertical heading tab cut into the corner of a photo, small coloured label, arrow disc | Vertical serif label (e.g. "Practice") set in a notch cut from the photo's upper-left corner, text below |
| (not used) | Fixed right colour rail; one-big-corner hero window; scalloped cloud foot; blob-masked photo | Too close to earlier themes (fixed side tabs, big-corner window, wave/blob) |

## Scroll effects
Section reveal (fade + ~30px rise) via GSAP toggling `js-scroll-active`; cards fade after their photos; hero cross-fade slider; 0.6s cubic-bezier(.22,1,.36,1). Ours: sp-reveal--up with stagger, one sp-parallax band.
