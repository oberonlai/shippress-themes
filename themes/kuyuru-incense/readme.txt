=== Kuyuru Incense ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A serene, restrained store theme for a small Kyoto incense house: wisteria-smoke pages, mist panels, ink-plum text and one muted plum accent, Hina Mincho with Red Hat Text, a centred wordmark between a split menu, a home page that follows one stick through its forty minutes as a chaptered timeline joined by smoke-curl hairlines, a giant KUYURU wordmark footer, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products (sticks and cones in five scent families: Woody, Resinous, Floral, Spice, Green). Without it, the Shop page shows the shelf of sticks and cones with their prices, orders go by email, and nothing store-specific is loaded.

The house address, opening days, shipping note and email, the scent-notes legend (top, heart, base) and the shelf with its prices and the "House favourite" badge are kept in ONE place each: three synced patterns (under Appearance > Editor > Patterns). The home, scent guide, shop, about and contact pages and the footer only reference them, so a change made once shows everywhere. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download kuyuru-incense.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kuyuru-incense.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kuyuru Incense. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect their action to your form or email service.

== Copyright ==

Kuyuru Incense WordPress Theme, Copyright 2026 ShipPress contributors.
Kuyuru Incense is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Hina Mincho
Files: assets/fonts/hina-mincho-latin.woff2
Copyright 2020 The Hina Mincho Project Authors (https://github.com/satsuyako/Hina-Mincho)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-HinaMincho.txt, https://openfontlicense.org)
Latin subset (WOFF2) of https://github.com/google/fonts/tree/main/ofl/hinamincho, bundled so the theme makes no third-party requests.

Red Hat Text
Files: assets/fonts/red-hat-text-variable-latin.woff2
Copyright 2024 The Red Hat Project Authors (https://github.com/RedHatOfficial/RedHatFont)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-RedHatText.txt, https://openfontlicense.org)
Latin subset (WOFF2) of the variable font in https://github.com/google/fonts/tree/main/ofl/redhattext, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or products; the incense house, its people and its products are fictional).
- assets/images/hero.jpg (home opening)
- assets/images/lit.jpg (timeline chapter 00:00)
- assets/images/woods.jpg (timeline chapter 05:00, scent guide)
- assets/images/heart.jpg (timeline chapter 20:00, how to burn)
- assets/images/ash.jpg (timeline chapter 40:00)
- assets/images/bundles.jpg (journal)
- assets/images/hands.jpg (about)
- assets/images/shop.jpg (contact)
- assets/images/product-hinoki.jpg (product photograph, cropped from the photographs above)
- assets/images/product-agarwood.jpg (product photograph, cropped from the photographs above)
- assets/images/product-benzoin.jpg (product photograph, cropped from the photographs above)
- assets/images/product-wisteria.jpg (product photograph, cropped from the photographs above)
- assets/images/product-plum.jpg (product photograph, cropped from the photographs above)
- assets/images/product-clove.jpg (product photograph, cropped from the photographs above)
- assets/images/product-anise.jpg (product photograph, cropped from the photographs above)
- assets/images/product-greentea.jpg (product photograph, cropped from the photographs above)
- assets/images/demo/ash.jpg (copy of assets/images/ash.jpg for the Media Library)
- assets/images/demo/bundles.jpg (copy of assets/images/bundles.jpg for the Media Library)
- assets/images/demo/hands.jpg (copy of assets/images/hands.jpg for the Media Library)
- assets/images/demo/heart.jpg (copy of assets/images/heart.jpg for the Media Library)
- assets/images/demo/hero.jpg (copy of assets/images/hero.jpg for the Media Library)
- assets/images/demo/lit.jpg (copy of assets/images/lit.jpg for the Media Library)
- assets/images/demo/product-agarwood.jpg (copy of assets/images/product-agarwood.jpg for the Media Library)
- assets/images/demo/product-anise.jpg (copy of assets/images/product-anise.jpg for the Media Library)
- assets/images/demo/product-benzoin.jpg (copy of assets/images/product-benzoin.jpg for the Media Library)
- assets/images/demo/product-clove.jpg (copy of assets/images/product-clove.jpg for the Media Library)
- assets/images/demo/product-greentea.jpg (copy of assets/images/product-greentea.jpg for the Media Library)
- assets/images/demo/product-hinoki.jpg (copy of assets/images/product-hinoki.jpg for the Media Library)
- assets/images/demo/product-plum.jpg (copy of assets/images/product-plum.jpg for the Media Library)
- assets/images/demo/product-wisteria.jpg (copy of assets/images/product-wisteria.jpg for the Media Library)
- assets/images/demo/shop.jpg (copy of assets/images/shop.jpg for the Media Library)
- assets/images/demo/woods.jpg (copy of assets/images/woods.jpg for the Media Library)

= Icons and lines =

The smoke-curl hairlines and the small note marks are drawn in CSS and inline SVG for this theme, GPL-2.0-or-later.
