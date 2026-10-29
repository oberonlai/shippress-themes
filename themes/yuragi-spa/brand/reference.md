# Reference
Main: https://atami-sanga.jp/ (S5-Style #12116). Hospitality, 8-room seaside inn, photo-led, quiet grey.
Hero concept: paired contrast words (mountain/sea, people/nature, everyday/away) with (01)(02)(03) counter over a full-bleed sea photograph, story "opposites dissolve into one full hour".
Signature candidates: T1 contrast-word triplet with counters; T2 [ ] labels + English subline; T3 3.75:1 letterbox photo band; looped room-name row; scroll-linked view() reveals.
Tokens: reference-tokens.md. Screenshots: none (browser unavailable this run).
| Reference element | Our equivalent |
|---|---|
| Full-bleed sea photograph (first screen) | Y01 film-grain photo of a therapist folding a towel at the foot of the treatment bed, full bleed, `sp-parallax` 8% (spec §2, §6) |
| Paired opposing words mountain/sea, people/nature, everyday/away | T1: Warm ── Cool / Touch ── Silence / The week ── One hour, white EB Garamond 4.5rem, one pair lit at a time (§1 T1) |
| (01)(02)(03) counters | the same counters in the hero, reused as list numbers on booking, treatments, notes, FAQ (§1) |
| [ a section name in Japanese ] bracket labels + Latin italic subline | T2: [ Treatments ] + two-line heading + English italic subline on every section and page head (§1 T2) |
| 1448×386 (3.75:1) letterbox photo | T3: Y08/Y09 3.75:1 full-bleed band + white caption card, `sp-parallax` 10%; home + 6 inner pages (§1 T3) |
| 72×4 dash marks | dash between word pairs, in caption cards and before text links (`#6A6E70`) |
| ( Scroll ) cue | "( Scroll )" + 1×48 px line, bottom-left of the hero (desktop) |
| Looped room-name row | `sp-marquee` row of the six treatment names (home block #3) |
| view() reveal, cubic-bezier(0.07,0.36,0.66,0.97) | `sp-reveal--up`, `--sp-ease` set to that curve, 1.1 s, 24 px |
| Facts strip / reserve link | `#F2F2F2` info bar under the hero: hours · rooms · address · clay "Book a time" |
| Colours #1A1A1A / #333333 / #616161 / #F2F2F2 / #F5F5F5 | same; stone #6A6E70 (plan row) for brackets/dashes; UI blue #007CFF → clay #9C5B46 ≤ 2% (blue reads clinical for a spa) |
| Radius 0–2 px, no shadows | photos 0, buttons 2 px, inputs 6 px, no shadows |

Design spec: `brand/design-spec.md`.
