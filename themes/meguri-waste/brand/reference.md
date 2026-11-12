# Reference notes (draft; "Our counterpart" column filled in at build)
Primary: https://www.daiseki.co.jp/ — an industrial-waste treatment company whose pages are calm, white, slate-and-teal, and lead with watercolour illustration. Tokens: `reference-tokens.md`. Screenshots: `ref/daiseki-*.png`, scroll before/after pairs `ref/scroll-*.png`.

## First screen
Full-bleed watercolour panorama (woman in straw hat seen from behind, looking over a bright green city on a bay, wind turbines), catch line set directly on the picture in mixed weights, a two-tier header above (utility row with an outlined permit box, an outlined red helpline box, contact, language, search; nav row below with the current item as a slate tab). Story: "treat waste with care and it becomes the future". Motion: slow Ken Burns with a blur cross-fade.

## Signature candidates
1. Wide watercolour panorama with the person in the foreground looking into the scene, headline on the picture.
2. Utility row of outlined boxes above the nav (permit, emergency line) = the one request always in view; current nav item as a filled slate tab.
3. Section lead: text left on white, watercolour wash bleeding off the right edge and dissolving into white; 3px gradient hairline under page titles.
4. Flat pictogram process line: jars/equipment pictograms joined by long slate arrows with teal drops, under an h2 with a full-width 1px slate rule.
5. Pale link boxes with teal ">" and 3-up illustrated link cards with a teal circle-arrow in the corner.

## Scroll effects (no libraries beyond jQuery; see tokens (g))
Header shrink >200px; fadeInDown 3s at 200px inside viewport; Ken Burns hero; smooth anchor scroll.

## Our counterpart (see design-spec.md)
| Reference | Meguri Waste |
|---|---|
| Watercolour bay panorama, person from behind, catch on picture, Ken Burns | Dawn loading-dock watercolour panorama (P01) in a sideways pan-strip, coordinator in hi-vis from behind, h1 "A collection day / you can plan around." 400/700 on the sky, Ken Burns 20s + sp-parallax 8% |
| Outlined permit / helpline boxes, slate current tab | Teal-outline licence box, red-outline missed-pickup line box, slate tab "Set your schedule" |
| Service lead: text left, wash bleeding off right, dissolving to white; 3px gradient hairline | Lead band on home intro, schedule CTA and every inner page; mask 0→38%, hairline #A8D26B→#22B0A4 |
| Flat pictograms + long slate arrows + teal drops under ruled h2 | "A collection day" 5-step (home) / 7-step (inner) timed pictogram line; ruled h2 + teal-dash h3 site-wide |
| Pale link boxes, 3-up cards with teal circle-arrow | Case-note rows 360×248 with teal circle-arrow, outline tag chips |
| fadeInDown 3s, header shrink, smooth anchor | sp-reveal--down .9s + sp-stagger, sticky nav row, CSS smooth scroll |
