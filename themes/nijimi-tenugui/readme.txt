=== Nijimi Tenugui ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A handmade, organic store theme for a small tenugui dye workshop by the river in the fictional town of Kawasoe, pour-dyeing (chusen) cotton tenugui cloths in indigo since 1962, with WooCommerce templates styled to match. Pale indigo paper pages, an indigo wash for panels, deep indigo ink text and one muted dyer's blue; Kiwi Maru for display, Mona Sans for text. The hero and decorations are calm 2D flat vector illustrations (solid shapes, no outlines, repeat-pattern feel); product pictures are photographs. A floating pill header in pale indigo carries the menu, the account link and the cart (H10). The home page is an unfolding cloth (L13): one illustration of a tenugui stays pinned on the left while the chapters scroll beside it, and it changes from folded to opened to hung as each chapter comes into view; then a shelf of four cloths, the pour (paste, pour, rinse) as a wide flat illustration, the dye notes and care, and the journal. The footer opens with a strip of four cloth patterns cropped square (F8), then the name, the menu, the workshop address and hours. Pages: Shop, Patterns (the four stencil repeats with their meanings), How to use & care, The workshop (people, the dye week, visiting), Journal, Newsletter and Contact. The workshop details and the dye notes and care each live in one synced pattern (the care card shows in short form on the home page, in full on How to use & care and beside add-to-cart on every product); each cloth's specifications are product attributes (size, dye, cotton, method, ends), and size and dye print under every price (WooCommerce optional: without it the shop shows a static shelf and orders go by email).

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product category and tag archives, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample cloths in three categories (Patterned, Gradient & plain, Gift sets). Each cloth's specifications (size, dye, cotton, method, ends) are its attributes; size and dye are edited once in the product editor and shown under the price. Without WooCommerce, the Shop page and the home shelf show a static shelf of cloths and a note to order by email, and nothing store-specific is loaded.

On the home page one illustration of a tenugui stays in place while the chapters scroll beside it, and it changes from folded to opened to hung (the small script assets/js/unfold.js). Without JavaScript the folded cloth stays, and the mobile menu is shown as a plain list. Visitors who prefer reduced motion get no fades or hover motion.

The dyer, workshop address, shop hours, telephone and email, and the dye notes and care are kept in ONE place each: two synced patterns (Appearance > Editor > Patterns). The footer, The workshop and Contact (workshop details), and the home page, How to use & care and every product page (dye notes and care) only reference them. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

The workshop, its people, the town, the address, telephone number and prices are fictional.

== Installation ==

1. Download nijimi-tenugui.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/nijimi-tenugui.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Nijimi Tenugui. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, six journal posts with three categories and five tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. WordPress's untouched sample "Hello world!" post goes to the trash. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect their action to your form or email service.

== Copyright ==

Nijimi Tenugui WordPress Theme, Copyright 2026 ShipPress contributors.
Nijimi Tenugui is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Kiwi Maru
Files: assets/fonts/kiwimaru-regular-latin.woff2, assets/fonts/kiwimaru-medium-latin.woff2
Copyright 2020 The Kiwi Maru Project Authors (https://github.com/Kiwi-KawagotoKajiru/Kiwi-Maru)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-KiwiMaru.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subsets (WOFF2) of the Regular and Medium fonts in https://github.com/google/fonts/tree/main/ofl/kiwimaru, bundled so the theme makes no third-party requests.

Mona Sans
Files: assets/fonts/MonaSans[wdth,wght].ttf
Copyright 2022 The Mona Sans Project Authors (https://github.com/github/mona-sans), with Reserved Font Name "Mona"
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-MonaSans.txt, https://openfontlicense.org).
The unmodified upstream variable font from https://github.com/google/fonts/tree/main/ofl/monasans (widths 75-125, weights 200-900), bundled so the theme makes no third-party requests.

= Images =

Illustrations (SVG, 2D flat vector) and photographs: AI-generated for this theme with Grok Build, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or workshops; the workshop, its people and its cloths are fictional). Files in assets/images/demo/ are raster copies of the same pictures (made with scripts/rasterize-images.py for the illustrations), used by the demo import because the Media Library does not accept SVG.
- assets/images/chusen-pour.svg
- assets/images/cloth-folded.svg
- assets/images/cloth-hung.svg
- assets/images/cloth-open.svg
- assets/images/pattern-dots.svg
- assets/images/pattern-hemp.svg
- assets/images/pattern-stripe.svg
- assets/images/pattern-wave.svg
- assets/images/dye-workshop.jpg
- assets/images/p01-seigaiha.jpg
- assets/images/p02-asanoha.jpg
- assets/images/p03-mameshibori.jpg
- assets/images/p04-shima.jpg
- assets/images/p05-ume.jpg
- assets/images/p06-ame.jpg
- assets/images/p07-bokashi.jpg
- assets/images/p08-gift-set.jpg
- assets/images/demo/chusen-pour.jpg
- assets/images/demo/cloth-folded.jpg
- assets/images/demo/cloth-hung.jpg
- assets/images/demo/cloth-open.jpg
- assets/images/demo/dye-workshop.jpg
- assets/images/demo/p01-seigaiha.jpg
- assets/images/demo/p02-asanoha.jpg
- assets/images/demo/p03-mameshibori.jpg
- assets/images/demo/p04-shima.jpg
- assets/images/demo/p05-ume.jpg
- assets/images/demo/p06-ame.jpg
- assets/images/demo/p07-bokashi.jpg
- assets/images/demo/p08-gift-set.jpg
- assets/images/demo/pattern-dots.jpg
- assets/images/demo/pattern-hemp.jpg
- assets/images/demo/pattern-stripe.jpg
- assets/images/demo/pattern-wave.jpg

All other artwork (the folded-cloth mark, the label squares and rules) is CSS, GPL-2.0-or-later.

== Changelog ==

= 1.0.0 =
* Initial release.
