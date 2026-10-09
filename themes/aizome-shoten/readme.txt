=== Aizome Shoten ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A typographic, retro theme for independent bookshops and small presses that sell books, zines and stationery, set like a mid-century Japanese pocket paperback: condensed capitals on a kinari page, indigo spine labels down every page head, catalogue numbers in mono, a strict twelve-column editorial grid with double rules, a persimmon obi band and book covers that lift off the table, plus readings and events with a chair reservation form, and WooCommerce shop, product, cart, checkout and account templates styled to match, in aizome indigo, kinari paper, sumi ink and pale asagi blue with one persimmon accent.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds ten sample products. Without it, the Shop page shows a catalogue of covers with reservations by email and nothing store-specific is loaded.

== Installation ==

1. Download aizome-shoten.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/aizome-shoten.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Aizome Shoten. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own covers and photographs. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The chair reservation, contact and newsletter forms are plain HTML: connect their action to your form, booking or email service.

== Copyright ==

Aizome Shoten WordPress Theme, Copyright 2026 ShipPress contributors.
Aizome Shoten is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Archivo
Files: assets/fonts/archivo-variable-latin.woff2
Copyright 2020 The Archivo Project Authors (https://github.com/Omnibus-Type/Archivo)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Archivo.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, width axis 62-100% and weight axis 400-900), bundled so the theme makes no third-party requests.

Newsreader
Files: assets/fonts/newsreader-variable-latin.woff2, assets/fonts/newsreader-italic-variable-latin.woff2
Copyright 2020 The Newsreader Project Authors (https://github.com/productiontype/Newsreader)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Newsreader.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, optical size and weight axes), bundled so the theme makes no third-party requests.

DM Mono
Files: assets/fonts/dm-mono-400-latin.woff2, assets/fonts/dm-mono-500-latin.woff2
Copyright 2020 The DM Mono Project Authors (https://github.com/googlefonts/dm-mono)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-DMMono.txt, https://openfontlicense.org)
Latin subset (WOFF2, regular and medium), bundled so the theme makes no third-party requests.

= Images =

All illustrations, book covers and product pictures are original procedural vector artwork drawn in code for this theme by the ShipPress contributors (flat shapes, halftone patterns and SVG turbulence filters for paper grain; every title, name and label on them is fictional, and its lettering is outlined from the bundled OFL fonts above; no photographs, stock images or third-party artwork), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/almanac-2026.svg
- assets/images/area-map.svg
- assets/images/book-eleven-bridges.svg
- assets/images/book-empty-stations.svg
- assets/images/book-indigo-year.svg
- assets/images/book-night-laundry.svg
- assets/images/book-small-island.svg
- assets/images/bookmarks-letterpress.svg
- assets/images/hero-shelves.svg
- assets/images/keeper-ilse.svg
- assets/images/keeper-mariko.svg
- assets/images/letterpress-proof.svg
- assets/images/notebook-indigo.svg
- assets/images/press-room.svg
- assets/images/reading-night.svg
- assets/images/shop-interior.svg
- assets/images/type-case.svg
- assets/images/writing-paper-kinari.svg
- assets/images/zine-spine-talk.svg
- assets/images/zine-table.svg

Raster copies of the same artwork, imported into the Media Library by the demo import and used as product images (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/almanac-2026.jpg
- assets/images/demo/area-map.jpg
- assets/images/demo/book-eleven-bridges.jpg
- assets/images/demo/book-empty-stations.jpg
- assets/images/demo/book-indigo-year.jpg
- assets/images/demo/book-night-laundry.jpg
- assets/images/demo/book-small-island.jpg
- assets/images/demo/bookmarks-letterpress.jpg
- assets/images/demo/hero-shelves.jpg
- assets/images/demo/keeper-ilse.jpg
- assets/images/demo/keeper-mariko.jpg
- assets/images/demo/letterpress-proof.jpg
- assets/images/demo/notebook-indigo.jpg
- assets/images/demo/press-room.jpg
- assets/images/demo/reading-night.jpg
- assets/images/demo/shop-interior.jpg
- assets/images/demo/type-case.jpg
- assets/images/demo/writing-paper-kinari.jpg
- assets/images/demo/zine-spine-talk.jpg
- assets/images/demo/zine-table.jpg

The paper grain, spine label, double rules, obi band and book-spine mark in style.css and assets/css/woocommerce.css are inline SVG and CSS written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and artwork, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
