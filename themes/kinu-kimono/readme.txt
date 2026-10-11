=== Kinu Kimono ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

An elegant, restrained store theme for a small kimono rental and dressing house in Kyoto: silk-mist pages, washi-ivory panels and ink text, deep plum for the menu rail, the dressing panels and the footer, antique gold kept to hairlines and small marks, Zen Old Mincho with Zen Kaku Gothic New, a vertical menu rail on the right edge, a sideways-scrolling kimono rack of rental plans, a photo-strip footer, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products (four rental plans, an obi upgrade, a hair ornament, a bag and zori set and a yukata to keep). Without it, the Shop page shows the kimono rack of plans with their prices, bookings go by phone or email, and nothing store-specific is loaded.

The house address, opening hours, phone number and email, the rack of plans with its prices and the "Most chosen" badge, and the footer photo strip are kept in ONE place each: three synced patterns ("Kinu Kimono: house address, hours and phone", "Kinu Kimono: the kimono rack of plans with prices" and "Kinu Kimono: footer photo strip", under Appearance > Editor > Patterns). The footer, the home page, the plans page, the how-it-works page, the shop page and the contact page only reference them, so a change made once shows everywhere. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download kinu-kimono.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kinu-kimono.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kinu Kimono. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Kinu Kimono WordPress Theme, Copyright 2026 ShipPress contributors.
Kinu Kimono is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Zen Old Mincho
Files: assets/fonts/zen-old-mincho-regular-latin.woff2, assets/fonts/zen-old-mincho-medium-latin.woff2
Copyright 2021 The Zen Old Mincho Project Authors (https://github.com/googlefonts/zen-oldmincho)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-ZenOldMincho.txt, https://openfontlicense.org)
Latin subset (WOFF2) of the official files in https://github.com/google/fonts/tree/main/ofl/zenoldmincho, bundled so the theme makes no third-party requests.

Zen Kaku Gothic New
Files: assets/fonts/zen-kaku-gothic-new-regular-latin.woff2, assets/fonts/zen-kaku-gothic-new-medium-latin.woff2
Copyright 2022 The Zen Kaku Gothic Project Authors (https://github.com/googlefonts/zen-kakugothic)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-ZenKakuGothicNew.txt, https://openfontlicense.org)
Latin subset (WOFF2) of the official files in https://github.com/google/fonts/tree/main/ofl/zenkakugothicnew, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, places, brands or products; the house, its people and its products are fictional). The files in assets/images/demo/ are identical copies imported into the Media Library for the sample products.
- assets/images/hero.jpg
- assets/images/fitting.jpg
- assets/images/obi.jpg
- assets/images/stroll.jpg
- assets/images/fabric.jpg
- assets/images/accessories.jpg
- assets/images/studio.jpg
- assets/images/yukata.jpg
- assets/images/demo/accessories.jpg
- assets/images/demo/fabric.jpg
- assets/images/demo/fitting.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/obi.jpg
- assets/images/demo/stroll.jpg
- assets/images/demo/yukata.jpg

screenshot.png: a capture of the theme's own home page, GPL-2.0-or-later.

= Icons =

The knot mark (two nested diamonds, a CSS mask in style.css) is original to this theme, GPL-2.0-or-later.
