=== Hibiki Records ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, dark store theme for a small independent record shop: charcoal pages, graphite panels, bone text and a muted grey-teal for fine groove rings, Familjen Grotesk with Martian Mono catalogue numbers, a slim dark header bar with an Open now chip, a record-crate mosaic of square sleeves in mixed sizes on the home page, a slow "now playing" ticker footer, New arrivals and Listening booth pages (with a booking request form), and WooCommerce shop, product, cart, checkout and account templates styled to match.


== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product category and tag archives, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products in three categories (Used vinyl, New vinyl, Care & accessories): six LPs by fictional artists and two accessories. Each product's SKU is its catalogue number (HBK-0412) and its format · condition · year line comes from its "Format", "Condition" and "Year" attributes (accessories: "Contents"), edited once in the product editor and shown under the price. Without WooCommerce, the Shop page, New arrivals and the home mosaic show static sleeve cells and a note to order by email, and nothing store-specific is loaded.

The footer ticker drifts very slowly (at least a minute per loop) with a few lines of script (assets/js/ticker.js), pauses on hover and focus, and has a Pause button; with reduced motion or without JavaScript it is a still line. Its lines are text in the footer template part (Appearance > Editor > Patterns > Footer). The booking and contact forms (assets/js/forms.js) open the visitor's email app with the request written out; nothing is stored on the site. Without JavaScript the mobile menu is shown as a plain list.

Shared details are kept in ONE place each. The shop's opening hours, closed days, address, phone, email and social account: Appearance > Shop details (inc/shop-info.php), shown by the "Shop details" block in the header chip (Open now, worked out on the server in the site's timezone), the ticker, the footer card, Home, Listening booth, The shop and Contact. The listening-booth terms and the grading + shipping note: two synced patterns (Appearance > Editor > Patterns), created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download hibiki-records.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/hibiki-records.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Hibiki Records. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The newsletter form is plain HTML: connect its action to your form or email service. The booth and contact forms write an email to the address in Appearance > Shop details.

== Copyright ==

Hibiki Records WordPress Theme, Copyright 2026 ShipPress contributors.
Hibiki Records is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Familjen Grotesk
Files: assets/fonts/familjengrotesk-variable-latin.woff2
Copyright 2021 The Familjen Grotesk Project Authors (https://github.com/Familjen-Sthlm/Familjen-Grotesk)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-FamiljenGrotesk.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (variable WOFF2, weights 400-600) of the font in https://github.com/google/fonts/tree/main/ofl/familjengrotesk, bundled so the theme makes no third-party requests.

Martian Mono
Files: assets/fonts/martianmono-latin.woff2
Copyright 2021 The Martian Mono Project Authors (https://github.com/evilmartians/mono)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-MartianMono.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (width pinned to 100, weights 400-500, WOFF2) of the font in https://github.com/google/fonts/tree/main/ofl/martianmono, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands, labels or shops; the shop, its owner, clerk, artists and albums are fictional). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero-crate.jpg (Shop page; journal)
- assets/images/booth.jpg (Home: booth teaser; Listening booth; journal)
- assets/images/booth-desk.jpg (Listening booth: terms)
- assets/images/headphones.jpg (Listening booth: how to book; journal)
- assets/images/sleeve-01.jpg (Low Tide Hours; home mosaic feature)
- assets/images/sleeve-02.jpg (Paper Lanterns, Slow Rain)
- assets/images/sleeve-03.jpg (Coastline Drive '83)
- assets/images/sleeve-04.jpg (Songs from the Upper Field)
- assets/images/sleeve-05.jpg (Blue Hour at Minase)
- assets/images/sleeve-06.jpg (Warm Static)
- assets/images/sleeve-07.jpg (Night Ferry (home mosaic, New arrivals without WooCommerce))
- assets/images/sleeve-08.jpg (Field Recordings, Vol. 2 (New arrivals without WooCommerce))
- assets/images/arrivals-shelf.jpg (Home mosaic shelf card; New arrivals)
- assets/images/counter-turntable.jpg (The shop: the counter turntable)
- assets/images/clerk.jpg (The shop: Nanami Kurose, the clerk)
- assets/images/owner.jpg (The shop: Tetsuo Hayami, the owner)
- assets/images/street.jpg (Home: visit; The shop; journal)
- assets/images/catalogue-card.jpg (The shop: the catalogue cards; journal)
- assets/images/needle-detail.jpg (New arrivals: grading; journal)
- assets/images/cleaning-kit.jpg (Record Brush Cleaning Kit)
- assets/images/inner-sleeves.jpg (Inner Sleeves, 25-pack)
- assets/images/demo/hero-crate.jpg (demo import copy of assets/images/hero-crate.jpg)
- assets/images/demo/booth.jpg (demo import copy of assets/images/booth.jpg)
- assets/images/demo/booth-desk.jpg (demo import copy of assets/images/booth-desk.jpg)
- assets/images/demo/headphones.jpg (demo import copy of assets/images/headphones.jpg)
- assets/images/demo/sleeve-01.jpg (demo import copy of assets/images/sleeve-01.jpg)
- assets/images/demo/sleeve-02.jpg (demo import copy of assets/images/sleeve-02.jpg)
- assets/images/demo/sleeve-03.jpg (demo import copy of assets/images/sleeve-03.jpg)
- assets/images/demo/sleeve-04.jpg (demo import copy of assets/images/sleeve-04.jpg)
- assets/images/demo/sleeve-05.jpg (demo import copy of assets/images/sleeve-05.jpg)
- assets/images/demo/sleeve-06.jpg (demo import copy of assets/images/sleeve-06.jpg)
- assets/images/demo/sleeve-07.jpg (demo import copy of assets/images/sleeve-07.jpg)
- assets/images/demo/sleeve-08.jpg (demo import copy of assets/images/sleeve-08.jpg)
- assets/images/demo/arrivals-shelf.jpg (demo import copy of assets/images/arrivals-shelf.jpg)
- assets/images/demo/counter-turntable.jpg (demo import copy of assets/images/counter-turntable.jpg)
- assets/images/demo/clerk.jpg (demo import copy of assets/images/clerk.jpg)
- assets/images/demo/owner.jpg (demo import copy of assets/images/owner.jpg)
- assets/images/demo/street.jpg (demo import copy of assets/images/street.jpg)
- assets/images/demo/catalogue-card.jpg (demo import copy of assets/images/catalogue-card.jpg)
- assets/images/demo/needle-detail.jpg (demo import copy of assets/images/needle-detail.jpg)
- assets/images/demo/cleaning-kit.jpg (demo import copy of assets/images/cleaning-kit.jpg)
- assets/images/demo/inner-sleeves.jpg (demo import copy of assets/images/inner-sleeves.jpg)

All other artwork (the groove rings, the booth status dot, the disc edge and dividers) is CSS, GPL-2.0-or-later.
