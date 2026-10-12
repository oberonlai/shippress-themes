=== Asa Linen ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A serene, organic store theme for a small linen bedding atelier: flax washi pages with a faint CSS linen weave, stone panels, warm ink and one faded sage accent, Crimson Pro with Nunito Sans, a transparent header over a made-bed photograph that turns solid on scroll, four chapters (flax, weave, wash, sleep) beside a sticky photograph of the bed, a photo-strip footer, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds seven sample products in three categories (Sheets, Duvet covers, Pillowcases & throws). Each product's weight line is its "Linen weight" attribute, edited once in the product editor and shown under the price in the shop and on the product page. Without WooCommerce, the Shop page shows the linen shelf with prices, orders go by email, and nothing store-specific is loaded.

The header is transparent at the top of every page and turns solid washi once the page scrolls (CSS scroll timeline; a tiny script, assets/js/header.js, does the same in other browsers). Without JavaScript the mobile menu is shown as a plain list.

The atelier address, opening days, email and the care, delivery and returns policy, and the shelf with its prices and the "Most loved" badge, are kept in ONE place each: two synced patterns (under Appearance > Editor > Patterns). The footer, Care, Contact and Shop pages only reference them, so a change made once shows everywhere. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==


1. Download asa-linen.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/asa-linen.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Asa Linen. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect their action to your form or email service.

== Copyright ==

Asa Linen WordPress Theme, Copyright 2026 ShipPress contributors.
Asa Linen is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Crimson Pro
Files: assets/fonts/crimsonpro-variable-latin.woff2, assets/fonts/crimsonpro-italic-variable-latin.woff2
Copyright 2018 The Crimson Pro Project Authors (https://github.com/Fonthausen/CrimsonPro)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-CrimsonPro.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subsets (WOFF2, weights 300-500, roman and italic) of the variable fonts in https://github.com/google/fonts/tree/main/ofl/crimsonpro, bundled so the theme makes no third-party requests.

Nunito Sans
Files: assets/fonts/nunitosans-variable-latin.woff2
Copyright 2016 The Nunito Sans Project Authors (https://github.com/Fonthausen/NunitoSans)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-NunitoSans.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (WOFF2, weights 300-700 at opsz 12, wdth 100) of the variable font in https://github.com/google/fonts/tree/main/ofl/nunitosans, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or products; the atelier, its people and its products are fictional). Copies in assets/images/demo/ are the same files, used by the demo import.
- assets/images/atelier-table.jpg (the atelier, footer strip, journal)
- assets/images/care-fold.jpg (care page, footer strip, journal, Folded Flat Sheet crop)
- assets/images/flax-field.jpg (home chapter Flax, footer strip, journal)
- assets/images/hero-bed.jpg (home opening, Sage Edge Duvet Set crop)
- assets/images/product-duvet.jpg (Kinari Duvet Cover source)
- assets/images/product-pillowcase.jpg (Shiro Pillowcase Pair source)
- assets/images/product-sheet.jpg (Washed Flax Sheet Set source)
- assets/images/sleep-pillow.jpg (home sticky made bed, journal, Stone Pillowcase Trio crop)
- assets/images/wash-line.jpg (home chapter Wash, contact, footer strip, journal)
- assets/images/weave-close.jpg (home chapter Weave, fabric guide, footer strip, journal, Fringed Flax Throw crop)
- assets/images/product-asa-sheet-set.jpg (product photograph, a 4:5 crop of the photographs above)
- assets/images/product-kinari-duvet.jpg (product photograph, a 4:5 crop of the photographs above)
- assets/images/product-shiro-pillowcase.jpg (product photograph, a 4:5 crop of the photographs above)
- assets/images/product-sage-edge-set.jpg (product photograph, a 4:5 crop of the photographs above)
- assets/images/product-stone-trio.jpg (product photograph, a 4:5 crop of the photographs above)
- assets/images/product-fringed-throw.jpg (product photograph, a 4:5 crop of the photographs above)
- assets/images/product-folded-flat-sheet.jpg (product photograph, a 4:5 crop of the photographs above)
- assets/images/demo/atelier-table.jpg (demo import copy of assets/images/atelier-table.jpg)
- assets/images/demo/care-fold.jpg (demo import copy of assets/images/care-fold.jpg)
- assets/images/demo/flax-field.jpg (demo import copy of assets/images/flax-field.jpg)
- assets/images/demo/hero-bed.jpg (demo import copy of assets/images/hero-bed.jpg)
- assets/images/demo/product-duvet.jpg (demo import copy of assets/images/product-duvet.jpg)
- assets/images/demo/product-pillowcase.jpg (demo import copy of assets/images/product-pillowcase.jpg)
- assets/images/demo/product-sheet.jpg (demo import copy of assets/images/product-sheet.jpg)
- assets/images/demo/sleep-pillow.jpg (demo import copy of assets/images/sleep-pillow.jpg)
- assets/images/demo/wash-line.jpg (demo import copy of assets/images/wash-line.jpg)
- assets/images/demo/weave-close.jpg (demo import copy of assets/images/weave-close.jpg)
- assets/images/demo/product-asa-sheet-set.jpg (demo import copy of assets/images/product-asa-sheet-set.jpg)
- assets/images/demo/product-kinari-duvet.jpg (demo import copy of assets/images/product-kinari-duvet.jpg)
- assets/images/demo/product-shiro-pillowcase.jpg (demo import copy of assets/images/product-shiro-pillowcase.jpg)
- assets/images/demo/product-sage-edge-set.jpg (demo import copy of assets/images/product-sage-edge-set.jpg)
- assets/images/demo/product-stone-trio.jpg (demo import copy of assets/images/product-stone-trio.jpg)
- assets/images/demo/product-fringed-throw.jpg (demo import copy of assets/images/product-fringed-throw.jpg)
- assets/images/demo/product-folded-flat-sheet.jpg (demo import copy of assets/images/product-folded-flat-sheet.jpg)

The linen weave texture, the weave mark and the menu threads are CSS, GPL-2.0-or-later.

