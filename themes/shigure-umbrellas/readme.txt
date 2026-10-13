=== Shigure Umbrellas ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet store theme for a small umbrella atelier that makes and mends umbrellas by hand: rain-mist pages, slate panels, ink text and one muted steel accent, Ibarra Real Nova with Golos Text, a centred wordmark between two ferrule tip marks with the menu split left and right, a canopy rail of opened umbrellas with rib counts, a rain letter footer, Care & repair, Size guide and The workshop pages, and WooCommerce shop, product, cart, checkout and account templates styled to match.


== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product category and tag archives, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample umbrellas in three categories (Everyday, Travel, Traditional). Each product's rib-count line (e.g. 16 ribs · 110 cm) comes from its "Ribs" and "Size (cm)" attributes, edited once in the product editor and shown under the name. Without WooCommerce, the home canopy rail and the Shop page show static canopies and a note to order by email, and nothing store-specific is loaded.

The canopy rail is a plain CSS scroll-snap track: no script, no autoplay. It can be scrolled by touch, trackpad or, once focused, the arrow keys. Without JavaScript the mobile menu is shown as a plain list.

The shop address, hours, telephone and email, and the repair terms, are kept in ONE place each: two synced patterns (Appearance > Editor > Patterns). The footer, The workshop, Care & repair and Contact (shop details) and the home page, Care & repair, Contact and every product page (repair terms) only reference them. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download shigure-umbrellas.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/shigure-umbrellas.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Shigure Umbrellas. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Shigure Umbrellas WordPress Theme, Copyright 2026 ShipPress contributors.
Shigure Umbrellas is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Ibarra Real Nova
Files: assets/fonts/ibarrarealnova-latin.woff2, assets/fonts/ibarrarealnova-italic-latin.woff2
Copyright 2007 The Ibarra Real Nova Project Authors (https://github.com/googlefonts/ibarrareal)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-IbarraRealNova.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subsets (variable WOFF2, Roman 400-600, Italic 400-500) of the fonts in https://github.com/google/fonts/tree/main/ofl/ibarrarealnova, bundled so the theme makes no third-party requests.

Golos Text
Files: assets/fonts/golostext-latin.woff2
Copyright 2019 The Golos Text Project Authors (https://github.com/googlefonts/golos-text)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-GolosText.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (variable WOFF2, 400-500) of the font in https://github.com/google/fonts/tree/main/ofl/golostext, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or shops; the atelier, its maker and its umbrellas are fictional). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero-canopy-rail.jpg (journal: Rain on the river street)
- assets/images/umbrella-01.jpg (Hoshikawa Long; home canopy rail)
- assets/images/umbrella-02.jpg (Ame Fold)
- assets/images/umbrella-03.jpg (Kasa Sixteen)
- assets/images/umbrella-04.jpg (Tsuyu Paper)
- assets/images/umbrella-05.jpg (Kiri Mini)
- assets/images/umbrella-06.jpg (Bangasa Twilight)
- assets/images/umbrella-07.jpg (Ferrule Cane)
- assets/images/umbrella-08.jpg (Hoshi Child)
- assets/images/workshop.jpg (home: atelier note)
- assets/images/repair-desk.jpg (home: repair promise; Care & repair; journal)
- assets/images/street-exterior.jpg (The workshop; journal)
- assets/images/detail-rib.jpg (Size guide; journal)
- assets/images/canopy-sizes.jpg (Size guide)
- assets/images/care-still.jpg (Care & repair; journal)
- assets/images/artisan.jpg (The workshop: the maker)
- assets/images/interior.jpg (The workshop)
- assets/images/packing.jpg (The workshop; journal)
- assets/images/demo/hero-canopy-rail.jpg (demo import copy of assets/images/hero-canopy-rail.jpg)
- assets/images/demo/umbrella-01.jpg (demo import copy of assets/images/umbrella-01.jpg)
- assets/images/demo/umbrella-02.jpg (demo import copy of assets/images/umbrella-02.jpg)
- assets/images/demo/umbrella-03.jpg (demo import copy of assets/images/umbrella-03.jpg)
- assets/images/demo/umbrella-04.jpg (demo import copy of assets/images/umbrella-04.jpg)
- assets/images/demo/umbrella-05.jpg (demo import copy of assets/images/umbrella-05.jpg)
- assets/images/demo/umbrella-06.jpg (demo import copy of assets/images/umbrella-06.jpg)
- assets/images/demo/umbrella-07.jpg (demo import copy of assets/images/umbrella-07.jpg)
- assets/images/demo/umbrella-08.jpg (demo import copy of assets/images/umbrella-08.jpg)
- assets/images/demo/workshop.jpg (demo import copy of assets/images/workshop.jpg)
- assets/images/demo/repair-desk.jpg (demo import copy of assets/images/repair-desk.jpg)
- assets/images/demo/street-exterior.jpg (demo import copy of assets/images/street-exterior.jpg)
- assets/images/demo/detail-rib.jpg (demo import copy of assets/images/detail-rib.jpg)
- assets/images/demo/canopy-sizes.jpg (demo import copy of assets/images/canopy-sizes.jpg)
- assets/images/demo/care-still.jpg (demo import copy of assets/images/care-still.jpg)
- assets/images/demo/artisan.jpg (demo import copy of assets/images/artisan.jpg)
- assets/images/demo/interior.jpg (demo import copy of assets/images/interior.jpg)
- assets/images/demo/packing.jpg (demo import copy of assets/images/packing.jpg)

All other artwork (the ferrule and tip marks, canopy rings and rib lines) is CSS, GPL-2.0-or-later.
