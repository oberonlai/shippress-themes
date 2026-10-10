=== Wagu Mono ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A crafted, warm store theme for furniture workshops: oak-beige pages with a faint CSS wood grain, walnut ink and an oak accent, Libre Caslon over Karla, a walnut side rail fixed on the left (a compact top bar on phones), a home page of four chapters scrolling beside a sticky drawing plate with joinery diagrams, a colophon footer, makers and care pages, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products (two chairs, a stool, a bench, a low table, a shelf, a carved tray and a joint study). Without it, the Shop page shows every piece with its photograph, wood and price, orders go by phone, email or in the showroom, and nothing store-specific is loaded.

The showroom's address, opening hours, phone number, email and social links are kept in ONE place: a synced pattern ("Wagu Mono: showroom address, hours, phone, email and social links", under Appearance > Editor > Patterns). The colophon footer and the Contact, Makers, Care and Shop pages only reference it, so a change made once shows everywhere. It is created on activation (inc/shared-info.php) from inc/info/showroom.html and never created twice.

== Installation ==

1. Download wagu-mono.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/wagu-mono.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Wagu Mono. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Wagu Mono WordPress Theme, Copyright 2026 ShipPress contributors.
Wagu Mono is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Libre Caslon Display
Files: assets/fonts/libre-caslon-display-latin.woff2
Copyright 2012 The Libre Caslon Display Authors (https://github.com/impallari/Libre-Caslon-Display)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-LibreCaslonDisplay.txt, https://openfontlicense.org)
Latin subset (WOFF2) of the official file in https://github.com/google/fonts/tree/main/ofl/librecaslondisplay, bundled so the theme makes no third-party requests.

Libre Caslon Text
Files: assets/fonts/libre-caslon-text-variable-latin.woff2, assets/fonts/libre-caslon-text-italic-variable-latin.woff2
Copyright 2018 The Libre Caslon Text Project Authors (https://github.com/thundernixon/Libre-Caslon)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-LibreCaslonText.txt, https://openfontlicense.org)
Latin subsets (variable WOFF2, weight axis) of the official files in https://github.com/google/fonts/tree/main/ofl/librecaslontext, bundled so the theme makes no third-party requests. In the italic, the historical long-s "st" ligature was taken out of the default ligatures (it is otherwise unchanged).

Karla
Files: assets/fonts/karla-variable-latin.woff2
Copyright 2019 The Karla Project Authors (https://github.com/googlefonts/karla)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Karla.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis) of the official file in https://github.com/google/fonts/tree/main/ofl/karla, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, places, brands or products; the workshop, the makers and the town they suggest are fictional). The product-*.jpg files are crops of the photographs made for this theme (product-cord-lounge-chair.jpg is cropped from hero.jpg, product-joint-study.jpg from joinery.jpg; plain wall or floor was extended at the edges of product-three-leg-stool.jpg and product-long-bench.jpg); the files in assets/images/demo/ are identical copies imported into the Media Library by the demo import.
- assets/images/demo/hero.jpg
- assets/images/demo/joinery.jpg
- assets/images/demo/maker.jpg
- assets/images/demo/oiling.jpg
- assets/images/demo/product-cord-lounge-chair.jpg
- assets/images/demo/product-joint-study.jpg
- assets/images/demo/product-long-bench.jpg
- assets/images/demo/product-low-table.jpg
- assets/images/demo/product-oak-dining-chair.jpg
- assets/images/demo/product-open-shelf.jpg
- assets/images/demo/product-three-leg-stool.jpg
- assets/images/demo/product-walnut-tray.jpg
- assets/images/demo/workshop.jpg
- assets/images/hero.jpg
- assets/images/joinery.jpg
- assets/images/maker.jpg
- assets/images/oiling.jpg
- assets/images/product-cord-lounge-chair.jpg
- assets/images/product-joint-study.jpg
- assets/images/product-long-bench.jpg
- assets/images/product-low-table.jpg
- assets/images/product-oak-dining-chair.jpg
- assets/images/product-open-shelf.jpg
- assets/images/product-three-leg-stool.jpg
- assets/images/product-walnut-tray.jpg
- assets/images/workshop.jpg

Joinery diagrams: simple line drawings made for this theme, released under GPL-2.0-or-later / CC0.
- assets/images/joints/dovetail.svg
- assets/images/joints/finish-layers.svg
- assets/images/joints/pegged-joint.svg
- assets/images/joints/wedged-tenon.svg
- assets/images/joints/wood-rings.svg

The wood grain, the half-lap mark, the colophon ornament and the drawing-paper grid are drawn in CSS (style.css).
