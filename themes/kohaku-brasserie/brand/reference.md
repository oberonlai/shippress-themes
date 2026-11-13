# Reference (draft, stage 1)

Primary: https://sasa.osaka/ - wood-fire Italian restaurant; full-bleed photographic first screen, overlay nav, bracket counter, pinned dim scene, light display type.
Secondary: https://osteria-ao.com/ - Italian restaurant; sage-stone ground, inset photo under a serif line, letterbox photo stack with counter, plate-rim light ellipse.

Imagery: photo (low-key, plated dishes and rooms, edge to edge, no radius).
Measured values: see reference-tokens.md. Screenshots: brand/ref/ (sasa-first.png, ao-first.png, scroll-sasa-*.png, scroll-ao-*.png).

## Borrowed (shape, composition, contrast - no assets, copy or logos)
| # | Source device | Where it shows in the source | Our version | Where (finished theme) |
|---|---|---|---|---|
| 1 | Three-slide full-bleed cross-fade with a bracket counter and a rotated "scroll" caption | sasa hero | Three moments of one room (lunch, afternoon, late) with "(01 / 03)" and a service-day hairline whose amber marker moves with the slide | Home §1 hero (H01–H03, `(01 / 03)`, 11:30 / 15:00 / 22:00 hairline + amber disc); every inner page hero carries the hairline (design-spec §1) |
| 2 | Letterbox photo stack with an "NN / 06" counter on the photo | ao course section | Letterbox window pinned under the header, photo swaps per chapter of the day | Home §4 "How the day is paced" (2.4:1 sticky, H06–H08, `0N / 03`); The Room, The Day, The Kitchen chapters |
| 3 | Large soft light ellipse crossing the top of a section | ao about | Plate-rim ellipse behind the statement, drifting with sp-parallax | Home §3 (`#E4E3D9` 150% ellipse + rim line, `--sp-par: 6%`); The Room, The Day, Menus, Private Room, Book a Table |
| 4 | Dated hairline ledger with lowercase #tags | sasa news | Notes ledger on home and journal pages | Home §7 Notes; Notes archive, category, tag templates |
| 5 | Dim pinned scene with white text | sasa introduction | Night band with the booking line | Home §2 night band (H04 dimmed, 7.5rem "All day."); Book band §8 and footer on espresso |

## Colour relationship
Sage-stone ground (source ao) with near-black ink, one warm clove mid-tone and a lamp-amber point; dark espresso bands from the source's dim fire scene. Saturation comes only from food photography.

## Finished-theme mapping
| Reference token | Finished theme |
|---|---|
| ao stone `#CAC9BD` ground | `stone` `#D4D3C7` (+3% lightness), ~45% |
| sasa dim fire scene | `espresso` `#1D1915` night bands, footer |
| ao slate text `#4F545A` | `ink` `#26221D` |
| (none) brand mid | `clove` `#7A6A56` rules/labels (row colour), `amber` `#B98A45` < 2% |
| Bodoni light 120px ls -0.05em | Fraunces 300 7.5rem ls -0.05em (`display-xl`) |
| serif body 13-14px | Literata 1.0625rem lh 1.85; CJK Noto Serif TC / JP display |
| `(01 / 03)` counter, `(scroll down)` | same device, block markup, in-flow on mobile |
| yPercent 0->20 parallax | `sp-parallax` 8% hero / 6% ellipse / 8% Book band |
| appear center 80% expo.out | `sp-reveal--up` .9s 24px + `sp-stagger`; `sp-reveal--wipe` on 3 photos |
| radius 0, no shadow, 1px hairlines | same |
Full detail: design-spec.md §11.
