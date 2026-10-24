# Reference (S5-Style) — hayate-cycles  (Our counterpart filled from design-spec.md, stage 1 spec 2026-10-24)
Source index: https://www.s5-style.com/ (category vehicles, motorbikes and bicycles). Neither site appears in earlier themes' reference.md.

| ID | Site | Why |
|---|---|---|
| R1 (primary) | https://naganoanzen.jp/ | Vehicle service/repair/sales workshop. White ground, ultra-bold gothic heading, three misaligned photos bleeding off both edges, hairline service index (01  / 02  / 03  / 04 ), cobalt pill buttons and a full-width cobalt contact band. |
| R2 (secondary) | https://setouchi-cycle-stays-hiroshima.jp/ | Cyclist hotel. Dusk low-key photo hero, capsule photo masks, dashed road-centre line, scroll-percent counter, clip-path wipes between photo sections. |

## Signature techniques (use 2-3, keep shape and contrast)
| # | Technique | Reference shape / composition | Our counterpart |
|---|---|---|---|
| 1 | Hairline service index | R1: full-width rows between 1 px black rules; small number "01" + 60 px bold name left, 3-line text + pill centre, 3:2 photo right (25% width) |T1: home block 2 `front-index` 01–06 (New bikes, Bike fitting, Tune-ups, Repairs, Wheels, E-bike care), edge-to-edge 1 px `#1D211B` rules, names 3.75rem 700, accent pill `#747864`, 3:2 photo S1–S6 right; continued on Services, Shop categories, Workshop, Wheels, About people rows, Stories, Prices table |
| 2 | Three off-grid photos bleeding off viewport edges | R1 hero: tall photo bleeds right (39% wide), wide photo bleeds left under the lede, third photo drops below, offset in the gap |T2: home hero H1 (x 882→1440 bleed right, 558×1072, parallax 8%), H2 (x 0→705 bleed left, y 670), H3 (496×331 at x 617 overlapping H2's corner); T2-lite page heads on every inner page |
| 3 | Photo cover wipe on reveal | R1: solid colour block scales Y 0→1→0 over each photo (.65 s) |T3: `sp-reveal--wipe` on photos over a `#747864` figure background (accent block shows first); hero load wipe `::after` .65 s cubic-bezier(.73,0,.83,1) |
| 4 | Capsule (stadium) photo mask | R2: 475×250 pill-shaped photo in the text column; tall capsule overlay over full-bleed photo |T3: wide capsule 475×250 S7 (home block 3, About), P4 (Wheels), S9 (Bike fitting); tall capsule 297×492 S10 (home process), S6 (Workshop) |
| 5 | Road-centre dashed line | R2: white dashed vertical line through the page middle |T3: `.hc-road` 12×120 / gap 120 `#B9BDB0` beside the home shop story, Bike fitting, Wheels, Rides (desktop only) |

## Colour relations (from R1, adapted)
R1: white ground 88% · near-black text/rules · cobalt #0B318F on pill buttons and one full-bleed contact band · saturated colour only inside photos.
R2: sand ground #F2E2D0 · navy text #13294B · sky #9CD9E9 / tan #C39C6D CTAs.
Ours: low-chroma stone ground + ink text; the palette hex (#747864) plays R1's cobalt role on pills / rules / numerals / one ink contact band; small amber spot (task-lamp glow).

## Reference screenshots (this folder `ref/`)
nag-first.png, nag-photos-service.png, nag-service-rows.png, nag-recruit-collage.png, nag-contact.png, set-first.png, set-about.png, scroll-fade-before.png, scroll-fade-after.png, scroll-set-clip-before.png, scroll-set-clip-after.png.
Full measurements: reference-tokens.md.
