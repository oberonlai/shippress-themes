=== Hana Kago ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A romantic, lush store theme for florists: blush-paper pages, coral and deep leaf green, DM Serif Display over DM Sans, a header that is transparent over the photograph and turns to paper as you scroll, a pressed-flower masonry home page with soft deckled paper edges, a footer led by the Monday stem letter, delivery and subscription pages, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds nine sample products (two bouquets, a basket, a dried posy, a pressed-flower frame, a wreath, a branch with a vase and two prepaid subscriptions). Without it, the Shop page shows every bouquet with its photograph and price and orders go by phone or email, and nothing store-specific is loaded.

The shop's address, opening hours, phone number, email and social links, and the delivery areas with their cut-off times and fees, are kept in ONE place each: two synced patterns ("Hana Kago: address, hours, phone, email and social links" and "Hana Kago: delivery areas, cut-off times and fees", under Appearance > Editor > Patterns). The footer, the Delivery, Subscriptions, Shop and Contact pages and every product page only reference them, so a change made once shows everywhere. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download hana-kago.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hana-kago.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hana Kago. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Hana Kago WordPress Theme, Copyright 2026 ShipPress contributors.
Hana Kago is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

DM Serif Display
Files: assets/fonts/dm-serif-display-latin.woff2, assets/fonts/dm-serif-display-italic-latin.woff2
Copyright 2014-2018 Adobe (http://www.adobe.com/), with Reserved Font Name 'Source'. Copyright 2019 Google LLC.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-DMSerifDisplay.txt, https://openfontlicense.org)
Latin subsets (WOFF2) of the official files in https://github.com/google/fonts/tree/main/ofl/dmserifdisplay, bundled so the theme makes no third-party requests.

DM Sans
Files: assets/fonts/dm-sans-variable-latin.woff2
Copyright 2014 The DM Sans Project Authors (https://github.com/googlefonts/dm-fonts)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-DMSans.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, optical size and weight axes) of the official file in https://github.com/google/fonts/tree/main/ofl/dmsans, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, places, brands or products; the shop, the florists and the streets they suggest are fictional). The product-*.jpg files are crops of the photographs listed here; the files in assets/images/demo/ are identical copies imported into the Media Library by the demo import.
- assets/images/basket.jpg
- assets/images/cargo-bike.jpg
- assets/images/demo/basket.jpg
- assets/images/demo/cargo-bike.jpg
- assets/images/demo/dried.jpg
- assets/images/demo/florist.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/pressed.jpg
- assets/images/demo/product-fortnightly-box.jpg
- assets/images/demo/product-garden-wreath.jpg
- assets/images/demo/product-kraft-market-bouquet.jpg
- assets/images/demo/product-pampas-posy.jpg
- assets/images/demo/product-peony-basket.jpg
- assets/images/demo/product-pressed-flower-frame.jpg
- assets/images/demo/product-quince-branch-vase.jpg
- assets/images/demo/product-ranunculus-bouquet.jpg
- assets/images/demo/product-weekly-stems.jpg
- assets/images/demo/subscription.jpg
- assets/images/demo/vase.jpg
- assets/images/demo/wreath.jpg
- assets/images/dried.jpg
- assets/images/florist.jpg
- assets/images/hero.jpg
- assets/images/pressed.jpg
- assets/images/product-fortnightly-box.jpg
- assets/images/product-garden-wreath.jpg
- assets/images/product-kraft-market-bouquet.jpg
- assets/images/product-pampas-posy.jpg
- assets/images/product-peony-basket.jpg
- assets/images/product-pressed-flower-frame.jpg
- assets/images/product-quince-branch-vase.jpg
- assets/images/product-ranunculus-bouquet.jpg
- assets/images/product-weekly-stems.jpg
- assets/images/subscription.jpg
- assets/images/vase.jpg
- assets/images/wreath.jpg

The flower mark, the paper grain, the deckled paper edges, the photo corners, the petal bullets and the stem separator are drawn in CSS (style.css), GPL-2.0-or-later. screenshot.png is a capture of the theme with its own demo content.
