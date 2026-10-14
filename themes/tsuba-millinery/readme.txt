=== Tsuba Millinery ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
Version: 1.0.0
Stable tag: 1.0.0
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Tags: block-patterns, full-site-editing, e-commerce, blog, pink, light, custom-colors, editor-style, translation-ready, wide-blocks

== Description ==

An elegant, sculptural store theme for a small milliner's atelier: felt-blush pages, petal cells, ink text and one muted mauve accent, Della Respira with Sen, layered paper-cut illustrations, a filter-first hat catalogue (shape, material, head size), a sizing guide, Fit & sizing and Made to order pages, and WooCommerce shop, product, cart, checkout and account templates styled to match.

The demo atelier is fictional: Tsuba Millinery, a small hat atelier at 2-11 Kasane-chō, Hoshikawa City, run by milliner Rin Tsubaki. All people, places and products are made up.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product category and tag archives, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample hats in four shape categories (Cloche, Boater, Bucket, Wide brim) with material tags (felt, straw, cotton). Each hat's details (shape, material, brim, sizes) are its attributes; material and brim are edited once in the product editor and shown under the price. Without WooCommerce, the Shop page and the home catalogue show a static catalogue and a note to order by email, and nothing store-specific is loaded.

The shop card (milliner, atelier address, hours, telephone and email), the sizing guide and the shapes table are kept in ONE place each: three synced patterns (Appearance > Editor > Patterns). Every page that shows them only references them. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download tsuba-millinery.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tsuba-millinery.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsuba Millinery. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect its action to your form or email service.

== Copyright ==

Tsuba Millinery WordPress Theme, Copyright 2026 ShipPress contributors.
Tsuba Millinery is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Della Respira
Files: assets/fonts/DellaRespira-Regular.ttf
Copyright (c) 2011-2012, Nathan Willis, with Reserved Font Name "Della Respira".
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-DellaRespira.txt, https://openfontlicense.org).
Shipped unmodified (Reserved Font Name) from https://github.com/google/fonts/tree/main/ofl/dellarespira, bundled so the theme makes no third-party requests.

Sen
Files: assets/fonts/Sen-wght.ttf
Copyright 2015 The Sen Project Authors (https://github.com/philatype/Sen/)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Sen.txt, https://openfontlicense.org).
Shipped as the unmodified variable TTF from https://github.com/google/fonts/tree/main/ofl/sen.

= Images =

Images: AI-generated for this theme with Grok Build image_gen, layered paper-cut illustration style, released under GPL-2.0-or-later / CC0 (no stock images, no real people or brands; the atelier, its people and its hats are fictional). Product pictures are crops of the collection illustration. Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero.webp (home: a wide-brim felt hat on a wooden hat block)
- assets/images/collection.webp (eight hats; journal)
- assets/images/atelier.webp (Atelier, Made to order; journal)
- assets/images/fit.webp (Fit & sizing; journal)
- assets/images/p01-hana-cloche.webp (product picture, crop of collection.webp)
- assets/images/p02-natsu-boater.webp (product picture, crop of collection.webp)
- assets/images/p03-ame-bucket.webp (product picture, crop of collection.webp)
- assets/images/p04-kaze-wide-brim.webp (product picture, crop of collection.webp)
- assets/images/p05-fuyu-beret.webp (product picture, crop of collection.webp)
- assets/images/p06-hiyori-sun-hat.webp (product picture, crop of collection.webp)
- assets/images/p07-kiri-trilby.webp (product picture, crop of collection.webp)
- assets/images/p08-tsubomi-pillbox.webp (product picture, crop of collection.webp)
- assets/images/demo/hero.webp (demo import copy of assets/images/hero.webp)
- assets/images/demo/collection.webp (demo import copy of assets/images/collection.webp)
- assets/images/demo/atelier.webp (demo import copy of assets/images/atelier.webp)
- assets/images/demo/fit.webp (demo import copy of assets/images/fit.webp)
- assets/images/demo/p01-hana-cloche.webp (demo import copy of assets/images/p01-hana-cloche.webp)
- assets/images/demo/p02-natsu-boater.webp (demo import copy of assets/images/p02-natsu-boater.webp)
- assets/images/demo/p03-ame-bucket.webp (demo import copy of assets/images/p03-ame-bucket.webp)
- assets/images/demo/p04-kaze-wide-brim.webp (demo import copy of assets/images/p04-kaze-wide-brim.webp)
- assets/images/demo/p05-fuyu-beret.webp (demo import copy of assets/images/p05-fuyu-beret.webp)
- assets/images/demo/p06-hiyori-sun-hat.webp (demo import copy of assets/images/p06-hiyori-sun-hat.webp)
- assets/images/demo/p07-kiri-trilby.webp (demo import copy of assets/images/p07-kiri-trilby.webp)
- assets/images/demo/p08-tsubomi-pillbox.webp (demo import copy of assets/images/p08-tsubomi-pillbox.webp)

All other artwork (rules, chips and numerals) is CSS, GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* First release.
