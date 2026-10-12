=== Nameshi Leather ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, handmade store theme for a small leather atelier making vegetable-tanned wallets, bags and belts by hand, with repairs and care: parchment pages, tan panels, ink brown and a saddle accent, Libre Baskerville with Epilogue, a centred wordmark with the menu split left and right over a stitched seam, a filter-first directory of every piece by item and leather with a new / one year / five years patina strip under each price, a split two-tone footer, Patina guide, Repairs and The atelier pages, and WooCommerce shop, product, cart, checkout and account templates styled to match.


== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product category and tag archives, product, cart, checkout, account, order confirmation and product search templates, and adds eight sample products in three categories (Wallets & cases, Bags, Belts) tagged by leather (Natural, Black, Indigo). Each product's leather note and patina strip come from its "Leather" and "Patina" attributes, edited once in the product editor and shown under the price. Without WooCommerce, the Shop page and the home directory show static cells and a note to order by email, and nothing store-specific is loaded.

The item and leather pills filter the directory with a few lines of script (assets/js/filter.js), loaded only where the directory is. Without JavaScript every piece stays visible. Without JavaScript the mobile menu is shown as a plain list.

The workshop address, hours, telephone and email, and the repair and care policy, are kept in ONE place each: two synced patterns (Appearance > Editor > Patterns). The footer, The atelier, Repairs and Contact (workshop details) and the home page, Repairs, the Patina guide and every product page (care policy) only reference them. They are created on activation (inc/shared-info.php) from inc/info/*.html and never created twice.

== Installation ==

1. Download nameshi-leather.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/nameshi-leather.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Nameshi Leather. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The contact and newsletter forms are plain HTML: connect its action to your form or email service.

== Copyright ==

Nameshi Leather WordPress Theme, Copyright 2026 ShipPress contributors.
Nameshi Leather is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Libre Baskerville
Files: assets/fonts/LibreBaskerville-wght.ttf, assets/fonts/LibreBaskerville-Italic-wght.ttf
Copyright 2012 The Libre Baskerville Project Authors (https://github.com/impallari/Libre-Baskerville) with Reserved Font Name Libre Baskerville.
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-LibreBaskerville.txt, https://openfontlicense.org).
Unmodified variable fonts (weights 400-700) from https://github.com/google/fonts/tree/main/ofl/librebaskerville (because of the Reserved Font Name they are not subset or renamed), bundled so the theme makes no third-party requests.

Epilogue
Files: assets/fonts/epilogue-variable-latin.woff2
Copyright 2020 The Epilogue Project Authors (https://github.com/Etcetera-Type-Co/Epilogue)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Epilogue.txt, https://openfontlicense.org); no Reserved Font Name.
Latin subset (variable WOFF2) of the font in https://github.com/google/fonts/tree/main/ofl/epilogue, bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, brands or workshops; the atelier, its makers and its leather goods are fictional). Copies in assets/images/demo/ are the same pictures, used by the demo import.
- assets/images/hero-bench.jpg (home: title block)
- assets/images/p01-bifold.jpg (Kawabe Bifold)
- assets/images/p02-cardcase.jpg (Slim Card Case)
- assets/images/p03-longwallet.jpg (River Long Wallet)
- assets/images/p04-tote.jpg (Market Tote)
- assets/images/p05-shoulder.jpg (Small Shoulder Bag)
- assets/images/p06-belt.jpg (Saddle Belt)
- assets/images/p07-keycase.jpg (Key Case)
- assets/images/p08-notebook.jpg (Notebook Cover)
- assets/images/atelier-tools.jpg (The atelier; journal)
- assets/images/dye-vat.jpg (Patina guide; The atelier; journal)
- assets/images/hands-stitch.jpg (Repairs; journal)
- assets/images/patina-strip.jpg (home: how leather ages; Patina guide; journal)
- assets/images/repair-bench.jpg (Repairs; journal)
- assets/images/maker.jpg (The atelier: the makers)
- assets/images/street-workshop.jpg (The atelier; Contact; journal)
- assets/images/demo/hero-bench.jpg (demo import copy of assets/images/hero-bench.jpg)
- assets/images/demo/p01-bifold.jpg (demo import copy of assets/images/p01-bifold.jpg)
- assets/images/demo/p02-cardcase.jpg (demo import copy of assets/images/p02-cardcase.jpg)
- assets/images/demo/p03-longwallet.jpg (demo import copy of assets/images/p03-longwallet.jpg)
- assets/images/demo/p04-tote.jpg (demo import copy of assets/images/p04-tote.jpg)
- assets/images/demo/p05-shoulder.jpg (demo import copy of assets/images/p05-shoulder.jpg)
- assets/images/demo/p06-belt.jpg (demo import copy of assets/images/p06-belt.jpg)
- assets/images/demo/p07-keycase.jpg (demo import copy of assets/images/p07-keycase.jpg)
- assets/images/demo/p08-notebook.jpg (demo import copy of assets/images/p08-notebook.jpg)
- assets/images/demo/atelier-tools.jpg (demo import copy of assets/images/atelier-tools.jpg)
- assets/images/demo/dye-vat.jpg (demo import copy of assets/images/dye-vat.jpg)
- assets/images/demo/hands-stitch.jpg (demo import copy of assets/images/hands-stitch.jpg)
- assets/images/demo/patina-strip.jpg (demo import copy of assets/images/patina-strip.jpg)
- assets/images/demo/repair-bench.jpg (demo import copy of assets/images/repair-bench.jpg)
- assets/images/demo/maker.jpg (demo import copy of assets/images/maker.jpg)
- assets/images/demo/street-workshop.jpg (demo import copy of assets/images/street-workshop.jpg)

All other artwork (the stitched seams, stitch marks and patina swatches) is CSS, GPL-2.0-or-later.
