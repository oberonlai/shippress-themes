=== Tsuya Lacquer ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A luxe, restrained store theme for a small urushi lacquerware workshop: lacquer-black and deep brown-black bands with warm ivory pages and one muted cinnabar, Castoro with Epilogue, a hamburger-only header that opens a full-screen lacquer-black overlay menu, a full-bleed glossy bowl on the home page, soft gloss highlights and a layers-of-lacquer count on every product, a split black and cinnabar footer, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products in three categories (Bowls, Trays & boxes, Table pieces). Each product's layer count is its "Layers of lacquer" attribute, edited once in the product editor and shown under the price in the shop and on the product page. Without WooCommerce, the Shop page shows the shelf of pieces with their prices, orders go by email, and nothing store-specific is loaded.

Without JavaScript the overlay menu cannot open, so the menu is shown as a plain list under the header.

The workshop address, opening days and email, and the shelf with its prices and the "Most gifted" badge are kept in ONE place each: two synced patterns (under Appearance > Editor > Patterns). The footer, contact and shop pages only reference them, so a change made once shows everywhere. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==


1. Download tsuya-lacquer.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tsuya-lacquer.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsuya Lacquer. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect their action to your form or email service.

== Copyright ==

Tsuya Lacquer WordPress Theme, Copyright 2026 ShipPress contributors.
Tsuya Lacquer is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Castoro
Files: assets/fonts/castoro-latin.woff2
Copyright 2020 The Castoro Project Authors (https://github.com/TiroTypeworks/Castoro)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Castoro.txt, https://openfontlicense.org)
Latin subset (WOFF2, weights 400-500) of the variable font in https://github.com/google/fonts/tree/main/ofl/castoro, bundled so the theme makes no third-party requests.

Epilogue
Files: assets/fonts/epilogue-variable-latin.woff2
Copyright 2020 The Epilogue Project Authors (https://github.com/Etcetera-Type-Co/Epilogue)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Epilogue.txt, https://openfontlicense.org)
Latin subset (WOFF2, weights 300-600) of the variable font in https://github.com/google/fonts/tree/main/ofl/epilogue, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or products; the workshop, its makers and its products are fictional).
- assets/images/bench.jpg (the craft, workshop, journal)
- assets/images/bowl.jpg (collections, care guide, journal)
- assets/images/chopsticks.jpg (product photograph source)
- assets/images/cups.jpg (collections, journal)
- assets/images/hands.jpg (home, contact, journal)
- assets/images/hero.jpg (home opening, a Kuro Rice Bowl crop)
- assets/images/jubako.jpg (collections)
- assets/images/layers.jpg (home layers panel, journal, Nested Bowl Trio crop)
- assets/images/plate.jpg (product photograph source)
- assets/images/product-chopsticks.jpg (product photograph, cropped from the photographs above)
- assets/images/product-jubako.jpg (product photograph, cropped from the photographs above)
- assets/images/product-kuro-bowl.jpg (product photograph, cropped from the photographs above)
- assets/images/product-kuro-plate.jpg (product photograph, cropped from the photographs above)
- assets/images/product-nested-trio.jpg (product photograph, cropped from the photographs above)
- assets/images/product-sake-cups.jpg (product photograph, cropped from the photographs above)
- assets/images/product-shu-bowl.jpg (product photograph, cropped from the photographs above)
- assets/images/product-square-tray.jpg (product photograph, cropped from the photographs above)
- assets/images/tray.jpg (journal)
- assets/images/demo/bench.jpg (copy of assets/images/bench.jpg for the Media Library)
- assets/images/demo/bowl.jpg (copy of assets/images/bowl.jpg for the Media Library)
- assets/images/demo/chopsticks.jpg (copy of assets/images/chopsticks.jpg for the Media Library)
- assets/images/demo/cups.jpg (copy of assets/images/cups.jpg for the Media Library)
- assets/images/demo/hands.jpg (copy of assets/images/hands.jpg for the Media Library)
- assets/images/demo/hero.jpg (copy of assets/images/hero.jpg for the Media Library)
- assets/images/demo/jubako.jpg (copy of assets/images/jubako.jpg for the Media Library)
- assets/images/demo/layers.jpg (copy of assets/images/layers.jpg for the Media Library)
- assets/images/demo/plate.jpg (copy of assets/images/plate.jpg for the Media Library)
- assets/images/demo/product-chopsticks.jpg (copy of assets/images/product-chopsticks.jpg for the Media Library)
- assets/images/demo/product-jubako.jpg (copy of assets/images/product-jubako.jpg for the Media Library)
- assets/images/demo/product-kuro-bowl.jpg (copy of assets/images/product-kuro-bowl.jpg for the Media Library)
- assets/images/demo/product-kuro-plate.jpg (copy of assets/images/product-kuro-plate.jpg for the Media Library)
- assets/images/demo/product-nested-trio.jpg (copy of assets/images/product-nested-trio.jpg for the Media Library)
- assets/images/demo/product-sake-cups.jpg (copy of assets/images/product-sake-cups.jpg for the Media Library)
- assets/images/demo/product-shu-bowl.jpg (copy of assets/images/product-shu-bowl.jpg for the Media Library)
- assets/images/demo/product-square-tray.jpg (copy of assets/images/product-square-tray.jpg for the Media Library)
- assets/images/demo/tray.jpg (copy of assets/images/tray.jpg for the Media Library)

Screenshot: screenshot.png, made from the theme itself, GPL-2.0-or-later.
