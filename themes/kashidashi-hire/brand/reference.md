# Reference

Reference: https://www.aktio.co.jp/ (a construction-equipment rental company; shows machines on a real site and routes the visitor toward a hire enquiry). Imagery: photo. Measured 2026-11-11 at 1440x900; see `reference-tokens.md`. Screenshots in `ref/`.

## Block structure (home)
1. Header: slanted red logo tab + white nav bar + square search button; 2. Inset hero photo with headline lines at right and a two-cell finder dock on its lower edge; 3. Notice bar; 4. Banner strip (peeking neighbours); 5. Grey finder panel with 3 tabs and a tile grid; 6. Vision strip (video cards); 7. Two-column ruled news with black tags; 8. Pale link tiles; 9. Diagonal contact band with white card; 10. Black footer.

## Signature candidates
1. Slant-cut logo tab fused to a slanted wedge running down the left margin; the hero photo is inset from the wedge. (`ref/aktio-first.png`)
2. Two-cell finder dock lying across the lower edge of the hero in a pale frame. (`ref/aktio-first.png`)
3. Grey finder panel with three flat tabs, active tab white with a 7px top bar, tile grid under it. (`ref/aktio-s900.png`, `ref/scroll-aktio-tab-*.png`)
4. Diagonal two-tone contact band holding one white card with one button. (`ref/aktio-s4500.png`)

## Scroll behaviour
Almost none: header compression at 350px, CSS crossfade hero, fadeIn tabs. See `ref/scroll-aktio-*.png`.

## Colour relationship (ours)
Aktio's red role -> pine #465746 (low saturation). Grey panel #EAEAEA role -> cool mist #E7EBE8. Black strips -> ink #151A16. Accent for tiny marks: rust #B2552F (<= 2%).

## Our counterpart (see design-spec.md)
| aktio | Kashidashi Hire | Where |
|---|---|---|
| Red slant logo tab 430x110 + left wedge 105 -> 220 px | Pine #465746 tab (same polygon) + pine wedge; mist wedges down the margins | Header + hero; every inner page head |
| Two-cell finder dock on the hero foot | Pine "Browse the fleet" + deep pine "Next free week / Request dates" cells, no inputs | Home hero; single-cell dock on 8 inner heads |
| Grey finder panel, 3 flat tabs, 7 px bar, tile grid | Mist panel "By machine / By job / By site", 6 photo tiles with notches | Home #fleet; Fleet; Stories |
| Diagonal contact band + white card | Pine to deep pine 115 deg band, white card, "Request dates" | Home end; Fleet, Rates, Yard, FAQ |
| Notice bar + black tags + ruled rows | "Yard board" bar, micro-tags on rates rows, journal, FAQ | Home; Journal; FAQ |
| Dusk depot photo, 4-slide crossfade | Low-key first-light yard handover (P01-P03), 3-slide crossfade + sp-parallax 8% | Home hero |
| Banner strip with peeking neighbours | "Out this week" scroll-snap strip (P04-P07) | Home under the notice bar |
