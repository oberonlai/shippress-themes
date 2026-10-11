=== Kami no Ne ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A quiet, editorial store theme for small washi paper and stationery shops: paper white and kozo surfaces, sumi ink and a deep ai indigo with one pale persimmon dot, a paper side rail, a home page laid out as a shelf mosaic of hairline compartments, a footer signed with a vertical line and a persimmon seal, large still-life photography, Cormorant titles over Zen Kaku Gothic New text, a makers page, Saturday workshops with a booking form, a monthly letter, and WooCommerce shop, product, cart, checkout and account templates styled to match.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

WooCommerce is optional. With WooCommerce active the theme declares support, styles the shop, product, cart, checkout, account, order confirmation and product search templates, and adds twelve sample products (paper, notebooks, ink and brush, letters, seals and gift sets). Without it, the Shop page shows the paper list with photographs and prices and orders by email, and nothing store-specific is loaded.

== Installation ==

1. Download kami-no-ne.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/kami-no-ne.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Kami no Ne. For the online shop, install and activate WooCommerce (before or after the theme).

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php, driven by demo-content.json): it creates its pages with all their text and images, sample posts with categories and tags, the menu, and sets the front page and posts page. Then you only change the text and swap in your own pictures. It never changes or deletes existing content, and running it again only adds what is missing. If the automatic setup did not run, use the "Import demo content" button shown in wp-admin, or run: wp shippress demo-import

Sample products (inc/woo-import.php) are created only while WooCommerce is active: right after the demo import, on the next wp-admin visit when WooCommerce is activated later, or with: wp shippress woo-import. They are found again by their tag, so running it twice never makes doubles, and a product of your own with the same slug is left alone.

The workshop booking, contact and newsletter forms are plain HTML: connect their action to your form, booking or email service.

== Copyright ==

Kami no Ne WordPress Theme, Copyright 2026 ShipPress contributors.
Kami no Ne is distributed under the terms of the GNU GPL, version 2 or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

== Resources ==

= Fonts =

Cormorant
Files: assets/fonts/cormorant-variable-latin.woff2, assets/fonts/cormorant-italic-variable-latin.woff2
Copyright 2015 The Cormorant Project Authors (https://github.com/CatharsisFonts/Cormorant)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-Cormorant.txt, https://openfontlicense.org)
Latin subset (variable WOFF2, weight axis, with italic), bundled so the theme makes no third-party requests.

Zen Kaku Gothic New
Files: assets/fonts/zen-kaku-gothic-new-400-latin.woff2, assets/fonts/zen-kaku-gothic-new-500-latin.woff2
Copyright 2022 The Zen Kaku Gothic Project Authors (https://github.com/googlefonts/zen-kakugothic)
License: SIL Open Font License, Version 1.1 (assets/fonts/OFL-ZenKakuGothicNew.txt, https://openfontlicense.org)
Latin subset (WOFF2, weights 400 and 500), bundled so the theme makes no third-party requests.

= Images =

Photographs: AI-generated for this theme, released under GPL-2.0-or-later / CC0 (no stock images, no real people, places, brands or products; every shop, maker and workshop they suggest is fictional). The product-*.jpg files are crops of the photographs listed here.
- assets/images/artisan.jpg
- assets/images/brush-pens.jpg
- assets/images/envelopes.jpg
- assets/images/gift-wrap.jpg
- assets/images/hero-paper-desk.jpg
- assets/images/inkstone.jpg
- assets/images/journal-open.jpg
- assets/images/notebook-thread.jpg
- assets/images/product-brush-pens.jpg
- assets/images/product-deckle-paper.jpg
- assets/images/product-desk-set.jpg
- assets/images/product-field-journal.jpg
- assets/images/product-furoshiki-gift.jpg
- assets/images/product-indigo-ink.jpg
- assets/images/product-ink-pad.jpg
- assets/images/product-inkstone-set.jpg
- assets/images/product-kozo-sheets.jpg
- assets/images/product-letter-set.jpg
- assets/images/product-seal-stamps.jpg
- assets/images/product-thread-notebook.jpg
- assets/images/shop-interior.jpg
- assets/images/stamps.jpg
- assets/images/washi-sheets.jpg
- assets/images/workshop.jpg

The same photographs, imported into the Media Library by the demo import and used as featured and product images (identical files; same license):
- assets/images/demo/artisan.jpg
- assets/images/demo/brush-pens.jpg
- assets/images/demo/envelopes.jpg
- assets/images/demo/gift-wrap.jpg
- assets/images/demo/hero-paper-desk.jpg
- assets/images/demo/inkstone.jpg
- assets/images/demo/journal-open.jpg
- assets/images/demo/notebook-thread.jpg
- assets/images/demo/product-brush-pens.jpg
- assets/images/demo/product-deckle-paper.jpg
- assets/images/demo/product-desk-set.jpg
- assets/images/demo/product-field-journal.jpg
- assets/images/demo/product-furoshiki-gift.jpg
- assets/images/demo/product-indigo-ink.jpg
- assets/images/demo/product-ink-pad.jpg
- assets/images/demo/product-inkstone-set.jpg
- assets/images/demo/product-kozo-sheets.jpg
- assets/images/demo/product-letter-set.jpg
- assets/images/demo/product-seal-stamps.jpg
- assets/images/demo/product-thread-notebook.jpg
- assets/images/demo/shop-interior.jpg
- assets/images/demo/stamps.jpg
- assets/images/demo/washi-sheets.jpg
- assets/images/demo/workshop.jpg

The logo mark and the small arrow and chevron icons in style.css and assets/css/woocommerce.css are inline SVG written for this theme (same copyright and license as the theme).

== Changelog ==

= 1.1.0 =
* Layout refresh. Header: a paper side rail fixed on the left of wide screens (brand, the menu with a short ink stroke before each item, account and cart, and the season's note set top to bottom like a spine label); below 1024 px it folds into a top bar, with the full menu behind a button on phones.
* Footer: signed like a letter, with the atelier's name as a vertical line and a stamped persimmon seal beside the statement, address and links (the giant wordmark is gone).
* Home: a shelf mosaic. The opening, the shelf, the making and the fibres sit in hairline compartments like a type case (one large piece and three smaller ones on the shelf), and the journal shows one large post with two beside it. Section marks are now ruled labels above each section.
* Same palette, fonts, copy, demo content and importer. Pages imported by an earlier version keep their layout and still look right; only new imports use the mosaic patterns.

= 1.0.2 =
* Demo import: WordPress's sample "Hello world!" post now goes to the trash on a fresh site, but only while it is untouched (published, never edited, no comments but the sample one). An edited one is never changed, and running the import again does nothing more.

= 1.0.1 =
* The shop and product-search templates use the current search block (limited to products) instead of the outdated WooCommerce Product Search block, so the Site Editor no longer asks to upgrade it.

= 1.0.0 =
* Initial release.
