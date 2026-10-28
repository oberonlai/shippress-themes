# Mame Coffee

An editorial block theme for a **small specialty coffee roastery and bar**: one 5 kg drum roaster, six green lots a year, four on the bar at a time, each poured between day 5 and day 28 after roasting.

The demo roastery is fictional (Ghent, founded 2019 by Ines Duarte and Tomas Varga). The whole brand is written down in [`brand.md`](brand.md); every page's copy comes from it. Type: hospitality. The English home page and short inner pages (lots, bar, people, roastery, visit, journal) are in; richer inner pages and zh-TW, ja, fr and de follow.

## Concept: a window onto the roastery

- **Framed window.** A sharp, square-cornered photograph (68 % of the width, 982 : 640) floats over a full-bleed photograph of the roastery hall; the wordmark crosses its lower-left corner. The backdrop drifts slower than the page (`sp-parallax`, 10 %), and on scroll (≥960 px, CSS scroll-driven) the window grows to 1.08× and rises 50 px so the backdrop fills the screen.
- **Rule-topped columns.** A 3 px `#1D1D1D` rule with a small break near its right end, a caps Newsreader title with a 24 px round outline arrow, a `#E8E8E8` panel with a white chip, and Sweetness / Acidity / Body block bars.
- **Side label and hairlines.** A rotated grey label in its own column, a wide photograph over three of four columns beside a narrow ruled stanza column, and 1 px `#C8C8C8` rows for schedules, prices and visiting details.
- **Palette.** White page, ink `#1D1D1D`, panel `#E8E8E8`, hairline `#C8C8C8`, black oak `#3F3834` for UI, deep roast `#26211E` for overlays and the footer, copper `#B8793E` only as a chip dot. The photographs carry the colour.
- **Type.** Newsreader (headings, wordmark, prices) over Nunito Sans (text), both OFL-1.1, bundled as Latin WOFF2.

## Front page

1. **Hero**: the framed window, the wordmark, an underlined lede on a dark translucent backing for legibility, and a scroll cue.
2. **Statement**: the origin slope at dawn with an underlined three-line statement (parallax).
3. **Lots**: four rule-topped columns with bag panels, chips, rating bars and prices.
4. **Pour**: the recipe in three stanzas beside a wide photograph (wipe reveal).
5. **People**: who roasts which morning, a wide cupping-table card and a narrow head-roaster card, with schedule rows.
6. **Bar**: the full-width hairline price list.
7. **Stories**: one wide and two narrow journal columns.
8. **Visit**: a contained photograph with a statement and four info columns.

## Scroll effects

`assets/sp-scroll.css` and `assets/sp-scroll.js` (ShipPress sp-scroll): `sp-parallax` on the hero and statement backdrops, `sp-stagger` + `sp-reveal--up` on the card columns, `sp-reveal--wipe` on the pour photograph. Off with reduced motion, without JavaScript, in the editor and with `?sp-static`.

## Files

`theme.json`, `style.css`, `functions.php`, `parts/` (header, footer), `templates/`, `patterns/` (`front-*` sections), `inc/` (demo import, strings, helpers), `demo-content.json`, `brand/` (reference notes and design spec).
