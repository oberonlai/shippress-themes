# Denki Components

Denki Components — a business theme for a passive-components maker, built as a ledger of numbers. A cool pale ground with blue-grey hairlines, indexed product rows with 3:2 photographs at 54 percent and a text column from 63 percent, outline pills with a filled round arrow disc, and a fixed navy badge with a rotating ring of tracked text. The home page opens on a headline over a band of four figures and a framed reel-line photograph with scroll parallax; it continues with a right-hand company introduction, four ruled product families, a monthly ledger beside a sticky photograph, a staggered plant photo field with hash tags, three case rows beside an offset portrait, a sample-kit price list and a request-and-visit block. IBM Plex Serif for headings, IBM Plex Sans for reading. Works without WooCommerce. WCAG AA colours; scroll effects respect reduced motion.

## Structure
- `patterns/front-*.php`: the eight home sections (hero, intro, families, ledger, plant, cases, kits, close).
- `templates/`: front-page, page, single, index/archive/search and 404 (inner-page templates follow in stage two).
- `parts/`: header (top bar, nav, language links) and footer (with the fixed samples badge).
- `assets/sp-scroll.css`, `assets/sp-scroll.js`: ShipPress scroll effects (reveal, wipe, parallax); `assets/fonts/`: IBM Plex.
- Photos: `assets/images/demo/` (AI-generated, GPL-2.0-or-later / CC0). See `readme.txt` for the list.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`.

License: GPL-2.0-or-later.
