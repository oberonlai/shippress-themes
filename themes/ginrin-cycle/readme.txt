=== Ginrin Cycle ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A restrained, technical store theme for a small workshop that builds steel bicycles by hand: steel-mist pages, paper panels and graphite text with one burnt-orange accent, Rubik in light weights and IBM Plex Mono for spec lines and prices, a header laid out like the title block of an engineering drawing, a product-first home page, a repair price list, a spoke-wheel divider and loader, a split two-tone footer, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products (a frameset, two wheel products, three accessories, a fitting session and a gift card). Without it, the Shop page lists every product with its photograph, spec line and price, orders go by phone or email, and nothing store-specific is loaded.

The workshop address, opening hours, phone number and email, the repair price list and the product grid are kept in ONE place each: three synced patterns ("Ginrin Cycle: workshop address, hours and phone", "Ginrin Cycle: repair price list" and "Ginrin Cycle: product grid with spec lines and prices", under Appearance > Editor > Patterns). The footer, the home page, the shop page, the repair page and the contact page only reference them, so a change made once shows everywhere. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download ginrin-cycle.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/ginrin-cycle.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Ginrin Cycle. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Ginrin Cycle WordPress Theme, Copyright 2026 ShipPress contributors.
Ginrin Cycle is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Rubik
Files: assets/fonts/rubik-variable-latin.woff2
Copyright 2015 The Rubik Project Authors (https://github.com/googlefonts/rubik)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Rubik.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis limited to 300-600) of the official file in https://github.com/google/fonts/tree/main/ofl/rubik, bundled so the theme makes no third-party requests.

IBM Plex Mono
Files: assets/fonts/ibm-plex-mono-regular-latin1.woff2, assets/fonts/ibm-plex-mono-medium-latin1.woff2
Copyright 2017 IBM Corp. with Reserved Font Name "Plex"
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-IBMPlexMono.txt, https://openfontlicense.org)
The same OFL font as https://github.com/google/fonts/tree/main/ofl/ibmplexmono. Because "Plex" is a Reserved Font Name, the theme does not subset the font itself: these are IBM's own, unmodified Latin-1 WOFF2 files from https://github.com/IBM/plex (packages/plex-mono/fonts/split/woff2), bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, places, brands or products; the workshop, its people and its products are fictional). The files in assets/images/demo/ are identical copies imported into the Media Library by the demo import.
- assets/images/bag.jpg
- assets/images/bell.jpg
- assets/images/demo/bag.jpg
- assets/images/demo/bell.jpg
- assets/images/demo/hands.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/ride.jpg
- assets/images/demo/saddle.jpg
- assets/images/demo/wheel.jpg
- assets/images/demo/workshop.jpg
- assets/images/hands.jpg
- assets/images/hero.jpg
- assets/images/ride.jpg
- assets/images/saddle.jpg
- assets/images/wheel.jpg
- assets/images/workshop.jpg

The spoke-wheel icon (an inline SVG mask in style.css) and the drawing-frame corner ticks (CSS gradients) are original work for this theme, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* First release.
