# Tayori Nursing

A block theme for a home-visit nursing service. Warm grey ground, scattered pebble-masked photographs with two hand-drawn doodles over a celadon wave, a statement that fills from grey to ink, a sticky heading with pill index tabs beside white rounded cards.

- Fonts: Manrope, Public Sans (Noto Sans TC / JP subsets for zh-TW and ja headings).
- Scroll effects: `assets/sp-scroll.css` and `assets/sp-scroll.js` (reveal, stagger, parallax); respects `prefers-reduced-motion`.
- Home patterns: `front-hero`, `front-statement`, `front-why`, `front-visits`, `front-round`, `front-plan`, `front-fees`, `front-stories`, `front-people`, `front-call`.
- Design notes: `brand.md`, `brand/design-spec.md`.

## Status
- Home page (English) is complete: hero, statement, why, visits, morning round, care plan, fees, stories, people, call.
- Main menu links to real pages (About, Visits, A morning round, Care plan, Fees, Stories, Contact) created by the demo import; News is the posts page.
- Hero parallax speeds are 6 / 9 / 9 / 7 % (sp-scroll scales the layer, so values above 9 % would expose the ground).
- Inner pages, the remaining demo posts and the zh-TW, ja, fr and de translations are still to do.
