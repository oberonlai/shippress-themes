=== Amane Wagashi ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

An elegant, quiet store theme for a small Kyoto-style wagashi house that makes a different sweet each month: blush washi paper, pale azuki panels, deep azuki-brown ink and a muted azuki red, Kaisei Tokumin with Plus Jakarta Sans, a magazine masthead whose dateline shows the season of the site's calendar, a sideways-scrolling seasonal tray of twelve months of sweets, Seasonal calendar and Pre-orders pages, a street sketch and visit card footer, and WooCommerce shop, product, cart, checkout and account templates styled to match.


== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products in four categories (Seasonal boxes, Gift boxes, Yokan, Tea pairing). Each product's keeping line is its "Keeps" attribute, edited once in the product editor and shown under the price. Without WooCommerce, the Shop page shows the synced seasonal tray with prices and a note to order by telephone or email, and nothing store-specific is loaded.

The masthead dateline shows the season of the site's own calendar (Settings > General timezone), e.g. "Late autumn · Month of the chestnut", through the block binding source amane-wagashi/season; the tray card of the current month is marked "In season now" the same way. The visitor's clock is never used.

The seasonal tray scrolls sideways with scroll-snap; it is a focusable region (arrow keys), the earlier / later links and the month index are plain anchors that work without JavaScript, and the small script assets/js/tray.js (loaded only where the tray is shown) moves it by one card. No animation for visitors who prefer reduced motion. Without JavaScript the mobile menu is shown as a plain list.

The shop address, opening days, telephone, email and pre-order cut-off, and the twelve seasonal sweets with prices, are kept in ONE place each: two synced patterns (Appearance > Editor > Patterns). The masthead dateline, the footer card, Pre-orders and Contact (shop details) and the home tray, the Shop page and the Seasonal calendar (sweets) only reference them. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice. The "Most chosen" badge on the Pre-orders page is an ordinary paragraph: edit or delete it.

== Installation ==

1. Download amane-wagashi.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/amane-wagashi.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Amane Wagashi. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect its action to your form or email service.

== Copyright ==

Amane Wagashi WordPress Theme, Copyright 2026 ShipPress contributors.
Amane Wagashi is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Kaisei Tokumin
Files: assets/fonts/kaiseitokumin-regular-latin.woff2, assets/fonts/kaiseitokumin-medium-latin.woff2
Copyright 2020 The Kaisei Project Authors (https://github.com/Font-Kai/Kaisei)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-KaiseiTokumin.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subsets (WOFF2, Regular and Medium) of the fonts in https://github.com/google/fonts/tree/main/ofl/kaiseitokumin, bundled so the theme makes no third-party requests.

Plus Jakarta Sans
Files: assets/fonts/plusjakartasans-latin.woff2
Copyright 2020 The Plus Jakarta Sans Project Authors (https://github.com/tokotype/PlusJakartaSans)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-PlusJakartaSans.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (WOFF2, weights 300-600) of the variable font in https://github.com/google/fonts/tree/main/ofl/plusjakartasans, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or shops; the house, its people and its sweets are fictional). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero-tray.jpg (home opening, Seasonal Box of Six)
- assets/images/m01-camellia.jpg (tray: January)
- assets/images/m02-plum.jpg (tray: February)
- assets/images/m03-sakura-mochi.jpg (tray: March)
- assets/images/m04-hanami-dango.jpg (tray: April)
- assets/images/m05-kashiwa-mochi.jpg (tray: May)
- assets/images/m06-hydrangea.jpg (tray: June)
- assets/images/m07-mizu-yokan.jpg (tray: July, Mizu Yokan Bar, journal)
- assets/images/m08-kingyoku.jpg (tray: August)
- assets/images/m09-tsukimi.jpg (tray: September, journal)
- assets/images/m10-chestnut.jpg (tray: October, Autumn Box of Four, Chestnut Kinton, journal)
- assets/images/m11-persimmon.jpg (tray: November, Persimmon Yokan)
- assets/images/m12-yuzu.jpg (tray: December, Yuzu Winter Box)
- assets/images/hands-shaping.jpg (home kitchen, journal)
- assets/images/shop-counter.jpg (about, contact)
- assets/images/gift-box.jpg (Twelve Months Gift Box, journal)
- assets/images/tea-pairing.jpg (Tea Pairing Set, journal)
- assets/images/confectioner.jpg (about; a portrait crop of hands-shaping.jpg, its own photograph was not generated)
- assets/images/demo/hero-tray.jpg (demo import copy of assets/images/hero-tray.jpg)
- assets/images/demo/m01-camellia.jpg (demo import copy of assets/images/m01-camellia.jpg)
- assets/images/demo/m02-plum.jpg (demo import copy of assets/images/m02-plum.jpg)
- assets/images/demo/m03-sakura-mochi.jpg (demo import copy of assets/images/m03-sakura-mochi.jpg)
- assets/images/demo/m04-hanami-dango.jpg (demo import copy of assets/images/m04-hanami-dango.jpg)
- assets/images/demo/m05-kashiwa-mochi.jpg (demo import copy of assets/images/m05-kashiwa-mochi.jpg)
- assets/images/demo/m06-hydrangea.jpg (demo import copy of assets/images/m06-hydrangea.jpg)
- assets/images/demo/m07-mizu-yokan.jpg (demo import copy of assets/images/m07-mizu-yokan.jpg)
- assets/images/demo/m08-kingyoku.jpg (demo import copy of assets/images/m08-kingyoku.jpg)
- assets/images/demo/m09-tsukimi.jpg (demo import copy of assets/images/m09-tsukimi.jpg)
- assets/images/demo/m10-chestnut.jpg (demo import copy of assets/images/m10-chestnut.jpg)
- assets/images/demo/m11-persimmon.jpg (demo import copy of assets/images/m11-persimmon.jpg)
- assets/images/demo/m12-yuzu.jpg (demo import copy of assets/images/m12-yuzu.jpg)
- assets/images/demo/hands-shaping.jpg (demo import copy of assets/images/hands-shaping.jpg)
- assets/images/demo/shop-counter.jpg (demo import copy of assets/images/shop-counter.jpg)
- assets/images/demo/gift-box.jpg (demo import copy of assets/images/gift-box.jpg)
- assets/images/demo/tea-pairing.jpg (demo import copy of assets/images/tea-pairing.jpg)
- assets/images/demo/confectioner.jpg (demo import copy of assets/images/confectioner.jpg)

The street sketch in the footer, the seal and the box marks are inline SVG and CSS drawn for this theme (GPL-2.0-or-later).
