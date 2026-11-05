# Teisha Parking

Teisha Parking is a landing theme for a commercial car-park operator in Northgate, founded in 2009. The home page walks through the sites a monthly contract suits, how a bay is chosen, what the contract covers, the published fees and a single request ("Ask for a bay"). Set in Figtree and Source Sans 3, with Noto Sans TC and Noto Sans JP for CJK headings.

## Structure
- `patterns/front-*.php`: the ten home sections (hero window, ticker and ledger, about, sites masonry, dusk band, steps, contract, fees, notes, request band).
- `patterns/head-*.php`, `foot-main.php`: header bar, page head, footer.
- Menu pages (demo content): Sites, Choosing, Contract and Fees reuse the home section patterns as real pages; Stories is the journal.
- `templates/`: front page, page, single, journal home, archive, category, tag, search, index, 404.
- `inc/i18n/<lang>.php`: the theme strings; `demo-content*.json`: sample content.
- `assets/sp-scroll.*`: ShipPress scroll effects (parallax, reveal, marquee, count).
- Photos: `assets/images/` (AI-generated, GPL-2.0-or-later / CC0).

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.
