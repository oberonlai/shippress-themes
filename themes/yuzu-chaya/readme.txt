=== Yuzu Chaya ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A playful, modular theme for small Japanese tea and wagashi shops that sell loose-leaf sencha, hojicha and matcha, teaware and seasonal sweets online, laid out like a bento box: rounded tiles in yuzu yellow, pale kinari paper, fresh matcha and charcoal-green ink, small hand-drawn tea leaves, yuzu and curls of steam, temperature stickers and handwritten notes, a brewing guide, a monthly tea box subscription, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds twelve sample products. Without it, the Shop page shows the tea list as tiles with prices and orders by email, and nothing store-specific is loaded.

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

Bricolage Grotesque
Files: assets/fonts/bricolage-grotesque-variable-latin.woff2
Copyright 2022 The Bricolage Grotesque Project Authors (https://github.com/ateliertriay/bricolage)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-BricolageGrotesque.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, optical size, width 75-100% and weight 200-800 axes), bundled so the theme makes no third-party requests.

Nunito
Files: assets/fonts/nunito-variable-latin.woff2, assets/fonts/nunito-italic-variable-latin.woff2
Copyright 2014 The Nunito Project Authors (https://github.com/googlefonts/nunito)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Nunito.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 200-1000, with italic), bundled so the theme makes no third-party requests.

Patrick Hand
Files: assets/fonts/patrick-hand-400-latin.woff2
Copyright (c) 2010-2012 Patrick Wagesreiter (https://github.com/google/fonts/tree/main/ofl/patrickhand)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-PatrickHand.txt, https://openfontlicense.org)
Latin subset (WOFF2, regular), bundled so the theme makes no third-party requests.

= Images =

All illustrations and product pictures are original procedural vector artwork drawn in code for this theme by the ShipPress contributors (wobbly hand-drawn-style outlines over off-register flat fills, with an SVG turbulence filter for paper grain; no text, no photographs, stock images or third-party artwork; every shop, farm and person they show is fictional), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/area-map.svg
- assets/images/brewing-temperatures.svg
- assets/images/cold-brew-genmaicha.svg
- assets/images/hero-yuzu-cup.svg
- assets/images/hojicha-roasting.svg
- assets/images/keeper-hana.svg
- assets/images/keeper-teru.svg
- assets/images/kyusu-pouring.svg
- assets/images/matcha-whisking.svg
- assets/images/newsletter-letter.svg
- assets/images/product-asahi-sencha.svg
- assets/images/product-chasen-set.svg
- assets/images/product-genmaicha-with-matcha.svg
- assets/images/product-hikari-matcha.svg
- assets/images/product-hillside-fukamushi.svg
- assets/images/product-kihada-kyusu.svg
- assets/images/product-monthly-tea-box.svg
- assets/images/product-seasonal-wagashi.svg
- assets/images/product-twice-roasted-hojicha.svg
- assets/images/product-yunomi-pair.svg
- assets/images/product-yuzu-monaka.svg
- assets/images/product-yuzu-sencha.svg
- assets/images/shop-counter.svg
- assets/images/tea-box-flatlay.svg
- assets/images/tea-field-hill.svg
- assets/images/teaware-small-table.svg
- assets/images/yuzu-winter-sweets.svg

Raster copies of the same artwork, imported into the Media Library by the demo import and used as product images (rendered from the SVGs above with scripts/rasterize-images.py; same copyright and license):
- assets/images/demo/area-map.jpg
- assets/images/demo/brewing-temperatures.jpg
- assets/images/demo/cold-brew-genmaicha.jpg
- assets/images/demo/hero-yuzu-cup.jpg
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

The paper grain, tea leaf, yuzu, steam and squiggle motifs in style.css and assets/css/woocommerce.css are inline SVG and CSS written for this theme (same copyright and license).

screenshot.png: a rendering of this theme's home page design with its own sample content and artwork, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
