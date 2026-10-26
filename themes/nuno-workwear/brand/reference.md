# Reference (draft, stage 1): Nuno Workwear
S5-Style (https://www.s5-style.com) picks, category: apparel / manufacturing (ファッション・メーカー). Not used by earlier themes (checked with grep of themes/*/brand/reference.md).
| Role | Site | Why |
|---|---|---|
| Main | https://saab-group.jp/ | denim processing factory: documentary plant photography, giant two-line hero type over full-bleed photo, dashed column guides, cream/ink ground with dark band rhythm, GSAP scroll reveals |
| Secondary | https://occkwork.com/ | quiet hairline column grid on white, top white band then photo (top-bottom halves), shaped crops, light fade-in |
Screenshots: `ref/saab-first.png`, `ref/saab-service.png`, `ref/saab-sustain-dark.png`, `ref/occ-first.png`, `ref/occ-intro.png`, `ref/occ-shapes.png`; scroll before/after `ref/scroll-*.png`. Measurements: `reference-tokens.md`.
## Signature technique candidates
Saab: (S1) giant two-line uppercase headline (288px Jost) laid over the full-bleed hero photo, line-mask rise on load; (S2) 4 dashed vertical guide lines running the full page behind content; (S3) photo-wipe/zoom-mask reveals: service photos wipe up, full-bleed band opens from a centred 50% box to full on scroll; (S4) light ground ↔ deep ink band rhythm with text colour flipping; (S5) parenthesised eyebrow + Jost uppercase colour H2 label left, one-line lead + outline button right.
Occkwork: (O1) 5 equal hairline columns with content snapped to them; (O2) white top band over the photo (first screen split); (O3) heavy radius/arch crops; (O4) thin 200-weight 120px H2 word.
## Colour relationships (to translate, not copy)
Primary ink (dark base) ~35%, ground ~45%, photo ~15%, accent ~2–5%. Ours: see stage-a.md palette.
## Scroll effects
See reference-tokens.md (g) and stage-a.md table.
## Mapping to our deliverables
Filled at design-spec stage (see design-spec.md for exact values).
| Reference element | Nuno Workwear deliverable |
|---|---|
| saab S1 giant two-line headline over hero photo, line-mask rise | Home hero "MADE / FOR SHIFTS" (Albert Sans 500, 11.5vw) across the band/photo seam; every inner page head repeats it (S-A) |
| saab hero photo (plant, cloth heaps, worker) + slide cross-fade 2s | Hero bottom half: documentary workshop photos P01–P03 (jackets on timber rail, boots on bench), 2s cross-fade, `sp-parallax` 8% |
| saab JP tagline beside line 2 | Spec tagline "12 oz duck · 8 oz waxed cotton · XS–4XL" right of line 2 |
| saab S2 dashed guides + occkwork O1 columns | 5 two-tone dashed guides (4 × 300px columns) on every page; trade card mosaic, price list, order steps snapped to them (S-B) |
| saab S3/S4 ink band rhythm + photo opening from centred box | Home #4 "On the floor" and #8 "How to order" ink bands `#1F1D1B`, cream text, `sp-reveal--mask`; one ink band per inner page (S-C) |
| saab S5 eyebrow + colour H2 + outline button | Heading system: `(EYEBROW)` + H2 2.875rem uppercase accent `#A9521D`, 62px radius-10 buttons with divider + arrow |
| saab service rows 456/636, pic wipe | Home #5 fit/embroidery rows, story and service rows on inner pages, `sp-reveal--wipe` |
| saab people slider 1.75 cards | Home #7 crew stories slider bleeding past the viewport |
| saab `data-inview-each` stagger | Mosaic cards and order columns: `sp-stagger` + `sp-reveal--up` (1.5s, 28px) |
| occkwork O2 white top band over photo | First screen top/bottom halves (band 312px, photo below) |
| saab palette #FFFCF5 / #00161E / #0389C5 | #F3F2EF / #1F1D1B / #A9521D (orange from saab hero machines; blue avoided) + row charcoal #524E4A |
| occkwork O3 shaped crops, O4 thin 120px word | not used (radius 0 everywhere, as saab) |
