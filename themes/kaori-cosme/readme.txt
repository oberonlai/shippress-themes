=== Kaori Cosme ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

An elegant, restrained store theme for a small clean-skincare atelier in Tokyo: lilac-grey pages, paper-white panels, ink-violet text and bands, muted lilac kept to fine lines, Literata with Mulish, a floating pill header, a full-bleed photo opening, quiet glass-drop reflections, a one-line footer, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products (serum, cream, cleansing oil, toner, mist, balm, a serum refill and a discovery set). Without it, the Shop page shows the shelf of featured products with their prices, orders go by phone or email, and nothing store-specific is loaded.

The atelier address, opening hours, phone number and email, and the shelf of featured products with their prices and the "Most loved" badge, are kept in ONE place each: two synced patterns ("Kaori Cosme: atelier address, hours and phone" and "Kaori Cosme: the shelf of featured products with prices", under Appearance > Editor > Patterns). The home, about, shop and contact pages only reference them, so a change made once shows everywhere. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download kaori-cosme.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kaori-cosme.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kaori Cosme. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Kaori Cosme WordPress Theme, Copyright 2026 ShipPress contributors.
Kaori Cosme is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Literata
Files: assets/fonts/literata-light-latin.woff2, assets/fonts/literata-regular-latin.woff2
Copyright 2017 The Literata Project Authors (https://github.com/googlefonts/literata)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Literata.txt, https://openfontlicense.org)
Static instances (weights 300 and 400) and Latin subset (WOFF2) of the official variable font in https://github.com/google/fonts/tree/main/ofl/literata, bundled so the theme makes no third-party requests.

Mulish
Files: assets/fonts/mulish-regular-latin.woff2, assets/fonts/mulish-semibold-latin.woff2
Copyright 2016 The Mulish Project Authors (https://github.com/googlefonts/mulish)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Mulish.txt, https://openfontlicense.org)
Static instances (weights 400 and 600) and Latin subset (WOFF2) of the official variable font in https://github.com/google/fonts/tree/main/ofl/mulish, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or products; the atelier, its people and its products are fictional).
- assets/images/hero.jpg (home opening)
- assets/images/serum.jpg (Yuzu Clarity Serum and its refill)
- assets/images/cream.jpg (Rice Milk Cream)
- assets/images/oil.jpg (Camellia Cleansing Oil)
- assets/images/toner.jpg (Green Tea Toner)
- assets/images/mist.jpg (Morning Mist)
- assets/images/balm.jpg (Camellia Night Balm)
- assets/images/botanicals.jpg (ingredients)
- assets/images/ritual.jpg (routines)
- assets/images/studio.jpg (the atelier, Discovery Set)
- assets/images/demo/serum.jpg (copy of assets/images/serum.jpg for the Media Library)
- assets/images/demo/cream.jpg (copy of assets/images/cream.jpg for the Media Library)
- assets/images/demo/oil.jpg (copy of assets/images/oil.jpg for the Media Library)
- assets/images/demo/toner.jpg (copy of assets/images/toner.jpg for the Media Library)
- assets/images/demo/mist.jpg (copy of assets/images/mist.jpg for the Media Library)
- assets/images/demo/balm.jpg (copy of assets/images/balm.jpg for the Media Library)
- assets/images/demo/botanicals.jpg (copy of assets/images/botanicals.jpg for the Media Library)
- assets/images/demo/ritual.jpg (copy of assets/images/ritual.jpg for the Media Library)
- assets/images/demo/studio.jpg (copy of assets/images/studio.jpg for the Media Library)

screenshot.png: made from the theme's own pages, GPL-2.0-or-later.

The glass-drop marks are CSS gradients (no image files). Everything else in the theme: GPL-2.0-or-later.

== Changelog ==

= 1.0.1 =
* Home ("The atelier"), the newsletter invitation and the 404 page: the label, both glass-drop dividers, the heading and the text now share one centred line on phones and desktops. The dividers used to sit to the left and the label had a small tick that pushed it off centre.

= 1.0.0 =
* First release.
