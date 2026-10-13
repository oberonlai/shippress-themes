=== Kurogane Ironware ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A crafted, sculptural store theme for a small cast-iron kettle foundry: cast-iron charcoal pages, graphite panels, pale stone text and one muted rust accent, Prata with Radio Canada, a transparent header over a full-bleed low-light photograph of a kettle on a charcoal brazier, long calm pauses between sections, a colophon footer with the kettle lines, The foundry and Seasoning & care pages, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product category and tag archives, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products in four categories (Kettles, Teapots, Braziers & trivets, Kitchen iron). Each product's specifications (line, capacity, weight, size, heat, finish) are its attributes; capacity and weight are edited once in the product editor and shown under the price. Without WooCommerce, the Shop page and the home shelf show a static shelf of pieces and a note to order by email, and nothing store-specific is loaded.

The header lies transparent over the home photograph and turns solid as the page scrolls (CSS scroll timeline, with the small script assets/js/header.js for other browsers). Visitors who prefer reduced motion get a solid header and no hover motion. Without JavaScript the mobile menu is shown as a plain list.

The maker, foundry address, shop hours, telephone and email; the seasoning and care note; and the kettle lines (mould, casting, weight, capacity) are kept in ONE place each: three synced patterns (Appearance > Editor > Patterns). The footer colophon, The foundry and Contact (foundry details), the home page, Seasoning & care and every product page (care note), and the footer colophon and The foundry (kettle lines) only reference them. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download kurogane-ironware.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kurogane-ironware.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kurogane Ironware. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact form is plain HTML: connect its action to your form or email service.

== Copyright ==

Kurogane Ironware WordPress Theme, Copyright 2026 ShipPress contributors.
Kurogane Ironware is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Prata
Files: assets/fonts/prata-regular-latin.woff2
Copyright 2011 The Prata Project Authors (https://github.com/cyrealtype/Prata)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Prata.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (WOFF2) of the font in https://github.com/google/fonts/tree/main/ofl/prata, bundled so the theme makes no third-party requests.

Radio Canada
Files: assets/fonts/radiocanada-latin.woff2
Copyright 2019 The Radio-Canada Project Authors (https://github.com/cbcrc/radiocanadafonts)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-RadioCanada.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (variable WOFF2, weights 300-700, widths 75-100) of the font in https://github.com/google/fonts/tree/main/ofl/radiocanada, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme with Grok Build, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or foundries; the foundry, its makers and its kettles are fictional). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero-kettle.jpg (home: full-bleed photograph)
- assets/images/steam-close.jpg (Seasoning & care; journal)
- assets/images/foundry-pour.jpg (home: second photograph; The foundry; journal)
- assets/images/sand-mould.jpg (how a kettle is made: mould)
- assets/images/craftsman.jpg (The foundry: the makers)
- assets/images/seasoning.jpg (Seasoning & care; journal)
- assets/images/texture-arare.jpg (The foundry; Seasoning & care; journal)
- assets/images/lid-detail.jpg (how a kettle is made: finish; journal)
- assets/images/workshop-bench.jpg (how a kettle is made: cast; The foundry)
- assets/images/tea-room.jpg (The foundry; Contact; journal)
- assets/images/p01-arare.jpg (Arare Kettle)
- assets/images/p02-natsume.jpg (Natsume Kettle)
- assets/images/p03-hira.jpg (Hira Kettle)
- assets/images/p04-kyusu.jpg (Kyusu Teapot)
- assets/images/p05-trivet.jpg (Gotoku Trivet)
- assets/images/p06-small.jpg (Small Arare Kettle)
- assets/images/p07-pan.jpg (Ear Pan)
- assets/images/p08-brazier.jpg (Hand Brazier)
- assets/images/demo/hero-kettle.jpg (demo import copy of assets/images/hero-kettle.jpg)
- assets/images/demo/steam-close.jpg (demo import copy of assets/images/steam-close.jpg)
- assets/images/demo/foundry-pour.jpg (demo import copy of assets/images/foundry-pour.jpg)
- assets/images/demo/sand-mould.jpg (demo import copy of assets/images/sand-mould.jpg)
- assets/images/demo/craftsman.jpg (demo import copy of assets/images/craftsman.jpg)
- assets/images/demo/seasoning.jpg (demo import copy of assets/images/seasoning.jpg)
- assets/images/demo/texture-arare.jpg (demo import copy of assets/images/texture-arare.jpg)
- assets/images/demo/lid-detail.jpg (demo import copy of assets/images/lid-detail.jpg)
- assets/images/demo/workshop-bench.jpg (demo import copy of assets/images/workshop-bench.jpg)
- assets/images/demo/tea-room.jpg (demo import copy of assets/images/tea-room.jpg)
- assets/images/demo/p01-arare.jpg (demo import copy of assets/images/p01-arare.jpg)
- assets/images/demo/p02-natsume.jpg (demo import copy of assets/images/p02-natsume.jpg)
- assets/images/demo/p03-hira.jpg (demo import copy of assets/images/p03-hira.jpg)
- assets/images/demo/p04-kyusu.jpg (demo import copy of assets/images/p04-kyusu.jpg)
- assets/images/demo/p05-trivet.jpg (demo import copy of assets/images/p05-trivet.jpg)
- assets/images/demo/p06-small.jpg (demo import copy of assets/images/p06-small.jpg)
- assets/images/demo/p07-pan.jpg (demo import copy of assets/images/p07-pan.jpg)
- assets/images/demo/p08-brazier.jpg (demo import copy of assets/images/p08-brazier.jpg)

All other artwork (the colophon diamond, rules and iron edges) is CSS, GPL-2.0-or-later.
