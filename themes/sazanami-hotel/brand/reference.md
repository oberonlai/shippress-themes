# Reference (draft, stage 1) — Sazanami Hotel
Primary reference: https://kei-kusatsu.com/ (a small, quiet hot-spring inn; chosen from the S5-Style "hotel / ryokan" category; not used by any earlier theme). The planned reference redirected to a site already used by an earlier theme, so it was replaced. No secondary site.

Screenshots: `ref/kei-first.png` (first screen), `ref/scroll-kei-*.png` (scroll states). Measurements: `reference-tokens.md`.

## What the reference does (first screen)
Full-bleed dusk photograph of the inn, a tiny centred logo glyph with two hairline dashes at the fold, a frosted notice pill bottom-right, transparent header (five lower-case links left, "reservation" + "menu" right). Story: a short stay in a quiet place. Motion: logo overlay fades out (1.6 s), hero stays pinned while the pale chapters slide over it.

## Signature candidates adopted (translated, not copied)
| # | Reference move | Our translation |
|---|---|---|
| T1 | Abutting photo pair flush to the viewport edge beside a narrow tracked verse column with a small translation line | Lake-room pair flush left, verse column in Fraunces / Source Serif 4 with a grey caption line |
| T2 | Single black dot that hops to the current nav word while scrolling, header ink inverts over dark bands | Scroll-spy dot in the centred nav, ink inversion over the dark water band |
| T3 | Two-column hairline listing rows: 3:2 thumb, name, grey "map" chip, tel, outline pill with an external-link mark | "Around the lake" rows (jetty, bakery, boat hire, trail) |
| T4 (support) | Ground that darkens from pale grey to near-black as the chapters pass | Pale mist -> slate -> deep lake-night ground |

## Colour (see reference-tokens.md)
Reference: pale warm-grey ground, black ink, dark olive-black invert ground, no accent. Ours: navy-grey (#4A5560) family, cooler.

## Our counterpart (design-spec.md; verified again after build)
| Reference part | Our theme part |
|---|---|
| Full-bleed dusk photo of the inn (cool sky, warm lit timber) | Film strip of three frames beside the text: window seat + lifted linen curtain + lake in early light (middle, parallax 8 %), jetty at dawn, sill with glass (cut by the viewport edge) — hero strip/beside-photo/logo-row |
| Emblem between two hairline dashes at the fold | "Sazanami" wordmark + wave mark between 24 px hairlines, centre of the hero logo row |
| Frosted notice pill bottom-right | 372 x 54 frosted pill "Seven rooms, all facing the water" at the right end of the logo row |
| Sticky hero, pale chapters slide over | CSS sticky hero (>= 1024 px), "stay" chapter slides over |
| Transparent lower-case nav, dot on current item, ink inverts over dark | Centred lower-case nav, 6 px dot on the current item, ink inverted with mix-blend-mode: difference (T2) |
| Abutting 3:2 pair flush to the viewport edge + tracked verse at 55 % | Home "stay" (left) and "breakfast" (mirrored right); About, Rooms, Breakfast, Contact, Newsletter (T1) |
| Large 3:2 photo + tall 2:3 photo bleeding right | Home "rooms" chapter |
| Glyph + tiny Latin word chapter openers | Wave mark + one lower-case Fraunces italic word on every chapter |
| Dark two-column listing rows: thumb, name, "map" chip, outline pill | Home "around" 2 x 2 rows on #242B31; Around page 8 rows (T3) |
| Ground darkening light -> dark | #EEF0F1 -> #E3E7E9 -> #C9CFD2 -> #242B31 -> #4A5560 -> #1B2126 |
| Fade 1.2 s / rise 6 px / stagger 60 ms, cubic-bezier(.25,.1,.25,1) | sp-reveal, sp-reveal--up (--sp-dist 6px), sp-stagger with the same timing |
| Full-bleed water band | Home water band with sp-parallax (--sp-par 10 %) |
