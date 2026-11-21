# Reference — Picchio (draft; built column filled by the design stage, see design-spec.md)
Primary reference: https://picchio.co.jp/ (S5-Style Good Web Design, travel / sightseeing / transport category; guided nature-tour operator).
Secondary: none (one strong source is enough; the other candidates in the category were saturated illustration sites or full-bleed dark pages).
Why it fits: a guide-led tour operator whose first screen is one destination photograph and one quiet news / action bar, followed by tour rows (small text column, big photo). Same buyer promise as Kuruma Tabi: the place first, then a person who takes you there.

## Signature techniques (candidates; the design stage picks 3)
| # | Technique | Shape, composition, position | Ours (to fill) |
|---|---|---|---|
| T1 | Tour rows: narrow text column + wide 2:1 photo, mirrored per row, thin line-art drawing straddling the seam | 300 px text at x 110, 880x440 photo at x 450, drawing 130–270 px tall overlapping the photo by ~60 px and the title by ~20 px || Home 'A day, stop by stop': 3 mirrored route rows 300/40/880 (2:1, row 3 3:2), own evergreen SVG drawings (binoculars, folding map, camera) on the seam; also Itineraries, How it works, About, Fares |
| T2 | Hero foot pair: white tab bottom-left + deep-colour bar bottom-right carrying one live line | 240x80 white tab, 720x80 navy bar, flush to the bottom edge || Hero foot: white 240x80 'Send an itinerary' tab + evergreen #006E54 720x80 bar with the 5-stop day timeline (10:15 ticked); also Itineraries, How it works, Request page heads |
| T3 | Emblem heading: 30 px round emblem above a centred spaced-caps title with a small subtitle, on white then on a pale wash band | title 32 px ls 0.05em, 80 px section top padding || 30 px wheel emblem over every 32 px caps h2; #E4EEEA wash band behind fares, guides, vehicle; all inner pages |
| T4 (support) | Docked caption tab on a portrait photo (white 260 px tab at the lower-left corner) | || Lead guide 540x620 portrait with docked 260 px name/languages tab; Guides and About pages |

## Colour
See reference-tokens.md (a). Palette relation: white base 55%, pale wash 30%, one deep colour <= 3% on bars and ink drawings, yellow logo disc only.

## Screenshots
`ref/picchio-first.png` (first screen), `ref/scroll-picchio-rows-a.png`, `ref/scroll-picchio-rows-b.png` (T1 rows), `ref/scroll-picchio-about-band.png` (T3 + wash band), `ref/scroll-picchio-about-photo.png` (T4, wide photo with right-aligned headline).

## Scroll-effect teardown (see stage-a.md for the table)
Active motion is limited to the hero intro; scroll reveals are present in source but commented out. Library: jQuery, TweenMax / GSAP 2, ScrollMagic 2, lottie, slick.
