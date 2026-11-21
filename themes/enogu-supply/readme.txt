=== Enogu Supply ===
Contributors: shippress
Requires at least: 6.6
Tested up to: 7.1
Requires PHP: 7.4
License: GPL-2.0-or-later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Enogu Supply is a calm, photo-led WooCommerce block theme for an independent art-supply shop: paper, pigment, brushes and studio tools for illustrators and design students. The home page opens on three equal captioned photo columns that crossfade slowly, with the headline below the photos and a stats row, then four abutting rounded range panels under one light title, product tiles on pale grey, a vertical tagline story, a mill-order band with a slow parallax drift, the shop week as a spec table and six line icons. Manrope and Public Sans, a white ground, slate flat tabs and hairline-only orange. Sample content and products in English, Traditional Chinese, Japanese, French and German. Works without WooCommerce. WCAG AA colours.

== Description ==

A WordPress block theme from ShipPress (https://github.com/oberonlai/shippress-themes). See README.md for the design notes, templates and patterns.

== Installation ==

1. Download enogu-supply.zip from https://github.com/oberonlai/shippress-themes/releases/download/themes/enogu-supply.zip
2. In WordPress admin, go to Appearance > Themes > Add New Theme > Upload Theme, choose the zip and click Install Now.
3. Activate Enogu Supply.

On activation the theme sets itself up as a ready-to-use website (inc/demo-import.php): it creates its pages with all their text and images, a journal entry with categories and tags, the menu, and sets the front page and posts page. It never changes or deletes anything you wrote, and running it again creates nothing twice. With WooCommerce active it also adds eight sample products with four categories (inc/woo-import.php); without WooCommerce the theme works as a plain site and the home product tiles show the photographs.

Languages: the sample content comes in English (demo-content.json), Traditional Chinese, Japanese, French and German (demo-content.zh-TW.json, .ja.json, .fr.json, .de.json). The importer uses the `shippress_demo_lang` option (set by ShipPress from its interface language), else the site language.

Optional forms: the newsletter section and page always show an email field and a submit button; without a form plugin they open the visitor's email app with the request ready to send (the theme sends nothing itself). With MailPoet (explicit form ID) or Mailchimp for WP active, that plugin's form is shown instead (inc/shippress-forms.php).

Scroll effects: assets/sp-scroll.css and assets/sp-scroll.js (reveal, stagger and one parallax band). They respect prefers-reduced-motion and show everything without JavaScript.

The shop, its products, address, telephone number and prices are fictional.

== Copyright ==

Enogu Supply is distributed under the terms of the GNU GPL v2 or later.
Fonts: Manrope (OFL-1.1), Latin variable; Public Sans (OFL-1.1), Latin variable; Noto Sans TC and Noto Sans JP (OFL-1.1), Regular, subset to the characters of the Traditional Chinese and Japanese sample text; all WOFF2, see assets/fonts/.

= Images =

Images: AI-generated for this theme with Grok Build image_gen as documentary high-key photographs, released under GPL-2.0-or-later / CC0 (no stock images, no real or famous people, no brands; the shop is fictional). No transparent cut-outs are used. All are in assets/images/ (the ones imported into the Media Library are copied in assets/images/demo/).
- assets/images/hero-plan-chest.webp (home hero column 1: clerk drawing a cotton sheet from a plan chest)
- assets/images/hero-paper-deckle.webp and assets/images/demo/hero-paper-deckle.webp (home hero column 1 (second still) and product Cotton paper block)
- assets/images/hero-brush-counter.webp (home hero column 2: student comparing two round brushes at the counter)
- assets/images/hero-brush-jar.webp and assets/images/demo/hero-brush-jar.webp (home hero column 2 (second still) and product Brush roll)
- assets/images/hero-pigment-jars.webp and assets/images/demo/hero-pigment-jars.webp (home hero column 3: glass jars of earth pigment, and product Pure pigment jar)
- assets/images/hero-swatch.webp (home hero column 3 (second still): a hand painting a swatch strip)
- assets/images/range-paper.webp (home range panel: an open plan-chest drawer)
- assets/images/range-pigment.webp (home range panel: paint tubes and pans)
- assets/images/range-brushes.webp (home range panel: brushes on grey linen)
- assets/images/range-tools.webp (home range panel: knives, sharpener, tape and board)
- assets/images/product-cotton-sheet.webp and assets/images/demo/product-cotton-sheet.webp (home pick and product: cotton watercolour sheet)
- assets/images/product-tube.webp and assets/images/demo/product-tube.webp (home pick and product: watercolour tube)
- assets/images/product-round-brush.webp and assets/images/demo/product-round-brush.webp (home pick and product: round brush)
- assets/images/product-tool-set.webp and assets/images/demo/product-tool-set.webp (home pick and product: palette knives and brass sharpener)
- assets/images/product-sketch-roll.webp and assets/images/demo/product-sketch-roll.webp (product: sketch paper roll)
- assets/images/story-shopfront.webp (home story: the shop front)
- assets/images/mill-packing.webp and assets/images/demo/mill-packing.webp (home mill-order band (parallax) and journal entry: packing sheets between boards)
- assets/images/week-demo.webp (home shop week: Thursday demo evening)
