=== Kura Shizuku ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet-luxury theme for small sake breweries and tasting rooms that sell bottles, gift sets and brewery goods online. Every page is composed like a sake bottle label: centred, symmetric, framed by fine double gilt hairlines, with a single drop as the recurring mark, in rice-polish ivory, koji beige, aged cedar, sake-lees grey and gilded gold, plus a brewery page, a tasting room page, a responsible-drinking note, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds ten sample products. Without it, the Shop page shows the cellar as bottles in gilt frames with prices and orders by email, and nothing store-specific is loaded.

The footer carries an editable "please drink responsibly" note with the legal-drinking-age line. Selling alcohol online is regulated differently in every country: check the rules where you sell and adjust the age and delivery wording to match.

== Installation ==

1. Download kura-shizuku.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kura-shizuku.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kura Shizuku. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service. The tasting room page gives booking information only; there is no booking system.

== Copyright ==

Kura Shizuku WordPress Theme, Copyright 2026 ShipPress contributors.
Kura Shizuku is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

EB Garamond
Files: assets/fonts/eb-garamond-variable-latin.woff2, assets/fonts/eb-garamond-italic-variable-latin.woff2
Copyright 2017 The EB Garamond Project Authors (https://github.com/octaviopardo/EBGaramond12)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-EBGaramond.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 400-800, with italic), bundled so the theme makes no third-party requests.

Albert Sans
Files: assets/fonts/albert-sans-variable-latin.woff2, assets/fonts/albert-sans-italic-variable-latin.woff2
Copyright 2021 The Albert Sans Project Authors (https://github.com/usted/Albert-Sans)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-AlbertSans.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight 100-900, with italic), bundled so the theme makes no third-party requests.

= Images =

All illustrations and product pictures are original vector artwork drawn in code for this theme by the ShipPress contributors (flat shapes with soft gradients and blurred shadows; no text except the numbers on the map, no photographs, stock images or third-party artwork; every brewery, product and person they show is fictional), Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
- assets/images/access-map.svg
- assets/images/autumn-pairing.svg
- assets/images/brewer-host.svg
- assets/images/brewer-toji.svg
- assets/images/brewery-kura.svg
- assets/images/cedar-ball.svg
- assets/images/drip-pressing.svg
- assets/images/hero-label.svg
- assets/images/koji-room.svg
- assets/images/newsletter-letter.svg
- assets/images/product-cedar-masu-pair.svg
- assets/images/product-cedar-taruzake.svg
- assets/images/product-first-snow-nigori.svg
- assets/images/product-hairline-sake-set.svg
- assets/images/product-ivory-ginjo.svg
- assets/images/product-kimoto-aged.svg
- assets/images/product-linen-tasting-cloth.svg
- assets/images/product-sake-lees.svg
- assets/images/product-shizuku-daiginjo.svg
- assets/images/product-tasting-trio.svg
- assets/images/rice-polishing.svg
- assets/images/snow-rice-fields.svg
- assets/images/tasting-counter.svg
- assets/images/tasting-flight.svg

Raster copies of the same artwork for the Media Library (rendered from the SVGs with scripts/rasterize-images.py), same copyright and license:
- assets/images/demo/access-map.jpg
- assets/images/demo/autumn-pairing.jpg
- assets/images/demo/brewer-host.jpg
- assets/images/demo/brewer-toji.jpg
- assets/images/demo/brewery-kura.jpg
- assets/images/demo/cedar-ball.jpg
- assets/images/demo/drip-pressing.jpg
- assets/images/demo/hero-label.jpg
- assets/images/demo/koji-room.jpg
- assets/images/demo/newsletter-letter.jpg
- assets/images/demo/product-cedar-masu-pair.jpg
- assets/images/demo/product-cedar-taruzake.jpg
- assets/images/demo/product-first-snow-nigori.jpg
- assets/images/demo/product-hairline-sake-set.jpg
- assets/images/demo/product-ivory-ginjo.jpg
- assets/images/demo/product-kimoto-aged.jpg
- assets/images/demo/product-linen-tasting-cloth.jpg
- assets/images/demo/product-sake-lees.jpg
- assets/images/demo/product-shizuku-daiginjo.jpg
- assets/images/demo/product-tasting-trio.jpg
- assets/images/demo/rice-polishing.jpg
- assets/images/demo/snow-rice-fields.jpg
- assets/images/demo/tasting-counter.jpg
- assets/images/demo/tasting-flight.jpg

screenshot.png: composed from the theme's own pages and artwork, same copyright and license.

== Changelog ==

= 1.0.1 =
* The shop and product-search templates use the current search block (limited to products) instead of the outdated WooCommerce Product Search block, so the Site Editor no longer asks to upgrade it.

= 1.0.0 =
* First release.
