# Kura Wine

WooCommerce store theme for an independent wine merchant: slate-ink ground, umber wash, Fraunces and Karla. The home page has a full-bleed cross-fading film cover under a transparent header, a scattered About, shipments with vertical region titles, bottles, a half-bleed split with hairline rows, the Friday table and an umber visit band. Inner pages (Growers, Shipments, The Case, Tastings, Visit, Delivery) open on a photo band with a vertical label, then scattered text and hairline fact rows. Works without WooCommerce.

## Structure
- `patterns/front-*.php` (home), `patterns/inner-*.php` (inner pages, built by `inc/inner.php`), `visit.php`, `head-bar.php`, `foot-main.php`; `templates/` (`page-photo`, `page-photo-end`, `page-wide`); `inc/i18n/en.php` (theme strings); `demo-content.json`.
- Scroll effects: `assets/sp-scroll.css|js` (unchanged ShipPress copy).
- Photographs are AI-generated film-grain images in `assets/images/`.

Design notes: `brand.md`, `brand/design-spec.md`, `brand/reference.md`. License: GPL-2.0-or-later.
