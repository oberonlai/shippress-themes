=== Tsuki Silver ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

An elegant, restrained store theme for a small silver jewellery atelier: moonstone blush paper, muted rose panels, ink type and soft silver reflections, Sorts Mill Goudy with Questrial, a floating pill header, a product-first grid on pale stone under a short title with moon-phase category marks, a stamped seal and vertical text footer, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products in five categories (Rings, Earrings, Necklaces, Bracelets, Chains), each marked with a moon phase. Each product's metal line is its "Metal" attribute, edited once in the product editor and shown under the price in the grid and on the product page. Without WooCommerce, the home grid and the Shop page show the synced silver tray with prices, orders go by email, and nothing store-specific is loaded.

No front-end script: the pill header, moon marks and seal are CSS and inline SVG. The silver sheen on product photographs is switched off for visitors who prefer reduced motion. Without JavaScript the mobile menu is shown as a plain list.

The atelier address, opening days, telephone, email and the sizing and care notes, and the tray with its prices and the "Most loved" badge, are kept in ONE place each: two synced patterns (under Appearance > Editor > Patterns). The footer, Ring sizing, Care and Contact pages (atelier card) and the home and Shop pages without WooCommerce (tray) only reference them, so a change made once shows everywhere. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download tsuki-silver.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/tsuki-silver.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Tsuki Silver. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect its action to your form or email service.

== Copyright ==

Tsuki Silver WordPress Theme, Copyright 2026 ShipPress contributors.
Tsuki Silver is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Sorts Mill Goudy
Files: assets/fonts/sortsmillgoudy-regular-latin.woff2, assets/fonts/sortsmillgoudy-italic-latin.woff2
Copyright (c) 2010, Barry Schwartz (https://github.com/google/fonts/tree/main/ofl/sortsmillgoudy)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-SortsMillGoudy.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subsets (WOFF2, regular and italic) of the fonts in https://github.com/google/fonts/tree/main/ofl/sortsmillgoudy, bundled so the theme makes no third-party requests.

Questrial
Files: assets/fonts/questrial-regular-latin.woff2
Copyright 2011 The Questrial Project Authors (https://github.com/googlefonts/questrial)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Questrial.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (WOFF2) of the font in https://github.com/google/fonts/tree/main/ofl/questrial, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or products; the atelier, its people and its products are fictional). Copies in assets/images/demo/ are the same files, used by the demo import.
- assets/images/atelier-bench.jpg (home atelier, contact, journal; source of the Waning Dome Ring crop)
- assets/images/care-polish.jpg (care page, journal)
- assets/images/hero-pieces.jpg (about page, journal)
- assets/images/product-bracelet.jpg (product photograph)
- assets/images/product-chain.jpg (product photograph, journal)
- assets/images/product-dome-ring.jpg (product photograph, a crop of atelier-bench.jpg)
- assets/images/product-earrings.jpg (product photograph)
- assets/images/product-necklace.jpg (product photograph, journal)
- assets/images/product-ring-band.jpg (product photograph)
- assets/images/product-signet.jpg (product photograph)
- assets/images/product-stack.jpg (product photograph, journal)
- assets/images/demo/atelier-bench.jpg (demo import copy of assets/images/atelier-bench.jpg)
- assets/images/demo/care-polish.jpg (demo import copy of assets/images/care-polish.jpg)
- assets/images/demo/hero-pieces.jpg (demo import copy of assets/images/hero-pieces.jpg)
- assets/images/demo/product-bracelet.jpg (demo import copy of assets/images/product-bracelet.jpg)
- assets/images/demo/product-chain.jpg (demo import copy of assets/images/product-chain.jpg)
- assets/images/demo/product-dome-ring.jpg (demo import copy of assets/images/product-dome-ring.jpg)
- assets/images/demo/product-earrings.jpg (demo import copy of assets/images/product-earrings.jpg)
- assets/images/demo/product-necklace.jpg (demo import copy of assets/images/product-necklace.jpg)
- assets/images/demo/product-ring-band.jpg (demo import copy of assets/images/product-ring-band.jpg)
- assets/images/demo/product-signet.jpg (demo import copy of assets/images/product-signet.jpg)
- assets/images/demo/product-stack.jpg (demo import copy of assets/images/product-stack.jpg)

The moon-phase marks, the crescent before the wordmark and the footer seal (inline SVG) are original, GPL-2.0-or-later.
