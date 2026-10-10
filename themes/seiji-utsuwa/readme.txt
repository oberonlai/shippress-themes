=== Seiji Utsuwa ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A sculptural, gallery-like theme for small online shops of handmade Japanese tableware: celadon bowls, plates, cups and vases from a few small kilns, shown like a museum room. Objects stand on porcelain plinths with soft shadows, pictures sit in arches and rounded glaze-pool shapes, with catalogue labels and generous air, in celadon mist, kiln teal, unglazed clay and iron-black ink, plus a kilns page, a care guide, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds ten sample products. Without it, the Shop page shows the catalogue as objects on plinths with prices and orders by email, and nothing store-specific is loaded.

== Installation ==

1. Download seiji-utsuwa.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/seiji-utsuwa.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Seiji Utsuwa. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Seiji Utsuwa WordPress Theme, Copyright 2026 ShipPress contributors.
Seiji Utsuwa is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Brygada 1918
Files: assets/fonts/brygada-1918-variable-latin.woff2, assets/fonts/brygada-1918-italic-variable-latin.woff2
Copyright 2020 The Brygada 1918 Project Authors (https://github.com/kosmynkab/Brygada-1918)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Brygada1918.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 400-700, with italic), bundled so the theme makes no third-party requests.

Hanken Grotesk
Files: assets/fonts/hanken-grotesk-variable-latin.woff2, assets/fonts/hanken-grotesk-italic-variable-latin.woff2
Copyright 2021 The Hanken Grotesk Project Authors (https://github.com/marcologous/hanken-grotesk)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-HankenGrotesk.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 100-900, with italic), bundled so the theme makes no third-party requests.

= Images =

All illustrations and product pictures are original vector artwork drawn in code for this theme by the ShipPress contributors (flat shapes with soft gradients and blurred shadows; no text except the numbers on the map, no photographs, stock images or third-party artwork; every shop, kiln and person they show is fictional), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/autumn-table.svg
- assets/images/care-washing.svg
- assets/images/celadon-crackle.svg
- assets/images/glaze-test-tiles.svg
- assets/images/golden-repair.svg
- assets/images/hero-celadon-bowl.svg
- assets/images/keeper-ayame.svg
- assets/images/keeper-ren.svg
- assets/images/kiln-ishizuchi.svg
- assets/images/kiln-map.svg
- assets/images/kiln-mizunoe.svg
- assets/images/kiln-shirokawa.svg
- assets/images/kiln-tsukiyama.svg
- assets/images/newsletter-letter.svg
- assets/images/packing-a-parcel.svg
- assets/images/product-ash-glaze-bottle-vase.svg
- assets/images/product-carved-lidded-jar.svg
- assets/images/product-dew-small-dishes.svg
- assets/images/product-iron-rim-noodle-bowl.svg
- assets/images/product-moon-pool-bowl.svg
- assets/images/product-pebble-chopstick-rests.svg
- assets/images/product-ripple-teacup.svg
- assets/images/product-river-stone-sake-set.svg
- assets/images/product-still-water-plate.svg
- assets/images/product-tide-oval-platter.svg
- assets/images/throwing-on-the-wheel.svg
- assets/images/viewing-room.svg
- assets/images/wood-firing-night.svg

Raster copies of the same artwork for the Media Library (rendered from the SVGs above by scripts/rasterize-images.py), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/demo/autumn-table.jpg
- assets/images/demo/care-washing.jpg
- assets/images/demo/celadon-crackle.jpg
- assets/images/demo/glaze-test-tiles.jpg
- assets/images/demo/golden-repair.jpg
- assets/images/demo/hero-celadon-bowl.jpg
- assets/images/demo/keeper-ayame.jpg
- assets/images/demo/keeper-ren.jpg
- assets/images/demo/kiln-ishizuchi.jpg
- assets/images/demo/kiln-map.jpg
- assets/images/demo/kiln-mizunoe.jpg
- assets/images/demo/kiln-shirokawa.jpg
- assets/images/demo/kiln-tsukiyama.jpg
- assets/images/demo/newsletter-letter.jpg
- assets/images/demo/packing-a-parcel.jpg
- assets/images/demo/product-ash-glaze-bottle-vase.jpg
- assets/images/demo/product-carved-lidded-jar.jpg
- assets/images/demo/product-dew-small-dishes.jpg
- assets/images/demo/product-iron-rim-noodle-bowl.jpg
- assets/images/demo/product-moon-pool-bowl.jpg
- assets/images/demo/product-pebble-chopstick-rests.jpg
- assets/images/demo/product-ripple-teacup.jpg
- assets/images/demo/product-river-stone-sake-set.jpg
- assets/images/demo/product-still-water-plate.jpg
- assets/images/demo/product-tide-oval-platter.jpg
- assets/images/demo/throwing-on-the-wheel.jpg
- assets/images/demo/viewing-room.jpg
- assets/images/demo/wood-firing-night.jpg

The glaze-pool shapes, swatches, brand mark and arrow in style.css and assets/css/woocommerce.css are CSS gradients and inline SVG written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and artwork, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.1 =
* The shop and product-search templates use the current search block (limited to products) instead of the outdated WooCommerce Product Search block, so the Site Editor no longer asks to upgrade it.

= 1.0.0 =
* Initial release.
