# Reference notes (draft, stage 1) — Makido Shutters
Status: design step done (see design-spec.md). "Our adaptation" column filled.

- Main reference: https://www.sanwa-hldgs.co.jp/ (door, shutter and opening-solutions group; top page, 1440 x 900 and scroll captures)
- Category: corporate / industrial, same trade as a door and shutter contractor.
- Imagery: photo (all content images are install photographs; only the hero video is CG).
- Tokens: see reference-tokens.md. Captures: ref/sanwa-first.png, ref/scroll-sanwa-*.png.

## Structure seen
Two-tier transparent header over a full-bleed hero video, an anniversary pill link docked bottom-right of the hero with a pause button, three 1 px-bordered notice boxes, a peeking photo slider with captions, two-column dated news / IR rows with blue tag pills, then a giant elliptical (lens-shaped) blue band with the vision statement, a four-photo product row, stats numerals and a white pill button, and a full-bleed about photo under a centred heading with a short bar.

## Signature candidates
| # | Technique | Reference location | Our adaptation |
|---|---|---|---|
| C1 | Lens band: a section whose top and bottom edges are huge ellipse arcs (border-radius 50% pseudo-element 150–220% wide) filled with a deep-to-mid radial gradient, white centred heading with a 64 x 4 bar | vision band, scroll-sanwa-lens-rise-2700.png | Home §2 "What a quote includes" (T1): 150 % ellipse, radial #18263A to #46607C, 64 x 4 white bars, three abutting 1.6:1 photos, three figures; compact bottom-arc lens head on 7 inner pages; closing lens CTA at the page foot. |
| C2 | Cover reveal: the hero stays pinned while the lens band slides up over it | js-topParallax (sticky hero) | Hero pinned with CSS sticky inside .mk-pin (>= 1024 px, no-preference motion only); the lens band slides over it, top corners show the photo; crown peeks 56 px in the first screen. |
| C3 | Hairline notice boxes with an inline chevron, 1 px #C2CDD1, 32 px padding | scroll-sanwa-notices-900.png | Home §3 "Before you book" (T2): three square 1 px #C9D0D5 boxes, padding 32, gap 32, inline chevron; also on Doors, How it works, Prices, Contact. |
| C4 | Centred heading + 64 x 4 bar over a full-bleed photograph | scroll-sanwa-lens-foot-4500.png | Home §6 "The crew who measure" (T3): centred H2 + 64 x 4 ochre bar over full-bleed img-12 (sp-parallax 10 %), six names as a text list; also About, Doors, Our work. |
| C5 | White pill link docked at the hero foot with a round chevron disc | sanwa-first.png | Hero booking bar: white pill 68 px crossing the diagonal seam, two booking facts + "Book a site measure" with a 44 px slate chevron disc; the same pill is the one repeated CTA. |

## Scroll effects
Fade-up (opacity + 15 px, 1 s) on scroll; sticky hero cover reveal; autoplay slider with pause. No counters, no marquee.

## Our adaptation (summary)
Hero fingerprint diagonal-split/on-solid-panel/booking-bar: documentary photo of two fitters guiding a half-lowered roller shutter (left 62 % to 54 %), radial slate panel with all hero text on the right, white pill booking bar at the foot. Signatures T1 lens band + cover reveal, T2 hairline notice boxes, T3 centred heading + bar over a full-bleed photo. Colours re-keyed to the plan blue-grey #5A6570 keeping the reference hue family and the deep-to-mid radial. Motion: sp-reveal--up 15 px / 1 s / ease, sp-count on figures, sp-parallax 10 % on the crew band, CSS sticky cover reveal.
