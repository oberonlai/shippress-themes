=== Hamono Kaji ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A dark, precise store theme for knife forges and kitchen-tool shops: charcoal slate, tamahagane steel grey, warm hinoki wood and one ember accent, large product photography on a ruled twelve-column grid, giant condensed Archivo titles over Instrument Sans text with JetBrains Mono specification sheets, an index-tab header, a care-tip ticker footer, a knife-care guide with a sharpening service, a monthly letter, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products (four kitchen knives, a whetstone set, a hinoki board, a linen knife wrap and a hand-sharpening service). Without it, the Shop page lists every blade with photographs and prices and orders by email, and nothing store-specific is loaded.

== Installation ==

1. Download hamono-kaji.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hamono-kaji.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hamono Kaji. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Hamono Kaji WordPress Theme, Copyright 2026 ShipPress contributors.
Hamono Kaji is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

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
Latin subset (variable WOFF2, weight and width axes), bundled so the theme makes no third-party requests.

Instrument Sans
Files: assets/fonts/instrument-sans-variable-latin.woff2
Copyright 2022 The Instrument Sans Project Authors (https://github.com/Instrument/instrument-sans)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-InstrumentSans.txt, https://openfontlicense.org)
Latin subset (variable WOFF2), bundled so the theme makes no third-party requests.

JetBrains Mono
Files: assets/fonts/jetbrains-mono-variable-latin.woff2
Copyright 2020 The JetBrains Mono Project Authors (https://github.com/JetBrains/JetBrainsMono)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-JetBrainsMono.txt, https://openfontlicense.org)
Latin subset (variable WOFF2), bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, places, brands or products; every forge, maker and shop they suggest is fictional). The product-*.jpg files are crops of the photographs listed here; the files in assets/images/demo/ are identical copies imported into the Media Library by the demo import.
- assets/images/board.jpg
- assets/images/forge.jpg
- assets/images/gyuto.jpg
- assets/images/hero.jpg
- assets/images/petty.jpg
- assets/images/product-gyuto.jpg
- assets/images/product-hinoki-board.jpg
- assets/images/product-knife-roll.jpg
- assets/images/product-nakiri.jpg
- assets/images/product-petty.jpg
- assets/images/product-santoku.jpg
- assets/images/product-sharpening-service.jpg
- assets/images/product-whetstone-set.jpg
- assets/images/santoku.jpg
- assets/images/sharpening.jpg
- assets/images/whetstone.jpg
- assets/images/workshop.jpg
- assets/images/demo/board.jpg
- assets/images/demo/forge.jpg
- assets/images/demo/gyuto.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/petty.jpg
- assets/images/demo/product-gyuto.jpg
- assets/images/demo/product-hinoki-board.jpg
- assets/images/demo/product-knife-roll.jpg
- assets/images/demo/product-nakiri.jpg
- assets/images/demo/product-petty.jpg
- assets/images/demo/product-santoku.jpg
- assets/images/demo/product-sharpening-service.jpg
- assets/images/demo/product-whetstone-set.jpg
- assets/images/demo/santoku.jpg
- assets/images/demo/sharpening.jpg
- assets/images/demo/whetstone.jpg
- assets/images/demo/workshop.jpg

The logo mark (an octagon with a blade, drawn as an inline SVG mask in style.css) is original work for this theme, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.1 =
* The shop and product-search templates use the current search block (limited to products) instead of the outdated WooCommerce Product Search block, so the Site Editor no longer asks to upgrade it.
* The product details block in the single-product template is written in the same full form the editor saves.

= 1.0.0 =
* First release.
