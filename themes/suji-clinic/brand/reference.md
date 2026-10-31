# Reference
Reference: https://shinmi-shika.com/ (S5-Style entry). Measurements: `reference-tokens.md`. Screenshots: `ref/`. Binding design: `design-spec.md`.
IMAGERY: photo (real photographs, bright desaturated clinical tones).

## Signature techniques
| # | Reference technique | Shape / composition / position | 成品對應 |
|---|---|---|---|
| T1 | Twin full-height photo hero, 50/50, headline + hairline bottom-left, notice card, nav strip with Latin sub-labels directly under | `ref/shinmi-first.png`; twin composition is the reference's slide 2 | Home `front-hero`: H1 taping + H2 race shoes, cross-fading to H3 + H4; slate card crossing the seam; 7-item sticky strip. Mini twin head on all 10 inner pages |
| T2 | Tinted photo band + white card with diagonal-cut inset photo, tab label, ghost thin Latin word, alternating sides | `ref/scroll-shinmi-1800.png`, `-2700.png` | Home `front-method`: ASSESS / REBUILD / RETURN bands, 1413×486, card 747×378, ≈12% slant, hard-shadow tab. On 8 inner pages |
| T3 | 3×2 thumbnail cards with an offset line: title, round arrow, Latin sub-label, one-line caption on a pale paper ground | `ref/scroll-shinmi-2700.png`, `-3600.png` | Home `front-injuries`: six injury groups, 389×240 photos, 8 px offset line, Ø45 chips, CSS paper grain. Also Injuries, Athletes & Clubs, Journal |
| Support | Vertical Latin word on an edge-flush portrait with name plate | `ref/scroll-shinmi-4500.png` | Home `front-room`: D1 portrait, THE ROOM in taupe, desktop only |

## Scroll effects
Reference: hero fade (5000 ms hold, 1200 ms fade, slick), nav slides in on scroll-up (.3s ease-in-out), pagetop fade, no content reveals.
成品對應: CSS hero cross-fade at the same timing; CSS sticky strip (scroll listeners are not allowed); `sp-reveal--left/--right` on T2 cards; `sp-stagger` + `sp-reveal--up` on T3 cards and room rows; `sp-parallax` on `front-proof`, `--sp-par` 10% desktop, 7% mobile.

## Palette relation
Pale ground ≫ ink text; one slate-violet main, steel and taupe secondary tabs, three pale tints behind photos.
成品對應: reference values kept: `#F3F5F5`, `#FFFFFF`, `#332F26`, `#565565`, `#998E73`, `#CCC6B9`, `#CDD9E2`, `#DED9E5`. Steel adjusted from `#839FB6` to `#7A97AE` for 3:1 with white. Lavender `#AD9FBD` dropped from the notice card and tabs (white on it is 2.48:1); main takes its place. Row hex `#566870` is not used in the UI: it sits too close to Hazuki Instruments' `#5C6A78`.
