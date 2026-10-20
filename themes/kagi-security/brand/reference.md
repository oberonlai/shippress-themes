# Kagi Security: S5-Style design references

Studied on 2026-10-20 from the S5-Style gallery (Japanese web design collection), IT / system development / corporate / BtoB entries. Only structure, techniques and colour relations are borrowed; no copy, photographs, logos or whole-page layouts.

| Site | URL | S5-Style entry | What was studied |
|---|---|---|---|
| Symdirect | https://www.symdirect.co.jp/ | https://www.s5-style.com/11773/ | First screen: full-bleed staff photo under a translucent magenta chevron, giant wordmark, white label-chip menu (2 x 3, Contact inverted), offset caption chips. Colour source A. |
| Payn | https://payn.io/ | https://www.s5-style.com/11746/ | Feature sections: tick-bar label left, heading in the right column with the key phrase in the accent colour, a rounded image card over giant rotated ghost words. |
| DeltaX | https://delta-x.co.jp/ | https://www.s5-style.com/11735/ | Calm white corporate ground, navy navigation text, one indigo button. Colour source B. |
| Jillion | https://jillion.co.jp/ | https://www.s5-style.com/11790/ | Whitespace and restraint of a dark splash (studied only). |
| GLIQ | https://gliq.co.jp/ | https://www.s5-style.com/12029/ | Serif headline over generous whitespace (studied only). |

## Signature techniques used

1. **Translucent chevron over a full-bleed photograph** (Symdirect).
   - In the reference: a 1440 x 900 office photo with a magenta chevron at about 0.8 opacity, apex at the top centre (720, 170), arms falling to the lower left edge and a right leg running down to the bottom, white type over it.
   - In Kagi Security: home page, `front-cover` (first screen). The analysts' room at night, full bleed, with a signal-indigo chevron (rgba 40, 54, 150, 0.52, CSS clip-path, apex at 50% / 19%, left arm to the left edge, right leg at 71-85% down to the bottom). The headline, lead and buttons sit over its left arm as in the reference. A smaller echo of the chevron sits on the client-visit photo in `front-close`. On phones the chevron becomes a simple symmetric band.
2. **White label chips** (Symdirect).
   - In the reference: the menu is a staggered 2 x 3 set of white rectangular chips of different widths (ragged right edge) with Contact inverted in near-black, and the tagline is set as two offset white chips over the photo.
   - In Kagi Security: the one top menu is white chips on every page (2 x 4 staggered grid over the photo on the home page, a single row on inner pages) with Contact inverted in night ink; two offset caption chips on the cover ("Two analysts on the desk tonight" / "A person looks at every alert"); chapter, plan and analyst-name chips in `front-chapters`, `front-plans` and `front-analysts`, and square chip buttons.
3. **Rotated ghost words behind a rounded photo card, tick-bar label + right-column heading** (Payn).
   - In the reference: a small label with a 30 x 3 px bar at the left, a heading in the right column with the key phrase in the accent colour, a centred 640 x 400 card with a 16 px radius over giant pale "Service Features" letters rotated about -20 degrees and bleeding off both edges.
   - In Kagi Security: home page, `front-figures` ("Honest figures" in italic Instrument Serif at up to 14rem, #DFE5EF on white, rotated -12 degrees, behind a 36rem rounded (18 px) desk photograph, four honest figures below). The tick-bar label with the right-column heading and indigo key phrase is used for `front-watch`, `front-figures` and `front-plans`.

The home page mixes these with the brand's own content (what we watch, four photographed chapters in a 2 x 2 grid, named analysts, plans with monthly fees) so it is not a copy of any one reference.

## Palette

Source sites: Symdirect (chevron, white chips, dark chip over a photo) and DeltaX (off-white ground, navy text, indigo button, pale mist). The magenta of Symdirect is shifted to DeltaX's indigo so that one hue carries both sources.

| Role | Reference hex and share | Kagi Security hex and share |
|---|---|---|
| Chevron / saturated colour | Symdirect #B85CB9 at ~0.8 opacity; 27.9% saturated pixels in the 1440 x 900 first screen | #283696 at 0.52 opacity; 24.6% saturated pixels in the first screen |
| Label chips | Symdirect #FFFFFF | #FFFFFF |
| Inverted chip / dark | Symdirect #222222 | #121A2B night ink (text, inverted chip) |
| Ground | DeltaX #F8F8F8 (~99% of its first screen) | #F5F7FA cloud white (all sections below the cover) |
| Navy | DeltaX #1C2670 (navigation text) | #16203A night navy (footer, dark areas) |
| Accent | DeltaX #3444B8 (one button, < 1%) | #3445A8 signal indigo (links, labels, key phrases, < 3% below the first screen) |
| Pale panel | DeltaX #E8F0F8 | #E7ECF3 pale mist (plans band) |

First-screen limit (rules.palette_from_reference): min(30%, Symdirect 27.9%) = 27.9%; the theme measures 24.3-25.1% across the five languages (see gate.md in the run folder).
