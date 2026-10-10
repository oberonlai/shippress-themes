=== Yuzu Chaya ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, editorial theme for small Japanese tea and wagashi shops that sell loose-leaf sencha, hojicha and matcha, teaware and seasonal sweets online: washi paper and kinari surfaces, sumi ink, sencha green and roasted hojicha brown with a single dot of yuzu, large still-life photography, Shippori Mincho titles over Hanken Grotesk text, hairline rules and generous whitespace, a brewing guide, a monthly tea box subscription, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds twelve sample products. Without it, the Shop page shows the tea list with photographs and prices and orders by email, and nothing store-specific is loaded.

== Installation ==

1. Download yuzu-chaya.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/yuzu-chaya.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Yuzu Chaya. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The tea box signup, contact and newsletter forms are plain HTML: connect their action to your form, subscription or email service.

== Copyright ==

Yuzu Chaya WordPress Theme, Copyright 2026 ShipPress contributors.
Yuzu Chaya is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Shippori Mincho
Files: assets/fonts/shippori-mincho-400-latin.woff2, assets/fonts/shippori-mincho-500-latin.woff2, assets/fonts/shippori-mincho-600-latin.woff2
Copyright 2021 The Shippori Mincho Project Authors (https://github.com/fontdasu/ShipporiMincho)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-ShipporiMincho.txt, https://openfontlicense.org)
Latin subset (WOFF2, weights 400, 500 and 600), bundled so the theme makes no third-party requests.

Hanken Grotesk
Files: assets/fonts/hanken-grotesk-variable-latin.woff2, assets/fonts/hanken-grotesk-italic-variable-latin.woff2
Copyright 2021 The Hanken Grotesk Project Authors (https://github.com/marcologous/hanken-grotesk)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-HankenGrotesk.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 100-900, with italic), bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, places, brands or products; every shop, farm and person they suggest is fictional).
- assets/images/cold-brew-genmaicha.jpg
- assets/images/hero-tea-cup.jpg
- assets/images/hojicha-roasting.jpg
- assets/images/keeper-hana.jpg
- assets/images/keeper-teru.jpg
- assets/images/kyusu-pouring.jpg
- assets/images/matcha-whisking.jpg
- assets/images/newsletter-letter.jpg
- assets/images/product-asahi-sencha.jpg
- assets/images/product-chasen-set.jpg
- assets/images/product-genmaicha-with-matcha.jpg
- assets/images/product-hikari-matcha.jpg
- assets/images/product-hillside-fukamushi.jpg
- assets/images/product-kihada-kyusu.jpg
- assets/images/product-monthly-tea-box.jpg
- assets/images/product-seasonal-wagashi.jpg
- assets/images/product-twice-roasted-hojicha.jpg
- assets/images/product-yunomi-pair.jpg
- assets/images/product-yuzu-monaka.jpg
- assets/images/product-yuzu-sencha.jpg
- assets/images/shop-counter.jpg
- assets/images/tea-box-flatlay.jpg
- assets/images/tea-field-hill.jpg
- assets/images/teaware-small-table.jpg
- assets/images/yuzu-winter-sweets.jpg

The same photographs, imported into the Media Library by the demo import and used as featured and product images (identical files; same license):
- assets/images/demo/cold-brew-genmaicha.jpg
- assets/images/demo/hero-tea-cup.jpg
- assets/images/demo/hojicha-roasting.jpg
- assets/images/demo/keeper-hana.jpg
- assets/images/demo/keeper-teru.jpg
- assets/images/demo/kyusu-pouring.jpg
- assets/images/demo/matcha-whisking.jpg
- assets/images/demo/newsletter-letter.jpg
- assets/images/demo/product-asahi-sencha.jpg
- assets/images/demo/product-chasen-set.jpg
- assets/images/demo/product-genmaicha-with-matcha.jpg
- assets/images/demo/product-hikari-matcha.jpg
- assets/images/demo/product-hillside-fukamushi.jpg
- assets/images/demo/product-kihada-kyusu.jpg
- assets/images/demo/product-monthly-tea-box.jpg
- assets/images/demo/product-seasonal-wagashi.jpg
- assets/images/demo/product-twice-roasted-hojicha.jpg
- assets/images/demo/product-yunomi-pair.jpg
- assets/images/demo/product-yuzu-monaka.jpg
- assets/images/demo/product-yuzu-sencha.jpg
- assets/images/demo/shop-counter.jpg
- assets/images/demo/tea-box-flatlay.jpg
- assets/images/demo/tea-field-hill.jpg
- assets/images/demo/teaware-small-table.jpg
- assets/images/demo/yuzu-winter-sweets.jpg

Diagrams: a line map and a brewing-temperature scale drawn in code for this theme by the ShipPress contributors, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/area-map.svg
- assets/images/brewing-temperatures.svg

Raster copies of the diagrams for the Media Library (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/area-map.jpg
- assets/images/demo/brewing-temperatures.jpg

The logo mark and the small arrow and chevron icons in style.css and assets/css/woocommerce.css are inline SVG written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and photographs, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 2.0.0 =
* Redesign: a quiet, editorial look. New palette (washi, kinari, sumi, sencha, pale sencha, hojicha and a sparing yuzu accent), Shippori Mincho and Hanken Grotesk in place of Bricolage Grotesque, Nunito and Patrick Hand, hairline rules instead of rounded tiles, and a dark "Yoru" style variation in place of "Matcha Latte".
* AI-generated photographs replace the hand-drawn illustrations; the map and the brewing-temperature diagram are redrawn as simple line drawings.
* New page-my-account template (it was empty).
* Pages imported with 1.x keep their content; their layout stays readable with the new styles.

= 1.0.0 =
* Initial release.
