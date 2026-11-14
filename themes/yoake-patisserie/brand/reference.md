# Reference ("Our counterpart" filled by the design step; full detail in design-spec.md)
Primary: https://alleeomotesando.jp/ (S5-Style gallery entry for sweets, cake, cafe and takeaway). Secondary: https://100th.nittoh-tea.com/ (tea brand anniversary site; structure only).
Both are absent from the used-references list. Measurements: `reference-tokens.md`. Screenshots: `ref/`.

## Primary: what the first screen is
(a) Draws: a brick-to-cocoa diagonal field; a two-line vertical lead at the left; a motion-blurred photograph of a hand holding an open book beside a cup and a slice of baked cheesecake, starting halfway down and bleeding off the left edge; a thin outline logo mark top-left and a transparent light-weight nav.
(b) Story: grown-up indulgence in a quiet moment - the sweet is the excuse for a pause.
(c) Signature motion: slow 2-second fade-in of photos and text as they arrive; the ground colour eases between sections.

## Candidate signature techniques (shape and composition)
| # | Candidate | Source | Our counterpart |
|---|---|---|---|
| C1 | Split first screen: coloured field on top holding a vertical two-line lead, photo below that bleeds off the left edge and stops short of the right | allee first screen (`ref/allee-first.png`) | S1 Split dawn: blush 110deg wash top 360px + right strip; P01 (pâtissière glazing tarts, first customer behind) flush left x0-1296 from y360; vertical Instrument Serif H1 crossing the photo edge (home hero; every inner page head) |
| C2 | Diagonal three-stop wash with a kicker + em dash + tracked light heading at left, photo flush to the right edge starting lower than the text | allee story (`ref/scroll-allee-900.png`) | S2 Wash and drift: kicker + em dash + two Instrument Serif lines at x144 w420; P02 648x440 flush right +110px (home §2; mirrored 290deg in §5, also §7; The Day, Counter, Whole Cakes, Afternoon Tea, About, Visit) |
| C3 | Alternating edge-flush photos of changing width/ratio with small poem-like line stacks | allee (`ref/scroll-allee-2700.png`, `ref/scroll-allee-4800.png`) | S2 alternation: P07 720x926 flush left, P08-P10 370px trio at x60/535/1010, P11 720x540 flush right, P12 432x648 portrait (home §5-§8) |
| C4 | Full-bleed film-still band with one tiny tracked line | allee (`ref/scroll-allee-1800.png`) | Film-still band: P06 1440x765 full-bleed, one tracked Karla line "Glazed at first light.", sp-parallax 10% (home §4) |
| C5 | Ruled 3-up cells: colour tile with inset photo, tag pill, title, giant numeral bottom-right | Nittoh (`ref/scroll-nittoh-1000.png`, `ref/scroll-nittoh-2200.png`) | S3 Hour ledger: 3 ruled cells (1px brick), dawn tints, 16px inset photos, pills, Instrument Serif 6rem numerals 07/11/15 bottom-right (home §3; The Day 6 cells, Counter, Whole Cakes 15/18 cm, Afternoon Tea 15/16/17, About 17/19/23, People) |
| C6 | Thin top marquee ticker | Nittoh (`ref/nittoh-first.png`) | Not used (would be a fourth motion type); the info line under the hero carries the same "today" message statically |

## Scroll effects found (observe, read HTML/CSS, find trigger, verify)
| Site | Effect | Trigger | Time / delay | Easing | Distance |
|---|---|---|---|---|---|
| allee | `.appear` fade-in of text and photos | class toggle on entry (IntersectionObserver, no library) | 2000 ms, page-load stagger 3.6 s | cubic-bezier(.4,.4,0,1) | none (opacity only) |
| allee | body ground colour ease between sections | section in view | 500 ms | cubic-bezier(.4,.4,0,1) | n/a |
| allee | film-still band, no parallax found | n/a | n/a | n/a | n/a |
| Nittoh | top marquee `loop-track` | CSS animation | linear, infinite | linear | translateX loop |
| Nittoh | tile reveals, header shrink after first screen | IntersectionObserver | n/a | n/a | n/a |
