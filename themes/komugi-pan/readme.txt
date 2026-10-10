=== Komugi Pan ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A warm, playful store theme for neighbourhood bakeries: flour-cream pages with a faint flour-dust texture, golden crust and rye brown, loaf-topped product cards with round price stickers, Young Serif headings over Outfit text, a centred header between a split menu, a product-first home page, a daily bake board, a photo-strip footer, a bake schedule, a weekly loaf letter, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products (four loaves, two pastries and two sweet buns). Without it, the Shop page lists every bread with photographs and prices and reservations go by phone or email, and nothing store-specific is loaded.

The address, opening hours, phone number, email and the daily bake board are kept in ONE place each: two synced patterns ("Komugi Pan: address, hours and phone" and "Komugi Pan: daily bake board", under Appearance > Editor > Patterns). The footer, the home page, the bake schedule, the shop and the contact page only reference them, so a change made once shows everywhere. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download komugi-pan.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/komugi-pan.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Komugi Pan. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Komugi Pan WordPress Theme, Copyright 2026 ShipPress contributors.
Komugi Pan is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Young Serif
Files: assets/fonts/young-serif-latin.woff2
Copyright 2023 The Young Serif Project Authors (https://github.com/noirblancrouge/YoungSerif)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-YoungSerif.txt, https://openfontlicense.org)
Latin subset (WOFF2) of the official file in https://github.com/google/fonts/tree/main/ofl/youngserif, bundled so the theme makes no third-party requests.

Outfit
Files: assets/fonts/outfit-variable-latin.woff2
Copyright 2021 The Outfit Project Authors (https://github.com/Outfitio/Outfit-Fonts)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Outfit.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis) of the official file in https://github.com/google/fonts/tree/main/ofl/outfit, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, places, brands or products; every bakery and baker they suggest is fictional). The product-*.jpg files are crops of the photographs listed here; the files in assets/images/demo/ are identical copies imported into the Media Library by the demo import.
- assets/images/anpan.jpg
- assets/images/baker.jpg
- assets/images/coffee.jpg
- assets/images/croissant.jpg
- assets/images/flour.jpg
- assets/images/hero.jpg
- assets/images/melonpan.jpg
- assets/images/oven.jpg
- assets/images/product-butter-croissant.jpg
- assets/images/product-cinnamon-roll.jpg
- assets/images/product-country-sourdough.jpg
- assets/images/product-melon-pan.jpg
- assets/images/product-morning-baguette.jpg
- assets/images/product-sesame-anpan.jpg
- assets/images/product-shokupan.jpg
- assets/images/product-stone-oven-batard.jpg
- assets/images/shokupan.jpg
- assets/images/shopfront.jpg
- assets/images/demo/anpan.jpg
- assets/images/demo/baker.jpg
- assets/images/demo/coffee.jpg
- assets/images/demo/croissant.jpg
- assets/images/demo/flour.jpg
- assets/images/demo/hero.jpg
- assets/images/demo/melonpan.jpg
- assets/images/demo/oven.jpg
- assets/images/demo/product-butter-croissant.jpg
- assets/images/demo/product-cinnamon-roll.jpg
- assets/images/demo/product-country-sourdough.jpg
- assets/images/demo/product-melon-pan.jpg
- assets/images/demo/product-morning-baguette.jpg
- assets/images/demo/product-sesame-anpan.jpg
- assets/images/demo/product-shokupan.jpg
- assets/images/demo/product-stone-oven-batard.jpg
- assets/images/demo/shokupan.jpg
- assets/images/demo/shopfront.jpg

The wheat-ear badge icon (an inline SVG mask in style.css) and the flour-dust texture (CSS gradients) are original work for this theme, Copyright 2026 ShipPress contributors, License: GPL-2.0-or-later.
